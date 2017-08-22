

<body onunload="" class="page-subpage page-item-detail navigation-off-canvas" id="page-top">

<!-- Outer Wrapper-->
<div id="outer-wrapper">
    <!-- Inner Wrapper -->
    <div id="inner-wrapper">
        <!-- Navigation-->
        <div class="header">
            <div class="wrapper">
                <div class="brand">
                    <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/assets/img/logo.png" alt="logo"></a>
                </div>
                <nav class="navigation-items">
                    <div class="wrapper">
                        <ul class="main-navigation navigation-top-header"></ul>
                        <a href="<?php echo base_url();?>Submit" class="submit-item">
                            <div class="content"><span>Kirim Video Kamu</span></div>
                            <div class="icon">
                                <i class="fa fa-plus"></i>
                            </div>
                        </a>
                        <div class="toggle-navigation">
                            <div class="icon">
                                <div class="line"></div>
                                <div class="line"></div>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- end Navigation-->
        <!-- Page Canvas-->
        <div id="page-canvas">
            <!--Off Canvas Navigation-->
            <nav class="off-canvas-navigation">
                <header>Navigation</header>
                <div class="main-navigation navigation-off-canvas"></div>
            </nav>
            <!--end Off Canvas Navigation-->
            <!--Sub Header-->
            <section class="sub-header">
                <div class="search-bar horizontal collapse" id="redefine-search-form"></div>
                <!-- /.search-bar -->
                <div class="breadcrumb-wrapper">
                    <div class="container">
                        <div class="redefine-search">
                            <a href="#redefine-search-form" class="inner" data-toggle="collapse" aria-expanded="false" aria-controls="redefine-search-form">
                                <span class="icon"></span>
                                <span>Redefine Search</span>
                            </a>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="index-directory.html"><i class="fa fa-home"></i></a></li>
                            <li><a href="#">Page</a></li>
                            <li class="active">Detail</li>
                        </ol>
                        <!-- /.breadcrumb-->
                    </div>
                    <!-- /.container-->
                </div>
                <!-- /.breadcrumb-wrapper-->
            </section>
            <!--end Sub Header-->

            <!--Page Content-->
            <div id="page-content">

                <div id="map-detail"></div>
                <section class="container">
                    <div class="row">
                        <!--Item Detail Content-->
                        <div class="col-md-9">
                            <section class="block" id="main-content">
                                <header class="page-title">
                                    <div class="title">
                                        <h1><?php echo $title;?></h1>
                                        <figure><?php echo $nama_lokasi;?></figure>
                                    </div>
                                    <div class="info">
                                        <div class="type">
                                            <i><img src="<?php echo base_url().'assets/'.$ikon;?>" alt=""></i>
                                            <span><?php echo $kategori;?></span>
                                        </div>
                                    </div>
                                </header>
                                <div class="row">
                                    <!--Detail Sidebar-->
                                    <aside class="col-md-4 col-sm-4" id="detail-sidebar">
                                        <!--Contact-->
                                        <section>
                                            <header><h3>Video Owner</h3></header>
                                            <address>
                                                <div><?php echo $video_owner;?></div>
                                                <figure>
                                                    <div class="info">
                                                        <i class="fa fa-eye"></i>
                                                        <span><?php echo $views;?></span>
                                                    </div>
                                                    <div class="info">
                                                        <i class="fa fa-thumbs-o-up"></i>
                                                        <span><?php echo $likes;?></span>
                                                    </div>
                                                    <div class="info">
                                                        <i class="fa fa-comments"></i>
                                                        <a href="#"><?php echo $comments;?></a>
                                                    </div>
                                                </figure>
                                            </address>
                                        </section>
                                        <!--end Contact-->
                                        <!--Rating-->
                                        <section class="clearfix">
                                            <header class="pull-left"><a href="#reviews" class="roll"><h3>Rating</h3></a></header>
                                            <figure class="rating big pull-right" data-rating="4"></figure>
                                        </section>
                                        <!--end Rating-->
                                    </aside>
                                    <!--end Detail Sidebar-->
                                    <!--Content-->
                                    <div class="col-md-8 col-sm-8">
                                        <section>
                                            <article>


                                            <iframe width="560" height="315" src="<?php echo 'https://www.youtube.com/embed/'.$code;?>" frameborder="0" allowfullscreen></iframe>


                                            </article>
                                            <!-- /.item-gallery -->
                                            <article class="block">
                                                <header><h2>Description</h2></header>
                                                <p>
                                                <?php echo $description;?>
                                                </p>
                                            </article>
                                            <!-- /.block -->
                                            <article class="block">
                                                <header><h2>Tags</h2></header>
                                                <p>
                                                <?php echo $tags;?>
                                                </p>                                                

                                                <!-- /.list-slider -->
                                            </article>
                                            <!-- /.block -->
                                        </section>

