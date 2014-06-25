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
<?php
    require_once "../admin/xkoneksi/koneksi_mysql.php";
    $id = $_GET["id"];
    $sql = "SELECT * FROM tb_galeri where gal_id='$id'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    $count = mysql_num_rows($result);
?>

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
                        <form enctype="multipart/form-data" method="post" action="../admin/edit_gal_proc.php">

                        <h5>Edit konten galeri</h5>
                        <br/><br/>
                        <div class="col_3 left">
                            <input type="hidden" name="gal_id" value="<?php echo $row['gal_id'] ?>" required />
                            
                            <label>Judul : </label>
                            <select name="gal_tipe" class="kategori">
                              <option value="Kampus" <?php if($row["gal_tipe"] == "Kampus") echo "selected";?>>Tentang Kampus</option>
                              <option value="Kegiatan" <?php if($row["gal_tipe"] == "Kegiatan") echo "selected";?>>Kegiatan Mahasiswa</option>
                            </select>

                            <label>Judul : </label>
                            <input type="text" class="input_field" name="gal_judul" value="<?php echo $row['gal_judul'] ?>" maxlength="25" required/>
                        
                            <label>Tanggal Foto : </label>
                            <input type="date" class="input_field" name="gal_tanggal" value="<?php echo $row['gal_tanggal'] ?>" required/>

                            <label>Keterangan foto : </label>
                            <input type="text" class="input_field" name="gal_caption" value="<?php echo $row['gal_caption'] ?>" maxlength="50" required/>

                            <label>Foto : </label>
                            <img src="../images/galeri/<?php echo $row['gal_foto'] ?>" height="230px" width="465px" class="img_border_b img_nom">
                            <input type="file" class="input_field" name="gal_foto" required/>

                            <input type="submit" value="Edit" class="submit_btn" onclick="return confirm('Apakah data sudah benar ?')">
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