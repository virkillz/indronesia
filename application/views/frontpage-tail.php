<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/before.load.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/jquery.hotkeys.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/jquery.nouislider.all.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyDf9DlqbM9eMAD-fiDuz9bAUwPCqU8USAo&height=600"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/infobox.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/markerclusterer.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/maps.js"></script>

<!--[if lte IE 9]>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/ie-scripts.js"></script>
<![endif]-->

<script>
    var _latitude = <?php echo $longitude;?>;
    var _longitude = <?php echo $latitude;?>;
    var zoom = <?php echo $zoom;?>;
    // var jsonPath = '<?php echo base_url();?>assets/assets/json/items.json.txt';
    var jsonPath = '<?php echo base_url();?>Getlist';

    // Load JSON data and create Google Maps

    $.getJSON(jsonPath)
        .done(function(json) {
            createHomepageGoogleMap(_latitude,_longitude,json,zoom);
        })
        .fail(function( jqxhr, textStatus, error ) {
            console.log(error);
        })
    ;

    // Set if language is RTL and load Owl Carousel

    $(window).load(function(){
        var rtl = false; // Use RTL
        initializeOwl(rtl);
    });

    autoComplete();

</script>

<!--[if lte IE 9]>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/ie-scripts.js"></script>
<![endif]-->
</body>
</html>