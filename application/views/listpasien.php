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
	
            <div class="row clearfix">
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
                            <!--Progress Levels-->
                            <div class="progress-levels">
                            </div>

                            <div class="donate clearfix">
                                <div class="float-left">
                                    <span>Raised: $6,500</span>
                                </div>
                                <div class="float-right">
                                    Goal: $10,000
                                </div>
                            </div>
                            <div class="link-btn"><a href="" class="theme-btn btn-style-four donate-box-btn">Donate Now</a></div>
                        </div>
                    </div>
                </div>
	
	
	
	
	
	


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
$this->load->view('base/Footer'); 
?>