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
<?php include 'xincludes/script_dds.php'; ?>
<?php include 'xlinker/listing.php'; ?>


</head>
<body id="subpage">

<div id="tubes_wrapper">
    
    <?php include 'xmenu/menu_admin.php'; ?>
    
    <div id="tubes_page_intro">
        <h1>Panel Admin</h1>
        <p align="justify">Selamat datang admin !</p>
    </div>
    
    
    <div id="tubes_main">
        <div id="tubes_content" class="left">
            <div class="post-item">              
                <div class="col_32 left">
                    <div id="contact_form">
                        <form enctype="multipart/form-data" method="post" action="../admin/file_proc.php">

                        <h5>Tambah File Pendukung Perkuliahan</h5>
                        <br/><br/>
                        <div class="col_3 left">
                            <input type="text" class="kategori" name="file_id" maxlength="6" placeholder="Contoh : FLE001" required />
                            
                            <label>Tipe File : </label>
                            <select name="file_tipe" class="kategori">
                              <option value="Kerja Praktek">Kerja Praktek</option>
                              <option value="Jadwal Kuliah">Jadwal Kuliah</option>
                              <option value="Beasiswa">Beasiswa</option>
                              <option value="Skripsi">Skripsi</option>
                              <option value="Pengumuman">Pengumuman</option>
                            </select>

                            <label>Nama File : </label>
                            <input type="text" class="input_field" name="file_nama" maxlength="25" required/>

                            <label>Keterangan file : </label>
                            <textarea class="input_field" name="file_keterangan" maxlength="50" required/></textarea>

                            <label>Berkas : </label>
                            <input type="file" class="kategori" name="file_file">

                            <input type="submit" value="Tambah" name="submit" class="submit_btn" onclick="return confirm('Apakah data sudah benar ?')">
                        </form>
                        </div>
                            
                    </div>
                </div>

            </div>
        <div class="clear"></div>        
        </div>
                
        <div id="tubes_sidebar" class="right">
            
            <div class="sidebar_section sidebar_section_bg">
                <?php include 'xmenu/side_admin.php';?>
            </div>
      </div>
        
        <div class="clear"></div>
                
    </div>
</div>

<div id="tubes_bottom_wrapper">
    <div id="tubes_bottom">     
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

<?php 
    }
    else
    {
        header('Location: ../admin/login.php');
    }
?>