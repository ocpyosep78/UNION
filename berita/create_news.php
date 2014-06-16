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
            <div id="contact_form">
                <h2>Buat Konten Berita</h2>
                <form method="post" name="contact" action="#">
                
                <div>                
                    <label for="judul">Judul</label> 
                    <input name="judul" type="text" class="judul" id="judul" required/>
                    
                  	<label for="email">Kategori</label>
                        <select name="kategori" class="kategori">
                            <option name="pengumuman">Pengumuman</option>
                            <option name="berita_kampus">Berita Kampus</option>
                        </select>


                    <label for="foto">Gambar / foto (optional) :</label>
                    <input name="berita_foto" type="file" class="input_field" required/>
                    
				</div>
                <label for="message">Isi Konten</label> 
                    <textarea></textarea>
                    <br>                
                <div class="clear"></div>
                 	<input type="submit" name="submit" value="Buat Berita" class="submit_btn" />
                 
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