<!--                                         <section class="block" id="reviews">
                                            <header class="clearfix">
                                                <h2 class="pull-left">Comment</h2>
                                                <a href="#write-review" class="btn framed icon pull-right roll">Write a review <i class="fa fa-pencil"></i></a>
                                            </header>
                                            <article class="clearfix overall-rating">
                                                <strong class="pull-left">Over Rating</strong>
                                                <figure class="rating big color pull-right" data-rating="4"></figure>
                                          
                                            </article>
                                            <section class="reviews">
                                                <article class="review">
                                                    <figure class="author">
                                                        <img src="<?php echo base_url();?>assets/assets/img/default-avatar.png" alt="">
                                                        <div class="date">12.05.2014</div>
                                                    </figure>
                                                   
                                                    <div class="wrapper">
                                                        <h5>Catherine Brown</h5>
                                                        <figure class="rating big color" data-rating="4"></figure>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Nulla vestibulum, sem ut sollicitudin consectetur, augue diam ornare massa,
                                                            ac vehicula leo turpis eget purus. Nunc pellentesque vestibulum mauris,
                                                            eget suscipit mauris imperdiet vel. Nulla et massa metus.
                                                        </p>
                                                        <div class="individual-rating">
                                                            <span>Value</span>
                                                            <figure class="rating" data-rating="4"></figure>
                                                        </div>
                                                       
                                                        <div class="individual-rating">
                                                            <span>Service</span>
                                                            <figure class="rating" data-rating="4"></figure>
                                                        </div>
                                                    
                                                    </div>
                                      
                                                </article>
                                        
                                                <article class="review">
                                                    <figure class="author">
                                                        <img src="<?php echo base_url();?>assets/assets/img/default-avatar.png" alt="">
                                                        <div class="date">10.05.2014</div>
                                                    </figure>
                                               
                                                    <div class="wrapper">
                                                        <h5>John Doe</h5>
                                                        <figure class="rating big color" data-rating="5"></figure>
                                                        <p>
                                                            Nunc pellentesque vestibulum mauris, eget suscipit mauris
                                                            imperdiet vel. Nulla et massa metus. Nam porttitor quam eget ante
                                                        </p>
                                                        <div class="individual-rating">
                                                            <span>Value</span>
                                                            <figure class="rating" data-rating="5"></figure>
                                                        </div>
                                                     
                                                        <div class="individual-rating">
                                                            <span>Service</span>
                                                            <figure class="rating" data-rating="5"></figure>
                                                        </div>
                                                    
                                                    </div>
                                             
                                                </article>
                                             
                                            </section>
                                       
                                        </section> -->

