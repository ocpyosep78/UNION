<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Selamat datang di Universitas Ontario</title>

<?php include 'xincludes/stylesheet.php'; ?>
<?php include 'xincludes/script_dds.php'; ?>

</head>
<body id="subpage">

<div id="tubes_wrapper">
	
    <?php include 'xmenu/menu_news.php'; ?>
    
    <div id="tubes_page_intro">
    	<h1>Informasi Pendaftaran</h1>
        <p>Informasi mengenai pendaftaran mahasiswa/i Universitas Ontario</p>
    </div>
    
    
    <div id="tubes_main">
    	<div id="tubes_content" class="left">
            <div class="post-item">
            	<div class="post-meta">
                    <div class="post-meta-content">
                    	<h2>Form Pendaftaran Mahasiswa/i baru UNION</h2>
                    </div>
                    <div class="clear"></div>
				</div>
                <img class="img_border_b img_nom" src="images/daftar/01.jpg" alt="Post Image" /><br/>
                 <?php
                          if (!empty($_GET['message']) && $_GET['message'] == 'success') {
                          echo '<center>';
                          echo '<img src="../images/ok.png">&nbsp;&nbsp;<font color="green" size="2">Anda sudah berhasil melakukan registrasi !</font>';
                          echo '</center>';
                         }
                    ?>
                    <br/>
          </div>

        <div class="col_32 left">
            <div id="contact_form">
            <p align="justify"><font size="2">
                Terima kasih sudah melakukan pendaftaran sebagai calon mahasiswa Universitas Ontario. Anda akan mendapatkan email balasan dari pihak
                kami untuk instruksi selanjutnya. Klik <a href="../index.php">disini </a>untuk kembali ke beranda. </font>
                <hr>
            </p>

            </div>
                
                <div class="clear"></div>
                 
                </form>
            </div>    
        </div> 
                       
            
        </div>
                
		<div id="tubes_sidebar" class="right">
			
			<div class="sidebar_section sidebar_section_bg">
                <h2>Alamat Kampus</h2>
                <img align="center" src="images/kampus/page.jpg" alt="image" class="img_nom img_border"  width="250px" height="100px" />
                <p align="justify">Kampus Universitas Ontario berlokasi di : </p>
                <p align="justify">Jln. Ubud Selatan No.112 - 119
                                   Denpasar, Bali. 40876. Indonesia.</p>
                <p align="justify">Kontak :</p>
                <ul class="list_bullet">
                    <li>0361-76522211</li>
                    <li>Fax : 0361-754 (ext) 2</li>
                    <li>Email : union@union.ac.id</li>
                </ul>
                <a href="../kontak.php" class="more">Selanjutnya</a>
			</div>

            <div class="sidebar_section sidebar_section_bg">
                <h2>Tanggal Pendaftaran</h2>
                <p align="justify">Pendaftaran di bagi menjadi dua gelombang. Yakni :</p>
                <ul>
                    <li>Gelombang 1 : 19 Juni - 19 Juli 2014</li>
                    <li>Gelombang 2 : 20 Juli - 21 September 2014</li>
                </ul>
            </div>
            
      </div>
        
        <div class="clear"></div>
                
    </div> <!-- END of main -->
</div> <!-- END of wrapper -->

<div id="tubes_bottom_wrapper">
	<div id="tubes_bottom">
    	
        <div class="col col_3">
            <?php include 'xlinker/kampus_foto.php'; ?>
        </div>
    	
        <div class="col col_3">
        	<?php include 'xlinker/bawah.php'; ?>
        </div>
        
        <div class="col col_3 no_mr">
        	<?php include 'xlinker/sosmed.php'; ?>
        </div>
        
        <div class="clear"></div>
    </div>
    
</div>

<div id="tubes_footer_wrapper">
	<div id="tubes_footer">
    	<?php include 'xlinker/footlink.php'; ?>
    </div>
</div>

</body>
</html>