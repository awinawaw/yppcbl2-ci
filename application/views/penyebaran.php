
<?php
$this->load->view('base/header');
?>

 <!--Page title-->
    <section class="page-title" style="background-image:url(asset/images/source/penyebaran.jpg)">
        <div class="container">
            <h1>Penyebaran Sumbing</h1>
        </div>
    </section>
    <div class="bread-crumb">
        <div class="container">
            <ul class="clearfix">
                <li><a href="<?php echo site_url('home') ?>"><span class="fa fa-home"></span>Home</a></li>
                <li class="active">Penyebaran</li>
            </ul>
        </div>
    </div>

    <!-- map section -->
		<section class="flex-container">
			<div class="image-map">
				<img src="asset/images/resource/penyebaran.jpg" alt=""> 
			</div>
			<div class="parameter">
				<div>
					<form action="proses.php" method="get">
						<p>Tahun
						<select name='agama'>
							<option value='islam'>2019</option>
							<option value='kristen'>2017</option>
							<option value='katholik'>2016</option>
						</select>
						</p>
						<p>Jenis Kelamin
						<select name='gender'>
							<option value='islam'>laki-laki</option>
							<option value='kristen'>Perempuan</option>
						</select>
						</p>
					</form>
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