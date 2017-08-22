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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-105081443-1', 'auto');
  ga('send', 'pageview');

</script>

<!--[if lte IE 9]>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/ie-scripts.js"></script>
<![endif]-->
</body>
</html>