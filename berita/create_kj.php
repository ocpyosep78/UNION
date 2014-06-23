<?php session_start(); 
    
    if(($_SESSION['ses_username'] != "") and ($_SESSION['ses_password'] != ""))
    {
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Selamat datang di Universitas Ontario</title>

<?php include 'xincludes/stylesheet.php'; ?>
<?php include 'xincludes/tinymce.php'; ?>
<?php include 'xincludes/script_dds.php'; ?>
<?php include 'xlinker/listing.php'; ?>

</head>
<body id="subpage">

<div id="tubes_wrapper">

    
    <?php include 'xmenu/menu_berita.php'; ?>
    
    <div id="tubes_page_intro">
    	<h1>Konten Kerjasama</h1>
        <p align="justify">Tambah keterangan kerja sama</p>
    </div>
    
    <div id="tubes_main">
    	<div class="col_32 left">

        <?php
                          if (!empty($_GET['tambah']) && $_GET['tambah'] == 'success') {
                          echo '<center>';
                          echo '<img src="../images/ok.png">&nbsp;&nbsp;<font color="green" size="2">Data berhasil ditambahkan !</font>';
                          echo '</center>';
                         }
                    ?>
                    <br/><br/>

            <div id="contact_form">
                <h2>Buat Konten Kerjasama</h2>
                <form enctype="multipart/form-data" method="post" name="contact" action="../prodi/proses_kj.php">
                
                <div>                
                    <label for="id">ID Perusahaan</label> 
                    <input name="kj_id" type="text" class="input_field" placeholder="contoh : KRJ001" id="kd_id" maxlength="6" required/>
                    
                  	<label for="kj_nama">Nama Perusahaan</label>
                    <input name="kj_nama" type="text" class="input_field" placeholder="contoh : Microsoft" id="kj_nama" required/>

                    <label for="kj_alamat">Alamat</label>
                    <input name="kj_alamat" type="text" class="input_field" placeholder="contoh : Jln. Ubud no 3" id="kj_alamat" required/>

                    <label for="kj_foto">Logo (optional) :</label>
                    <input type="file" class="input_field" name="kj_foto" >
                    
				</div>
                <label for="kj_detail">Isi Konten kerjasama</label> 
                    <textarea name="kj_detail"></textarea>
                    <br>                
                <div class="clear"></div>
                 	<input type="submit" name="submit" value="Tambah" class="submit_btn" onclick="return confirm('Apakah data sudah benar ?')"/>
                 
                </form>
            </div>    
        </div> 
                
		<div class="col_3 right">
			<div class="sidebar_section sidebar_section_bg">
                <?php include 'xmenu/side_berita.php';?>
            </div>
      </div>
        
      <div class="clear"></div>
                
    </div>
</div>

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
	<?php include 'xlinker/footlink.php'; ?>
</div>

</body>
</html>

<?php 
    }
    else
    {
        header('Location: ../admin/login.php');
    }
?>