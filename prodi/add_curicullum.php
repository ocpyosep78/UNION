<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Selamat datang di Universitas Ontario</title>

<?php include '../berita/xincludes/stylesheet.php'; ?>
<?php include '../berita/xincludes/script_dds.php'; ?>
<?php include '../berita/xlinker/listing.php'; ?>
<?php include '../berita/xincludes/tinymce.php'; ?>
</head>
<body id="subpage">

<div id="tubes_wrapper">

    
    <?php include 'xmenu/menu_admin.php'; ?>
    
    <div id="tubes_page_intro">
    	<h1>Konten Kurikulum</h1>
        <p align="justify">Tambah konten kurikulum</p>
    </div>
    
    <div id="tubes_main">
    	<div class="col_32 left">
            <div id="contact_form">
                    <?php
                      if (!empty($_GET['add']) && $_GET['add'] == 'success') {
                      echo '<center>';
                      echo '<img src="../images/ok.png">&nbsp;&nbsp;<font color="green" size="2">Berhasil menambah kurikulum !</font>';
                      echo '</center>';
                     }
                     ?>
                     <br/><br/>

                <h2>Tambah Kurikulum</h2>
                <form method="post" name="contact" action="../prodi/cur_action.php" enctype="multipart/form-data">
                <div>                
                    <label for="kurikulum_id">Kurikulum ID </label> 
                    <input name="kur_id" type="text" class="inputtinyint" id="kur_id" placeholder="cth:KYT002" maxlength="6" required/>
                </div>
                <div>                
                    <label for="tahun">Kurikulum Versi Tahun </label> 
                    <select name="kur_tahun" class="inputtinyint" >
                           <option value="2007">2007</option>
                           <option value="2010">2010</option>
                           <option value="2013">2013</option>
                     </select><br/><br/>    
                </div>
                <div>
                    <label for="matkul">Nama Mata Kuliah</label> 
                    <input name="kur_matkul" type="text" placeholder="contoh : Bahasa Inggris 2" class="kurikulum" id="kur_matkul" required/>
                </div>
                <div>    
                  	<label for="semester">Semester</label>
                    <select name="kur_semester" class="inputtinyint" >
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           <option value="7">7</option>
                           <option value="8">8</option>
                     </select><br/><br/>                   
				</div>
                <div>    
                    <label for="sks">SKS</label>
                    <input type="radio" name="kur_sks" value="1" checked/>1
                    <input type="radio" name="kur_sks" value="2"/>2
                    <input type="radio" name="kur_sks" value="3"/>3
                    <input type="radio" name="kur_sks" value="4"/>4
                    <br/><br/>                  
                </div>
                <div>    
                    <label for="prodi">Prodi</label> 
                    <select name="kur_prodi" class="kurikulum" >
                           <option value="Program Pariwisata">Program Pariwisata</option>
                           <option value="Sastra Indonesia">Program Sastra Indonesia</option>
                           <option value="Sastra Inggris">Program Sastra Inggris</option>
                           <option value="Sastra Perancis">Program Sastra Perancis</option>
                           <option value="Sastra Jerman">Program Sastra Jerman</option>
                           <option value="Sastra Rusia">Program Sastra Rusia</option>
                     </select><br/><br/>                    
                </div>
                
                <label for="message">Keterangan</label> 
                    <select name="kur_keterangan" class="kurikulum" >
                           <option value="Mata kuliah wajib">Mata kuliah wajib</option>
                           <option value="Mata kuliah pilihan">Mata kuliah pilihan</option>
                     </select><br/><br/>         
                    <br>                
                <div class="clear"></div>
                 	<input type="submit" name="submit" value="Tambah" class="submit_btn" onclick="return confirm('Data sudah benar ?')"/>
                 
                </form>
            </div>    
        </div> 
                
		<div class="col_3 right">
			<div class="sidebar_section sidebar_section_bg">
                <?php include '../admin/xmenu/side_admin.php';?>
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