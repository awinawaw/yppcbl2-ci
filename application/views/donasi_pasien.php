<?php
$this->load->view('base/header');
?>

 <!--Page title-->
    <section class="page-title" style="background-image:url(http://localhost/yppcbl2/asset/images/background/img-1.jpg)">
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
    <section>
        <br>
    <form name="myform" action="checkboxes.php" method="post">
        <div class="flex-container">
            <div class="donasi-group" style="margin: auto;">
                <div class="row">
                    <div class="link-btn" style="margin: auto;">
                <input type="button" class="theme-btn btn-style-four" value="Donasi Semua Pasien" onclick="CheckAll(document.myform.check_list)"></input>
                    </div>
                    <div class="link-btn" style="margin: auto;">
                    <input type="button" class="theme-btn btn-style-four" value="Batal Pilih Semuanya" onClick="UnCheckAll(document.myform.check_list)"></input>
                    </div>
                </div>
            </div>
        
        
        </div>
            <!-- <button><a href="<?php echo site_url('Donasi/transaksi') ?>" class="btn-style-four">Lanjut</a></button> -->
        </div>

        <div class="container">
        <br>
        <div>
            <!-- <table border="2"> -->
            <?php
                foreach ($pasien as $row) {
            ?>
            <div class="card border-success mb-3">
                <table border="0" width="90%" style="margin: auto;">
                    <tr><td><br></td></tr>
                    <tr>
                        <td width='200'><img src="http://localhost/yppcbl2/asset/images/resource/cause-1.jpg" width='180' height='180'></td>
                        <td width="100"></td>
                        
                        <td width="70%" align="left" style="margin-left: 30px;"><h2><?php echo $row->NAMA?></h2><br>
                        <?php
                            $a = $row->DONASI_DIDAPAT;
                            $b = $row->DONASI_TARGET;
                            $sub = ($a/$b) * 100; 
                        ?>
                            <div class="progress-levels">
                                            
                                    <!--Skill Box-->
                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="<?php echo $sub; ?>"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                            </div>

                            <div class="donate clearfix">
                                <div class="float-left">
                                    <span>Raised: <?php echo $row->DONASI_DIDAPAT; ?></span>
                                </div>
                                <div class="float-right">
                                    Goal: <?php echo $row->DONASI_TARGET; ?>
                                </div>
                            </div>
                            
                        </td>
                        
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                        <td style="float: right;">
                            <div class="card border-success mb-3" style="margin: auto; width: 10rem; height:5rem;">
                                <div class="card-body text-success" style="margin: auto;">
                                <h5 class="card-title"><input type="checkbox" name="check_list" value="<?php echo $row->ID_PASIEN?>" /> Pilih<br/></h5>
                                </div>
                            </div>
                        </td>
                    </tr>
               
                </table>

           </div>
           <br>
            <?php
                }
            ?>
            
            

            <!-- </table> -->
            <div class="row">
               
               
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
    </form>
    <SCRIPT LANGUAGE="JavaScript">
                function CheckAll(chk)
                {
                for (i = 0; i < chk.length; i++)
                    chk[i].checked = true ;
                }

                function UnCheckAll(chk)
                {
                for (i = 0; i < chk.length; i++)
                    chk[i].checked = false ;
                }
            </script>
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