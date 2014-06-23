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
    $sql = "SELECT * FROM tb_kerjasama where kj_id='$id'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    $count = mysql_num_rows($result);
?>

</head>
<body id="subpage">

<div id="tubes_wrapper">
    
    <?php include 'xmenu/menu_berita.php'; ?>
    
    <div id="tubes_page_intro">
        <h1>Panel Admin</h1>
        <p align="justify">Selamat datang admin !</p>
    </div>
    
    
    <div id="tubes_main">
        <div class="col_32 left">
            <div id="contact_form">
                <div id="post-meta">
                    <h3>Panel kerjasama</h3>                    
                    <div class="clear"></div>
                </div>
                <p align="justify">Edit kerjasama : </p>
                
                <form enctype="multipart/form-data" method="post" action="../admin/proses_update_kj.php">

                        <h5>IDENTITAS STAFF/KARYAWAN</h5>
                        <br/><br/>
                        <div id="contact-form">
                            <input type="hidden" class="input_field" name="kj_id" required value="<?php echo $row['kj_id'] ?>"/>
                            
                            <label>Nama Perusahaan : </label>
                            <input type="text" class="input_field" name="kj_nama" maxlength="25" required value="<?php echo $row['kj_nama'] ?>"/>
                        
                            <label>Alamat : </label>
                            <input type="text" class="input_field" name="kj_alamat" value="<?php echo $row['kj_alamat'] ?>" required/> 

                            <label>Isi Konten kerjasama : </label>
                            <textarea name="kj_detail" ><?php echo $row['kj_detail'] ?></textarea><br/>

                            <label>Logo Perusahaan : </label>
                            <img src="../prodi/images/kerjasama/<?php echo $row['kj_foto'] ?>" width="100px" height="100px" class="img_border_b img_nom">    
                            <input type="file" class="input_field" name="kj_foto">

                            <input type="submit" value="Update" class="submit_btn" onclick="return confirm('Apakah data sudah benar ?')">
                        </form>
                    </div>
            </div>           
        <div class="clear"></div>        
        </div>
                
        <div id="tubes_sidebar" class="right">

            <div class="sidebar_section sidebar_section_bg">
                <?php include 'xmenu/side_berita.php';?>
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