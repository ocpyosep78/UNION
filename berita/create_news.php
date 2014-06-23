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
    	<h1>Konten Berita</h1>
        <p align="justify">Buat konten berita disini</p>
    </div>
    
    <div id="tubes_main">
    	<div class="col_32 left">

                     <?php
                          if (!empty($_GET['buat']) && $_GET['buat'] == 'success') {
                          echo '<center>';
                          echo '<img src="../images/ok.png">&nbsp;&nbsp;<font color="green" size="2">Konten berita berhasil dibuat !</font>';
                          echo '</center>';
                         }
                    ?>
                    <br/><br/>

            <div id="contact_form">
                <h2>Buat Konten Berita</h2>
                <form enctype="multipart/form-data" method="post" name="contact" action="../berita/news_proc.php">
                
                <div>
                    <label for="id">Berita ID</label> 
                    <input name="brt_id" type="text" class="kategori" id="brt_id" maxlength="6" placeholder="Contoh : BRT002" required/>

                    <label for="judul">Judul</label> 
                    <input name="brt_judul" type="text" class="judul" id="brt_judul" required/>
                    
                  	<label for="brt_kategori">Kategori</label>
                        <select name="brt_kategori" class="kategori">
                            <option value="Pengumuman">Pengumuman</option>
                            <option value="Berita Kampus">Berita Kampus</option>
                            <option value="Informasi">Informasi</option>
                        </select>


                    <label for="brt_gambar">Gambar / foto :</label>
                    <input name="brt_gambar" type="file" class="input_field" required/>
                    
				</div>
                <label for="brt_isi">Isi Konten</label> 
                    <textarea name="brt_isi"></textarea>
                    <br>                
                <div class="clear"></div>
                 	<input type="submit" name="submit" value="Buat Berita" class="submit_btn" onclick="return confirm('Buat konten berita ini ?')"/>
                 
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
    </div> <!-- END of bottom -->
    
</div> <!-- END of bottom wrapper -->

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