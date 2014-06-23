<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Selamat datang di Universitas Ontario</title>

<?php include '../berita/xincludes/stylesheet.php'; ?>
<?php include '../berita/xincludes/script_dds.php'; ?>
<?php include '../berita/xlinker/listing.php'; ?>
<?php include '../berita/xincludes/tinymce.php'; ?>
<?php
          include '../admin/xkoneksi/koneksi.php';
          if (isset($_GET['id'])) {
          $query = $dbh->query("SELECT * FROM tb_kurikulum WHERE kur_id = '$_GET[id]'");
          $data  = $query->fetch(PDO::FETCH_ASSOC);
      } else {
          echo "ID tidak tersedia!
      <a href='admin_pasien.php'>Kembali</a>";
          exit();
      }
       
      if ($data === false) {
          echo "Data tidak ditemukan!
      <a href='admin_pasien.php'>Kembali</a>";
          exit();
      }
?>

</head>
<body id="subpage">

<div id="tubes_wrapper">

    
    <?php include 'xmenu/menu_admin.php'; ?>
    
    <div id="tubes_page_intro">
    	<h1>Konten Kurikulum</h1>
        <p align="justify">Edit konten kurikulum</p>
    </div>
    
    <div id="tubes_main">
    	<div class="col_32 left">
            <div id="contact_form">

                <h2>Edit Kurikulum</h2>
                <form method="post" name="contact" action="../prodi/cur_actedit.php" enctype="multipart/form-data">
                <div>                                    
                    <label for="kurikulum_id">Kurikulum ID </label> 
                    <input name="id" type="text" class="bacasaja" id="id" maxlength="6" value="<?php echo $data["kur_id"];?>" readonly/>
                    <font color="red"><i>ID tidak boleh di ubah</i></font>
                    <hr>
                </div>
                <div>                
                     Kurikulum Versi Tahun Lama :                     
                    <input type="text" class="bacasaja" id="kur_id" maxlength="6" value="<?php echo $data["kur_tahun"];?>" readonly/><br/>
                     Kurikulum Versi Tahun Baru : 
                    <select name="kur_tahun" class="inputtinyint" >
                           <option value="2007">2007</option>
                           <option value="2010">2010</option>
                           <option value="2013">2013</option>
                     </select><br/><br/>    
                    <hr>
                </div>
                <div>
                    Nama matakuliah versi Lama:
                    <input type="text" class="bacasaja2" value="<?php echo $data["kur_matkul"];?>" readonly/><br>
                    Nama matakuliah versi Baru:
                    <input name="kur_matkul" type="text" class="kurikulum" id="kur_matkul" required/>
                    <hr>
                </div>
                <div>    

                    Semester Versi Lama :
                    <input type="text" class="bacasaja" id="kur_id" maxlength="6" value="<?php echo $data["kur_semester"];?>" readonly/><br>
                  	Semester Versi Baru :
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
                    <hr>                
			       	</div>
                <div>                    

                    SKS Versi Lama :
                    <input type="text" class="bacasaja" id="kur_id" maxlength="6" value="<?php echo $data["kur_sks"];?>" readonly/><br/>
                    SKS Versi Baru :
                    <input type="radio" name="kur_sks" value="1" checked/>1
                    <input type="radio" name="kur_sks" value="2"/>2
                    <input type="radio" name="kur_sks" value="3"/>3
                    <input type="radio" name="kur_sks" value="4"/>4
                    <br/><br/>        
                    <hr>         
                </div>
                <div>                    

                    Program Studi versi Lama :                     
                    <input type="text" class="bacasaja2" value="<?php echo $data["kur_prodi"];?>" readonly/><br/>
                    Program Studi versi Baru :  
                    <select name="kur_prodi" class="kurikulum" >
                           <option value="Program Pariwisata">Program Pariwisata</option>
                           <option value="Sastra Indonesia">Program Sastra Indonesia</option>
                           <option value="Sastra Inggris">Program Sastra Inggris</option>
                           <option value="Sastra Perancis">Program Sastra Perancis</option>
                           <option value="Sastra Jerman">Program Sastra Jerman</option>
                           <option value="Sastra Rusia">Program Sastra Rusia</option>
                     </select><br/><br/>  
                    <hr>                  
                </div>
                
                    Keterangan versi Lama :                     
                    <input type="text" class="bacasaja2" value="<?php echo $data["kur_keterangan"];?>" readonly/><br/>
                    Keterangan versi baru :
                    <select name="kur_keterangan" class="kurikulum" >
                           <option value="Mata kuliah wajib">Mata kuliah wajib</option>
                           <option value="Mata kuliah pilihan">Mata kuliah pilihan</option>
                     </select><br/><br/>         
                    <br>                
                <div class="clear"></div>
                 	<input type="submit" name="submit" value="Edit" class="submit_btn" />
                 
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