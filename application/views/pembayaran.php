
<?php
$this->load->view('base/header');
?>

 <!--Page title-->
    <section class="page-title" style="background-image:url(asset/images/source/penyebaran.jpg)">
        <div class="container">
            <h1>Pembayaran Donasi</h1>
        </div>
    </section>
 
    <!-- Detail Pembayaran -->
    <div class="container" align="center" >
                    <h1>TOTAL DONASI : Rp. <?= $tipe['amount'];;?></h1>
            <table align="center">

                    <?php if ($tipe['payment'] == "BCA KCU DAGO") {?>
                    <tr class="form-group">
                        <td  width="30%"><h4>Bank : <?= $tipe['payment'];;?></h4></td>
                        <td><h4> No Rekening : 7770355081</h4></td>
                    </tr>
                    <?php
                        }else if ($tipe['payment'] == "NIAGA DOLAR") {
                        ?>
                    <tr class="form-group">
                        <td width="40%"><h4>Bank : <?= $tipe['payment'];;?></h4></td>
                        <td ><h4> No Rekening : 224-02-00418-00-7</h4></td>
                    </tr>
                       <?php
                    }else{
                        ?>
                    <tr class="form-group">
                        <td width="40%"><h4>Bank : <?= $tipe['payment'];;?></h4></td>
                        <td><h4> No Rekening : 024-01-31428-00-6</h4></td>
                    </tr>
                        <?php
                    }
                    ?>
                    <tr>
                        
                        <td><h4> Atas Nama : </h4></td>
                        <td><h4> YAYASAN PEMBINA PENDERITA CELAH BIBIR DAN LANGIT - LANGIT</h4></td>
                    </tr>
                    <tr>
                        <td><h4>Batas waktu konfirmasi</h4></td>
                        <td><h4>1 x 24 Jam</h4></td>
                    </tr>
                </table>    
    </div>

    <div class="container" align="center" >
        <br><br><br><br><br><br>
        <!-- validasi foto, dimana nantinya action akan mengecek ke controller yang sudah membuat aturan input yang diharuskan-->
        <?php echo form_open('donasi/selesai');?>
            <h2>BUKTI TRANSFER</h2>
            <table align="center">
                <tr class="form-group" >
                    <td><input type="file" class="form-control-file" name="foto"></td>
                    <!-- Pesan yang akan ditampilkan jika rules atau aturan dalam validasi tidak dipenuhi-->
                        <?php echo validation_errors();?>
                </tr>
                <tr class="form-group">
                <input type="hidden" name="fname" value="<?=$tipe['nama'];;?>">
                <input type="hidden" name="payment" value="<?=$tipe['payment'];;?>">
                <input type="hidden" name="amount" value="<?=$tipe['amount'];;?>">
                
                    <td align="center"><button type="submit" class="btn btn-primary" >Submit</button></td>
                </tr>
            </table>
        </form>
    <br><br><br>
    </div>


    <!-- Call To Action -->
<!--     <section class="subscribe-section" style="background-image: url(images/background/4.jpg)">
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
 -->

<?php
$this->load->view('base/footer')
?>