<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<div class="modal-window fade_in">
    <div class="modal-wrapper"><h2><?php echo $item->title;?></h2>
        <figure><?php echo $item->nama_lokasi;?></figure>
        <div class="rating" data-rating="4"></div>
        <div class="modal-body">
            <div class="gallery">
                <div class="image">
                    <div class="type"><i><img src="assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i><span><?php echo $item->kategori;?></span></div>
                    <div class="owl-carousel gallery">
                        <img src="<?php echo $item->image;?>">
                        <img src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo $item->longitude.','.$item->latitude;?>&zoom=15&size=600x300&maptype=roadmap&markers=color:blue%7Clabel:S%7C<?php echo $item->longitude.','.$item->latitude;?>&key=AIzaSyDf9DlqbM9eMAD-fiDuz9bAUwPCqU8USAo">
                    </div>
                </div>
            </div>
            <div class="modal-content">
                <section><h3>Deskripsi</h3>
                    <p>
                    <?php echo $item->description;?>
                    </p>
                </section>
<!--                 <section><h3>Overview</h3>
                    <dl>
                        <dt>Views</dt>
                        <dd>2</dd>
                        <dt>Likes</dt>
                        <dd>2</dd>
                        <dt>Comment</dt>
                        <dd>240</dd>
                    </dl>
                </section> -->
                <a href="<?php echo base_url().'Detail?id='.$item->id;?>" class="btn btn-default btn-large">Lihat Video</a></div>
        </div>
        <div class="modal-close"><img src="assets/img/close.png"></div>
    </div>
    <div class="modal-background fade_in"></div>
</div>

<script>
    // Render Owl carousel gallery

    var _rtl = false;
    drawOwlCarousel(_rtl);

    // Render Rating stars

    rating('.modal-window');

    // Remove modal element form DOM

    $('.modal-window .modal-background, .modal-close').live('click',  function(e){
        $('.modal-window').addClass('fade_out');
        setTimeout(function() {
            $('.modal-window').remove();
        }, 300);
    });
</script>

<!--[if lte IE 9]>
<script type="text/javascript" src="assets/js/ie-scripts.js"></script>
<![endif]-->
</body>
</html>