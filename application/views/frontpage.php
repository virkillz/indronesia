

<body onunload="" class="map-fullscreen page-homepage navigation-off-canvas" id="page-top">

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
                            <div class="content"><span>Submit Your Item</span></div>
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
            <!--Page Content-->
            <div id="page-content">
            <!-- Map Canvas-->
            <div class="map-canvas list-width-30">
                <!-- Map -->
                <div class="map">
                    <div class="toggle-navigation">
                        <div class="icon">
                            <div class="line"></div>
                            <div class="line"></div>
                            <div class="line"></div>
                        </div>
                    </div>
                    <!--/.toggle-navigation-->
                    <div id="map" class="has-parallax"></div>
                    <!--/#map-->
                    <div class="search-bar horizontal">
                        <form class="main-search border-less-inputs" role="form" method="get" action="<?php echo base_url();?>">
                            <div class="input-row">
<!--                                 <div class="form-group">
                                    <input type="text" class="form-control" id="keyword" name="q" placeholder="Keyword Pencarian">
                                </div> -->
                            
<!--                                 <div class="form-group">
                                    <div class="input-group location">
                                        <input type="text" class="form-control" name="kota" id="location" placeholder="Kota">
                                        <span class="input-group-addon"><i class="fa fa-map-marker geolocation" data-toggle="tooltip" data-placement="bottom" title="Find my position"></i></span>
                                    </div>
                                </div> -->
                         
                                <div class="form-group" style="max-width: 90%;">
                                    <select name="prov">                             
                                        <option <?php if ($prov=='Aceh') {echo 'selected';}?>>Aceh</option>
                                        <option <?php if ($prov=='Bali') {echo 'selected';}?>>Bali</option>
                                        <option <?php if ($prov=='Banten') {echo 'selected';}?>>Banten</option>
                                        <option <?php if ($prov=='Bengkulu') {echo 'selected';}?>>Bengkulu</option>
                                        <option <?php if ($prov=='DI Yogyakarta') {echo 'selected';}?>>DI Yogyakarta</option>
                                        <option <?php if ($prov=='DKI Jakarta') {echo 'selected';}?>>DKI Jakarta</option>
                                        <option <?php if ($prov=='Gorontalo') {echo 'selected';}?>>Gorontalo</option>
                                        <option <?php if ($prov=='Jambi') {echo 'selected';}?>>Jambi</option>
                                        <option <?php if ($prov=='Jawa Barat') {echo 'selected';}?>>Jawa Barat</option>
                                        <option <?php if ($prov=='Jawa Tengah') {echo 'selected';}?>>Jawa Tengah</option>
                                        <option <?php if ($prov=='Jawa Timur') {echo 'selected';}?>>Jawa Timur</option>
                                        <option <?php if ($prov=='Kalimantan Barat') {echo 'selected';}?>>Kalimantan Barat</option>
                                        <option <?php if ($prov=='Kalimantan Selatan') {echo 'selected';}?>>Kalimantan Selatan</option>
                                        <option <?php if ($prov=='Kalimantan Tengah') {echo 'selected';}?>>Kalimantan Tengah</option>
                                        <option <?php if ($prov=='Kalimantan Timur') {echo 'selected';}?>>Kalimantan Timur</option>
                                        <option <?php if ($prov=='Kalimantan Utara') {echo 'selected';}?>>Kalimantan Utara</option>
                                        <option <?php if ($prov=='Kepulauan Bangka Belitung') {echo 'selected';}?>>Kepulauan Bangka Belitung</option>
                                        <option <?php if ($prov=='Kepulauan Riau') {echo 'selected';}?>>Kepulauan Riau</option>
                                        <option <?php if ($prov=='Lampung') {echo 'selected';}?>>Lampung</option>
                                        <option <?php if ($prov=='Maluku') {echo 'selected';}?>>Maluku</option>
                                        <option <?php if ($prov=='Maluku Utara') {echo 'selected';}?>>Maluku Utara</option>
                                        <option <?php if ($prov=='Nusa Tenggara Barat') {echo 'selected';}?>>Nusa Tenggara Barat</option>
                                        <option <?php if ($prov=='Nusa Tenggara Timur') {echo 'selected';}?>>Nusa Tenggara Timur</option>
                                        <option <?php if ($prov=='Papua') {echo 'selected';}?>>Papua</option>
                                        <option <?php if ($prov=='Papua Barat') {echo 'selected';}?>>Papua Barat</option>
                                        <option <?php if ($prov=='Riau') {echo 'selected';}?>>Riau</option>
                                        <option <?php if ($prov=='Sulawesi Barat') {echo 'selected';}?>>Sulawesi Barat</option>
                                        <option <?php if ($prov=='Sulawesi Selatan') {echo 'selected';}?>>Sulawesi Selatan</option>
                                        <option <?php if ($prov=='Sulawesi Tengah') {echo 'selected';}?>>Sulawesi Tengah</option>
                                        <option <?php if ($prov=='Sulawesi Tenggara') {echo 'selected';}?>>Sulawesi Tenggara</option>
                                        <option <?php if ($prov=='Sulawesi Utara') {echo 'selected';}?>>Sulawesi Utara</option>
                                        <option <?php if ($prov=='Sumatera Barat') {echo 'selected';}?>>Sumatera Barat</option>
                                        <option <?php if ($prov=='Sumatera Selatan') {echo 'selected';}?>>Sumatera Selatan</option>
                                        <option <?php if ($prov=='Sumatera Utara') {echo 'selected';}?>>Sumatera Utara</option>   
                                                </select>

                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.input-row -->
                        </form>
                        <!-- /.main-search -->
                    </div>
                    <!-- /.search-bar -->
                </div>
                <!-- end Map -->
                <!--Items List-->
                <div class="items-list">
                    <div class="inner">
                        <header>
                            <h3>Results</h3>
                        </header>
                        <ul class="results list">

                        </ul>
                    </div>
                    <!--results-->
                </div>
                <!--end Items List-->
            </div>
            <!-- end Map Canvas-->


                <section id="image" >
                    <div class="container">
                        <div class="col-md-8 col-md-offset-2">

                            <div class="text-banner">
                               <figure>
                                    <img src="<?php echo base_url();?>assets/assets/img/dronesia.png" alt="">
                                </figure> 
                        
                                    <h2>Mengeksplorasi Keindahan Indonesia dari Udara</h2>
                                    <p>
                                        Indronesia adalah peta itneraktif berisi <?php echo $count;?> video dari lokasi menarik di seluruh Indonesia. Dibuat oleh para relawan pecinta aerial videografi dan pecinta pariwisata Indonesia. Bantu kami untuk mengembangkan isi dari platform non profit ini.
                                    </p>                                
                            </div>
                        </div>
                    </div>
                    <!--/.container-->
                    <div class="background">
                        <img src="<?php echo base_url();?>assets/assets/img/about-us-bg.jpg" alt="">
                    </div>
                    <!--/.bakcground-->
                </section>

 <section class="block background-color-white" id="features">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="feature-box">
                                    <i class="fa fa-send-o"></i>
                                    <div class="description">
                                        <h3>Eksplorasi keindahan Indonesia dari Udara </h3>
                                        <p>
                                            Indronesia adalah direktori pariwisata Indonesia yang diabadikan lewat dokumentasi udara menggunakan drone dan sejenisnya. 
                                        </p>
                                    </div>
                                </div>
                                <!--/.feature-box-->
                            </div>
                            <!--/.col-md-4-->
                            <div class="col-md-4 col-sm-4">
                                <div class="feature-box">
                                    <i class="fa fa-film"></i>
                                    <div class="description">
                                        <h3>Tunjukkan hasil kreasimu</h3>
                                        <p>
                                        Selain mempromosikan kekayaan pariwisata Indonesia, platform ini juga digunakan untuk mempromosikan hasil karya video anak anak bangsa.
                                        </p>
                                    </div>
                                </div>
                                <!--/.feature-box-->
                            </div>
                            <!--/.col-md-4-->
                            <div class="col-md-4 col-sm-4">
                                <div class="feature-box">
                                    <i class="fa fa-plane"></i>
                                    <div class="description">
                                        <h3>Temukan tempat baru untuk terbang </h3>
                                        <p>
                                        Bagi penggemar drone yang mengunjungi suatu wilayah dapat dengan mudah menjadikan peta ini sebagai pedoman untuk merencanakan kunjungan.
                                        </p>
                                    </div>
                                </div>
                                <!--/.feature-box-->
                            </div>
                            <!--/.col-md-4-->
                        </div>
                        <!--/.row-->
                    </div>
                    <!--/.container-->
                </section>



                <!--Featured-->
                <section id="featured" class="block background-color-grey-dark equal-height">
                    <div class="container">
                        <header><h2>Featured</h2></header>
                        <div class="row">
                        <?php 
                        foreach ($feature as $item) {
                           
                            echo '

                            <div class="col-md-3 col-sm-3">
                                <div class="item featured">
                                    <div class="image">
                                        <div class="quick-view" id="1"><i class="fa fa-eye"></i><span>Quick View</span></div>
                                        <a href="'.base_url().'Detail?id='.$item->id.'">
                                            <div class="overlay">
                                                <div class="inner">
                                                    <div class="content">
                                                        <h4>Description</h4>
                                                        <p>'.$item->description.'</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-specific">
                                                <span title="Bedrooms"><i class="fa fa-comment"></i> '.$item->comments.' </span>
                                                <span title="Bathrooms"><i class="fa fa-eye"></i> '.$item->views.' </span>
                                                <span title="Area"><i class="fa fa-thumbs-o-up"></i> '.$item->likes.' </span>
                                    
                                            </div>
                                            <!--
                                            <div class="icon">
                                                <i class="fa fa-thumbs-up"></i>
                                            </div>
                                            -->
                                            <img src="'.$item->image.'" alt="" style="min-height:196px;">
                                        </a>
                                    </div>
                                    <div class="wrapper">
                                        <a href="'.base_url().'Detail?id='.$item->id.'"><h3>'.$item->title.'</h3></a>
                                        <figure>'.$item->nama_lokasi.'</figure>
                                        <div class="info">
                                            <div class="type">
                                                <i><img src="'.base_url().'assets/'.$item->ikon.'" alt=""></i>
                                                <span>'.$item->kategori.'</span>
                                            </div>
                                            <div class="rating" data-rating="4"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.item-->
                            </div>

                            ';


                        }

                        ?>





                            <!--/.col-sm-4-->
                        </div>
                        <!--/.row-->
                    </div>
                    <!--/.container-->
                </section>
                <!--end Featured-->


                <!--Banner-->
                <section>
                    <div class="container">
                        <div class="block">
                            <a href="#"><img src="<?php echo base_url();?>assets/assets/img/ad-banner.png" alt=""></a>
                        </div>
                    </div>
                </section>
                <!--end Banner-->
                <!--end Partners-->
            </div>
            <!-- end Page Content-->
        </div>
        <!-- end Page Canvas-->
        <!--Page Footer-->
        <footer id="page-footer" style="paddingx-top: 0px;">
            <div class="inner" style="padding-top: 0;">
                <div class="footer-bottom">
                    <div class="container">
                        <span class="left">(C)VirKill 2017</span>
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

