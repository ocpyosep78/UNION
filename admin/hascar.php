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

                    <?php
                      if (!empty($_GET['edit']) && $_GET['edit'] == 'success') {
                      echo '<center>';
                      echo '<img src="../images/ok.png">&nbsp;&nbsp;<font color="green" size="2">Berhasil mengubah staff !</font>';
                      echo '</center>';
                     }
                     ?>
                     <br/><br/>
                    <?php
                      if (!empty($_GET['delete']) && $_GET['delete'] == 'success') {
                      echo '<center>';
                      echo '<img src="../images/ok.png">&nbsp;&nbsp;<font color="green" size="2">Berhasil menghapus staff !</font>';
                      echo '</center>';
                     }
                     ?>
                     <?php
                      if (!empty($_GET['failed']) && $_GET['failed'] == 'TRUE') {
                      echo '<center>';
                      echo '<img src="../admin/images/hapus.png">&nbsp;&nbsp;<font color="red" size="2">Gagal melakukan operasi ! ID terdeteksi GANDA !</font>';
                      echo '</center>';
                     }
                     ?>
                     <br/><br/>
                <div class="post-meta">
                    <h3>Panel Staff</h3>                    
                    <div class="clear"></div>
                </div>
                <p align="justify">List karyawan dan staff : </p>
                
                <?php include '../admin/look.php';?>

            </div>           
            
        <a href="../admin/create_sk.php" class="more">Tambah Data</a>
        <div class="clear"></div>        
        </div>
                
        <div id="tubes_sidebar" class="right">
            

            <div class="sidebar_section sidebar_section_bg">
                <form action="../admin/hascar.php" method="post">  
                <h4>Cari Data Staff</h4>
                    <input size="30" placeholder="Cari nama staff" type="search" name="cari" id="cari" required>&nbsp;
                    <input type="image" name"submit" value="submit" src="../images/cari.png">
                </form>
            </div>

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