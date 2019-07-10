
<?php
$this->load->view('base/header');
?>

 <!--Page title-->
 
<section class="page-title" >
        <div class="container">
            <h1>Selamat Datang <?=$this->session->userdata('nama')?></h1>
            <h1 align="center">Mari Berdonasi</h1>
        </div>
        <div>
            <a href="<?php echo site_url('donasi/donasi_pasien')?>"><button class="theme-btn btn-style-four">Donasi Pasien</button></a>
        </div>
        <div style="margin-top: 10px;">
            <a href="<?php echo site_url('donasi/donasi_yayasan')?>"><button class="theme-btn btn-style-four">Donasi Yayasan</button></a>
        </div>
</section>

    
    
<?php
$this->load->view('base/footer')
?>