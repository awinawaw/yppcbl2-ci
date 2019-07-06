
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
	
	<!--section about sumbing-->
	<section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-1">
                    <div class="pl-lg-5">
                        <!-- sec-title -->
                        <div class="sec-title style-two">
                            <h1>Apa itu <span>Sumbing ?</span></h1>
                        </div>
                        <!-- about block -->
                        <div class="about-block">
                            <div class="inner-box">
                                <div class="text">
                                    <p>Yayasan Pembina Penderita Celah Bibir dan langit-langit (YPPCBL) adalah suatu yayasan non profit yang bergerak dibidang sosial medias dengan tujuan utamanya membantu penderita kelainan celah pada bibir dan langit-langit dari keluarga kurang mampu.</p>
                                    <p>TPPCBL berdiri dengan gagasan dan prakarsa Bapak Prof. Soeria Soemantri, MPH pada tanggal 25 Juni 1979 dengan akta notaris Ny. Harry Hardjito nomor 35, tanggal 25 Juni 1979.</p>
                                </div>
								<div class="link-btn"><a href="<?php echo site_url('') ?>" class="theme-btn btn-style-two">BACA LEBIH LANJUT</a></div>
                            </div>
                        </div>
                    </div>    
                </div>
				<div class="col-lg-5 image-block">
                    <div class="image big-image"><img src="asset/images/resource/about-sumbing.jpg" alt=""></div>
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