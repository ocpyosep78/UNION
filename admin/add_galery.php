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
                        <form enctype="multipart/form-data" method="post" action="../admin/gal_proc.php">

                        <h5>Tambah konten galeri</h5>
                        <br/><br/>
                        <div class="col_3 left">
                            <input type="text" class="input_field" name="gal_id" maxlength="6" placeholder="Contoh : GAL001" required />
                            
                            <label>Judul : </label>
                            <select name="gal_tipe" class="kategori">
                              <option value="Kampus">Tentang Kampus</option>
                              <option value="Kegiatan">Kegiatan Mahasiswa</option>
                            </select>

                            <label>Judul : </label>
                            <input type="text" class="input_field" name="gal_judul" maxlength="25" required/>
                        
                            <label>Tanggal Foto : </label>
                            <input type="date" class="input_field" name="gal_tanggal" required/>

                            <label>Keterangan foto : </label>
                            <input type="text" class="input_field" name="gal_caption" maxlength="50" required/>

                            <label>Foto : </label>
                            <input type="file" class="input_field" name="gal_foto">

                            <input type="submit" value="Tambah" class="submit_btn" onclick="return confirm('Apakah data sudah benar ?')">
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