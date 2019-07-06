
<?php
$this->load->view('base/header');
?>

 <!--Page title-->
 <?php
 if ($status=="True") {?>
<section class="page-title" >
        <div class="container">
            <h1>TERIMA KASIH ATAS DONASI ANDA</h1>
        </div>
    </section>
 
 <?php   
 }else{?>
<section class="page-title" style="background-image:url(asset/images/source/penyebaran.jpg)">
        <div class="container">
            <h1>ANDA BELUM MENGUNGGAH BUKTI TRANSAKSI</h1>
        </div>
    </section>
 
<?php
 }
 ?>
    
    
<?php
$this->load->view('base/footer')
?>