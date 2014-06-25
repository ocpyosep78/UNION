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
            <div class="post-item2">
                    <?php
                          if (!empty($_GET['hapus']) && $_GET['hapus'] == 'success') {
                          echo '<center>';
                          echo '<img src="../images/ok.png">&nbsp;&nbsp;<font color="green" size="2">Berhasil menghapus data !</font>';
                          echo '</center>';
                         }
                    ?>
                    <br/><br/>
                    <?php
                          if (!empty($_GET['edit']) && $_GET['edit'] == 'success') {
                          echo '<center>';
                          echo '<img src="../images/ok.png">&nbsp;&nbsp;<font color="green" size="2">Berhasil mengedit data !</font>';
                          echo '</center>';
                         }
                    ?>
                    <br/><br/>
                     <?php
                          if (!empty($_GET['message']) && $_GET['message'] == 'success') {
                          echo '<center>';
                          echo '<img src="../images/ok.png">&nbsp;&nbsp;<font color="green" size="2">Data berhasil ditambahkan !</font>';
                          echo '</center>';
                         }
                    ?>
                    <br/><br/> 
                    <?php
                      if (!empty($_GET['failed']) && $_GET['failed'] == 'TRUE') {
                      echo '<center>';
                      echo '<img src="../admin/images/hapus.png">&nbsp;&nbsp;<font color="red" size="2">Gagal melakukan operasi ! ID terdeteksi GANDA !</font>';
                      echo '</center>';
                     }
                     ?>
                     <br/><br/>
                <h2>List galeri : </h2>
                
                    <?php
                        include "../admin/xkoneksi/koneksi.php";
                    ?>
                    <?php
                     $sql = "SELECT * FROM tb_galeri ORDER BY gal_id";
                      foreach ($dbh->query($sql) as $data) :
                    ?>
                    <h3><?php echo "$data[gal_judul]";?></h3>                    
                    <p align="left"> ID : <?php echo "$data[gal_id]";?></p>
                    <p>Kategori : <?php echo "$data[gal_tipe]";?></p>
                    <p>Tanggal Foto : <font color="green"><?php echo "$data[gal_tanggal]";?></font></p>
                    <p><?php echo "<img src='../images/galeri/$data[gal_foto]' height='230px' width='465px'>";?></p>         
                    <p align="justify"><?php echo "$data[gal_caption]";?></p>
                    <hr>
                    <a href="../admin/edit_gal.php?id=<?php echo $data['gal_id'];?>">
                        <img src="../admin/images/edit.png"></a>
                        <a href="../admin/del_gal.php?id=<?php echo $data['gal_id'];?>" onclick="return confirm('Anda yakin akan menghapus berita?')">
                        <img src="../admin/images/hapus.png"></a>
                        <hr>
                     <?php
                      endforeach;
                     ?>
            </div>           
            
            <a href="../admin/add_galery.php" class="more">Tambah Foto</a>
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