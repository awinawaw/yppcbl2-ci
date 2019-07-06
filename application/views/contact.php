
<?php
$this->load->view('base/header');
?>

 <!--Page title-->
    <section class="page-title" style="background-image:url(asset/images/background/img-1.jpg)">
        <div class="container">
            <h1>Contact Us</h1>
        </div>
    </section>
    <div class="bread-crumb">
        <div class="container">
            <ul class="clearfix">
                <li><a href="<?php echo site_url('home') ?>"><span class="fa fa-home"></span>Home</a></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </div>

    <!-- map section -->
    <section class="map-section">
<iframe src="https://maps.google.com/maps?q=Yayasan%20Pembina%20Penderita%20Celah%20Bibir%20dan%20Langit-langit%20(YPPCBL)&t=&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    <!-- Contact form -->
    <section class="contact-form-section sp-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mb-30">
                    <div class="default-form-area">
                        <h1>Kirim Pesan</h1>
                        <form id="contact-form" name="contact_form" class="contact-form style-five" action="inc/sendmail.php" method="post">
                            <div class="row clearfix">
                                <div class="col-md-6 column">        
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" name="form_name" class="form-control" value="" placeholder="" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 column">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="form_email" class="form-control required email" value="" placeholder="" required="">
                                    </div>
                                </div>
                                <div class="col-md-12 column">
                                    <div class="form-group">
                                        <label for="">Nomor Hp</label>
                                        <input type="text" name="form_phone" class="form-control" value="" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-12 column">
                                    <div class="form-group">
                                        <label for="">Isi Pesan</label>
                                        <textarea name="form_message" class="form-control textarea required" placeholder=""></textarea>
                                    </div>
                                </div>                                            
                            </div>
                            <div class="contact-section-btn">
                                <div class="form-group style-two">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="theme-btn btn-style-two" type="submit" data-loading-text="Please wait...">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 mb-30 pl-lg-5">
                    <div class="title">
                        <h4>Informasi Alamat</h4>
                        <div class="text mb-40">Yayasan Pembina Penderita Celah Bibir dan Langit-langit (YPPCBL)Gedung CLEFT CENTER</div>
                    </div>
                    <ul class="contact-info-list">
                        <li><span class="fas fa-map-marker-alt"></span><b>Alamat</b>Jalan Sekeloa Selatan No. 1 Gedung Cleft Center Bandung Jawa Barat - Indonesia (40132)</li>
                        <li><span class="fa fa fa-envelope-open"></span><b>Email</b>yppcbl@yahoo.co.id</li>
                        <li><span class="fa fa-phone"></span><b>Phone / Fax</b>+62 22 2533081/+62 22 70704696</li>
                        <li><span class="fa fa-globe"></span><b>Website</b></li>
                    </ul>
                    <ul class="social-icon-three">
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    
                </div>
            </div>            
        </div>
    </section>

    <!-- Call To Action -->
    <section class="subscribe-section" style="background-image: url(images/background/4.jpg)">
        <div class="container">
            <div class="row">
                <div class="title-column col-lg-8">
                    <h2>Subscribe to Newsletter</h2>
                    <div class="text">Sed do eiusmod tempor incididunt ut laboret dolore magna aliqua enim nostrud</div>
                </div>
                <div class="subscribe-form col-lg-4">
                    <form method="post" action="contact.html">
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Your email..." required="">
                            <button type="submit" class="theme-btn"><span class="fa fa-paper-plane"></span></button>
                        </div>
                    </form>
                </div>
            </div>                    
        </div>
    </section>


<?php
$this->load->view('base/footer')
?>