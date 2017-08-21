

<body onunload="" class="page-subpage page-submit navigation-off-canvas" id="page-top">

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
                <header>Navigasi</header>
                <div class="main-navigation navigation-off-canvas"></div>
            </nav>
            <!--end Off Canvas Navigation-->

            <!--Sub Header-->
            <section class="sub-header">
                <div class="search-bar horizontal collapse" id="redefine-search-form"></div>
                <!-- /.search-bar -->
            </section>
            <!--end Sub Header-->

            <!--Page Content-->
            <div id="page-content">
                <section class="container">
                    <div class="row">
                        <!--Content-->
                        <div class="col-md-9">
                            <header>
                                <h1 class="page-title">Kirim Video</h1>
                            </header>
                            <div style="color:tomato";><?php echo validation_errors(); ?></div>
                            <form id="form-submit" role="form" method="post" action="<?php echo base_url();?>Submit" enctype="multipart/form-data">
                                <section>
                                    <div class="form-group large">
                                        <label for="title">Youtube URL</label>
                                        <input type="url" class="form-control" id="title" name="url" pattern="https?://.+" required />
                                    </div>
                                </section>
                                <section>
                                    <h3>Informasi Lokasi</h3>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group">
                                                <label for="state">Nama Lokasi</label>
                                                <input type="text" class="form-control" id="state" name="namalokasi">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.row-->
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group">
                                                <label for="phone-number">Kota</label>
                                                <input type="text" class="form-control"  name="kota" >
                                            </div>
                                        </div>
                                        <!--/.col-md-4-->
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group">
                                                <label for="email">Provinsi</label>
                                                <select name="provinsi">
                                                    <option>Aceh</option>
                                                    <option>Bali</option>
                                                    <option>Banten</option>
                                                    <option>Bengkulu</option>
                                                    <option>DI Yogyakarta</option>
                                                    <option>DKI Jakarta</option>
                                                    <option>Gorontalo</option>
                                                    <option>Jambi</option>
                                                    <option>Jawa Barat</option>
                                                    <option>Jawa Tengah</option>
                                                    <option>Jawa Timur</option>
                                                    <option>Kalimantan Barat</option>
                                                    <option>Kalimantan Selatan</option>
                                                    <option>Kalimantan Tengah</option>
                                                    <option>Kalimantan Timur</option>
                                                    <option>Kalimantan Utara</option>
                                                    <option>Kepulauan Bangka Belitung</option>
                                                    <option>Kepulauan Riau</option>
                                                    <option>Lampung</option>
                                                    <option>Maluku</option>
                                                    <option>Maluku Utara</option>
                                                    <option>Nusa Tenggara Barat</option>
                                                    <option>Nusa Tenggara Timur</option>
                                                    <option>Papua</option>
                                                    <option>Papua Barat</option>
                                                    <option>Riau</option>
                                                    <option>Sulawesi Barat</option>
                                                    <option>Sulawesi Selatan</option>
                                                    <option>Sulawesi Tengah</option>
                                                    <option>Sulawesi Tenggara</option>
                                                    <option>Sulawesi Utara</option>
                                                    <option>Sumatera Barat</option>
                                                    <option>Sumatera Selatan</option>
                                                    <option>Sumatera Utara</option>     
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.row-->
                                </section>
                                <!--/#address-contact-->
                                <section>
                                    <h3>Lokasi</h3>
                                    <div id="map-simple" class="map-submit"></div>
                                    <div id="current">Tunjukkan lokasi pada peta</div>
                                    <input id="longlat" name="longlat" type="hidden">
                                </section>
                                <section>
                                    <h3>Informasi Lain</h3>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group">
                                                <label for="state">Kategori</label>
                                                <select name="kategori">
                                                <?php 
                                                    foreach ($kategori as $cat) {
                                                        echo '<option>'.$cat->nama.'</option>';
                                                    }
                                                ?>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <!--/.row-->
<!--                                     <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group">
                                                <label for="phone-number">Pembuat Video</label>
                                                <input type="text" class="form-control" id="phone-number" name="owner">
                                            </div>
                                        </div>
                                    </div> -->
                                    <!--/.row-->
                                </section>
                                <!--end Opening Hours-->
                                <hr>
                                <section>
                                    <figure class="pull-left margin-top-15">
                                        <p>Video anda akan diseleksi secara manual oleh admin. Pastikan anda membaca <a href="terms-conditions.html" class="link">Syarat dan Ketentuan</a></p>
                                    </figure>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default pull-right" id="submit">Kirimkan</button>
                                    </div>
                                    <!-- /.form-group -->
                                </section>
                            </form>
                            <!--/#form-submit-->
                        </div>
                        <!--/.col-md-9-->
                        <!--Sidebar-->
                        <div class="col-md-3">
                            <aside id="sidebar">
                                <div class="sidebar-box">
                                    <h3>Kirim hasil karyamu</h3>
                                    <p>Platform ini ditujukan untuk mempromosikan keindahan panorama Indonesia dari udara, menunjukkan portofolio videografer, serta memberikan informasi bagi penggemar drone mengenai lokasi yang menarik untuk terbang.</p>
                                    <!-- /.form-group -->
                                    <h4>Syarat Kirim Video</h4>
                                    <ul class="bullets">
                                        <li>Nama dan lokasi akurat</li>
                                        <li>Tidak melanggar privasi</li>
                                        <li class="disabled">Tidak melanggar hukum</li>
                                        <li class="disabled">Tidak melanggar Hak cipta</li>
                                    </ul>
                                </div>
                            </aside>
                            <!-- /#sidebar-->
                        </div>
                        <!-- /.col-md-3-->
                        <!--end Sidebar-->
                    </div>
                </section>
            </div>
            <!-- end Page Content-->
        </div>
        <!-- end Page Canvas-->
        <!--Page Footer-->
        <footer id="page-footer" >
            <div class="inner" style="padding-top: 0;">
                <div class="footer-bottom" style="margin-top: 0;">
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

<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/before.load.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyDf9DlqbM9eMAD-fiDuz9bAUwPCqU8USAo"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/icheck.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/jquery.hotkeys.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/dropzone.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/jquery.ui.timepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/maps.js"></script>

<script>
    $(window).load(function(){

        // Try HTML5 geolocation.
        // if (navigator.geolocation) {
        //   navigator.geolocation.getCurrentPosition(function(position) {
        //     var _latitude = position.coords.latitude;
        //     var _longitude = position.coords.longitude;
        // });} else {

        // var _latitude = 51.541599;
        // var _longitude = -0.112588;

        //   }

        var _latitude = -8.49410453755187;
        var _longitude = 115.224609375;
        var draggableMarker = true;
        simpleMap(_latitude, _longitude,draggableMarker);
    });
    autoComplete();
</script>

<!--[if lte IE 9]>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/js/ie-scripts.js"></script>
<![endif]-->
</body>
</html>