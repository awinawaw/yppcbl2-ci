<?php
$this->load->view('base/header');
?>

 <!--Page title-->
    <section class="page-title" style="background-image:url(asset/images/background/img-1.jpg)">
        <div class="container">
            <h1>Donasi Pasien</h1>
        </div>
    </section>
    <div class="bread-crumb">
        <div class="container">
            <ul class="clearfix">
                <li><a href="<?php echo site_url('home') ?>"><span class="fa fa-home"></span>Home</a></li>
                <li class="active">Donasi Pasien</li>
            </ul>
        </div>
    </div>

    <!-- Causes Section -->
    <section class="causes-section sp-two">
		<div class="flex-container">
			<button><a href="#" class="btn-style-four">Donasi Semua</a></button>
			<button><a href="<?php echo site_url('Donasi/transaksi') ?>" class="btn-style-four">Lanjut</a></button>
		</div>
        <div class="container">
            <div class="row">
                <!--Cause Block-->
                <div class="cause-block col-lg-4 col-md-6">
                    <div class="inner-box">
                        <figure class="image">
                            <img src="asset/images/resource/cause-1.jpg" alt="">
                            <div class="overlay">
                            </div>
                        </figure>
                        <div class="lower-content">
                            <h4>Adi Budi Utomo</h4>
                            <div class="text">Auis nostrud exercitation ullamc laboris nisitm aliquip ex bea sed consequat duis autes ure dolor. dolore magna aliqua nim ad minim. </div>


                            <!--Progress Levels-->
                            <div class="progress-levels">
                                        
                                <!--Skill Box-->
                                <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner"><div class="bar-fill" data-percent="65"><div class="percent"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="donate clearfix">
                                <div class="float-left">
                                    <span>Raised: $6,500</span>
                                </div>
                                <div class="float-right">
                                    Goal: $10,000
                                </div>
                            </div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-four donate-box-btn">Donate Now</a></div>
                        </div>
                    </div>
                </div>
                <!--Cause Block-->
                <div class="cause-block col-lg-4 col-md-6">
                    <div class="inner-box">
                        <figure class="image">
                            <img src="asset/images/resource/cause-2.jpg" alt="">
                            <div class="overlay">
                            </div>
                        </figure>
                        <div class="lower-content">
                            <h4>Sofia</h4>
                            <div class="text">Auis nostrud exercitation ullamc laboris nisitm aliquip ex bea sed consequat duis autes ure dolor. dolore magna aliqua nim ad minim. </div>


                            <!--Progress Levels-->
                            <div class="progress-levels">
                                        
                                <!--Skill Box-->
                                <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner"><div class="bar-fill" data-percent="42"><div class="percent"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="donate clearfix">
                                <div class="float-left">
                                    <span>Raised: $7,500</span>
                                </div>
                                <div class="float-right">
                                    Goal: $20,000
                                </div>
                            </div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-four donate-box-btn">Donate Now</a></div>
                        </div>
                    </div>
                </div>
                <!--Cause Block-->
                <div class="cause-block col-lg-4 col-md-6">
                    <div class="inner-box">
                        <figure class="image">
                            <img src="asset/images/resource/cause-3.jpg" alt="">
                            <div class="overlay">
                            </div>
                        </figure>
                        <div class="lower-content">
                            <h4>Arman</h4>
                            <div class="text">Auis nostrud exercitation ullamc laboris nisitm aliquip ex bea sed consequat duis autes ure dolor. dolore magna aliqua nim ad minim. </div>


                            <!--Progress Levels-->
                            <div class="progress-levels">
                                        
                                <!--Skill Box-->
                                <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner"><div class="bar-fill" data-percent="83"><div class="percent"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="donate clearfix">
                                <div class="float-left">
                                    <span>Raised: $5,500</span>
                                </div>
                                <div class="float-right">
                                    Goal: $12,000
                                </div>
                            </div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-four donate-box-btn">Donate Now</a></div>
                        </div>
                    </div>
                </div>
                <!-- end -->
                    </div>
                </div>
            <ul class="page_pagination_two center mt-40">
                <li><a href="#" class="tran3s"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                <li><a href="#" class="active tran3s">1</a></li>
                <li><a href="#" class="tran3s">2</a></li>
                <li><a href="#" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            </ul>
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
$this->load->view('base/footer');
?>