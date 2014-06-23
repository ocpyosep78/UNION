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
<?php
    require_once "../admin/xkoneksi/koneksi_mysql.php";
    $id = $_GET["id"];
    $sql = "SELECT * FROM tb_berita where brt_id='$id'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    $count = mysql_num_rows($result);
?>

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
                <form enctype="multipart/form-data" method="post" name="contact" action="../berita/ed_news_proc.php">
                
                <div>
                    <input name="brt_id" type="hidden" class="kategori" id="brt_id" maxlength="6" value="<?php echo $row['brt_id'] ?>" required/>

                    <label for="judul">Judul</label> 
                    <input name="brt_judul" type="text" class="judul" id="brt_judul" value="<?php echo $row['brt_judul'] ?>" required/>
                    
                  	<label for="brt_kategori">Kategori</label>
                        <select name="brt_kategori" class="kategori">
                            <option value="Pengumuman" <?php if($row["brt_kategori"] == "Pengumuman") echo "selected";?>>Pengumuman</option>
                            <option value="Berita Kampus" <?php if($row["brt_kategori"] == "Berita Kampus") echo "selected";?>>Berita Kampus</option>
                            <option value="Informasi" <?php if($row["brt_kategori"] == "Informasi") echo "selected";?>>Informasi</option>
                        </select>


                    <label for="brt_gambar">Gambar / foto :</label>
                    <img src="../berita/images/news/<?php echo $row['brt_gambar'] ?>" width="220px" height="80px" class="img_border_b img_nom">
                    <input name="brt_gambar" type="file" class="input_field" required/>
                    
				</div>
                <label for="brt_isi">Isi Konten</label> 
                    <textarea name="brt_isi"><?php echo $row['brt_isi'] ?></textarea>
                    <br>                
                <div class="clear"></div>
                 	<input type="submit" name="submit" value="Edit Berita" class="submit_btn" onclick="return confirm('Edit konten berita ini ?')"/>
                 
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