<!--                                         <section id="write-review">
                                            <header>
                                                <h2>Write a Review</h2>
                                            </header>
                                            <form id="form-review" role="form" method="post" action="?" class="background-color-white">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="form-review-name">Name</label>
                                                            <input type="text" class="form-control" id="form-review-name" name="form-review-name" required="">
                                                        </div>
                                               
                                                        <div class="form-group">
                                                            <label for="form-review-email">Email</label>
                                                            <input type="email" class="form-control" id="form-review-email" name="form-review-email" required="">
                                                        </div>
                                              
                                                        <div class="form-group">
                                                            <label for="form-review-message">Message</label>
                                                            <textarea class="form-control" id="form-review-message" name="form-review-message"  rows="3" required=""></textarea>
                                                        </div>
                                               
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-default">Submit Review</button>
                                                        </div>
                                                
                                                    </div>
                                                    <div class="col-md-4">
                                                        <aside class="user-rating">
                                                            <label>Value</label>
                                                            <figure class="rating active" data-name="value"></figure>
                                                        </aside>
                                                        <aside class="user-rating">
                                                            <label>Service</label>
                                                            <figure class="rating active" data-name="score"></figure>
                                                        </aside>
                                                    </div>
                                                </div>
                                            </form>
                                        </section> -->
                                    </div>
                                </div>
                            </section>                      
                        </div>

                        <div class="col-md-3">
                            <aside id="sidebar">
                                <section>
                                    <header><h2>Recommended Video</h2></header>
                                    <?php 
                                        foreach ($random as $item) {
                                            echo '
                                        <a href="'.base_url().'Detail?id='.$item->id.'" class="item-horizontal small" style="padding-bottom:15px;">
                                        <h3>'.$item->title.'</h3>
                                        <figure>'.$item->nama_lokasi.'</figure>
                                        <div class="wrapper">
                                            <div class="image"><img src="'.$item->image.'" alt=""></div>
                                            <div class="info">
                                                <div class="type">
                                                    <i><img src="'.base_url().'assets/'.$item->ikon.'" alt=""></i>
                                                    <span>'.$item->kategori.'</span>
                                                </div>
                                                <div class="rating" data-rating="4"></div>
                                            </div>
                                        </div>
                                    </a>

                                            ';
                                        }

                                    ?>
                                </section>
                                <section>
                                    <a href="#"><img src="<?php echo base_url();?>assets/assets/img/ad-banner-sidebar.png" alt=""></a>
                                </section>
<!--                                 <section>
                                    <header><h2>Categories</h2></header>
                                    <ul class="bullets">
                                        <li><a href="#" >Restaurant</a></li>
                                        <li><a href="#" >Steak House & Grill</a></li>
                                        <li><a href="#" >Fast Food</a></li>
                                        <li><a href="#" >Breakfast</a></li>
                                        <li><a href="#" >Winery</a></li>
                                        <li><a href="#" >Bar & Lounge</a></li>
                                        <li><a href="#" >Pub</a></li>
                                    </ul>
                                </section>
                                <section>
                                    <header><h2>Events</h2></header>
                                    <div class="form-group">
                                        <select class="framed" name="events">
                                            <option value="">Select Your City</option>
                                            <option value="1">London</option>
                                            <option value="2">New York</option>
                                            <option value="3">Barcelona</option>
                                            <option value="4">Moscow</option>
                                            <option value="5">Tokyo</option>
                                        </select>
                                    </div>
                            
                                </section>
                            </aside>
                     
                        </div>
-->
                    </div><!-- /.row-->
                </section>
                <!-- /.container-->
            </div>
            <!-- end Page Content-->
        </div>
        <!-- end Page Canvas-->
        <!--Page Footer-->
        <footer id="page-footer">
            <div class="inner">
                <div class="footer-bottom">
                    <div class="container">
                        <span class="left">(C)VirKill, 2017</span>
                            <span class="right">
                                <a href="#page-top" class="to-top roll"><i class="fa fa-angle-up"></i></a>
                            </span>
                    </div>
                </div>
                <!--/.footer-bottom-->
            </div>
        </footer>
        <!--end Page Footer-->
    </div>
    <!-- end Inner Wrapper -->
</div>
<!-- end Outer Wrapper-->


<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/before.load.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyDf9DlqbM9eMAD-fiDuz9bAUwPCqU8USAo&height=600"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/jquery.hotkeys.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/maps.js"></script>

<script>
    var itemID = <?php echo $id;?>;
    $.getJSON('<?php echo base_url().'Getlist/footage/'.$id;?>')
        .done(function(json) {
                $.each(json.data, function(a) {
                    if( json.data[a].id == itemID ) {
                        itemDetailMap(json.data[a]);
                    }
                });
        })
        .fail(function( jqxhr, textStatus, error ) {
            console.log(error);
        })
    ;
    $(window).load(function(){
        var rtl = false; // Use RTL
        initializeOwl(rtl);
    });
</script>

<!--[if lte IE 9]>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/ie-scripts.js"></script>
<![endif]-->
</body>
</html>