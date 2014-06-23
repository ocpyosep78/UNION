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
<?php include '../berita/xlinker/listing.php'; ?>

</head>
<body id="subpage">

<div id="tubes_wrapper">
    
    <?php include 'xmenu/menu_berita.php'; ?>
    
    <div id="tubes_page_intro">
        <h1>List Kurikulum</h1>
        <p align="justify">Selamat datang admin !</p>
    </div>
    
    
    <div id="tubes_main">
        <div id="tubes_content" class="left">

            <div class="post-item">
                
                    <?php
                      if (!empty($_GET['hapus']) && $_GET['hapus'] == 'success') {
                      echo '<center>';
                      echo '<img src="../images/ok.png">&nbsp;&nbsp;<font color="green" size="2">Berhasil menghapus berita !</font>';
                      echo '</center>';
                     }
                     ?>
                     <br/><br/>
                     <?php
                      if (!empty($_GET['add']) && $_GET['add'] == 'gagal') {
                      echo '<center>';
                      echo '<img src="../admin/images/hapus.png">&nbsp;&nbsp;<font color="red" size="2">Gagal melakukan operasi !</font>';
                      echo '</center>';
                     }
                     ?>
                     <br/><br/>
                     <?php
                      if (!empty($_GET['edit']) && $_GET['edit'] == 'success') {
                      echo '<center>';
                      echo '<img src="../images/ok.png">&nbsp;&nbsp;<font color="green" size="2">Berhasil mengubah berita !</font>';
                      echo '</center>';
                     }
                     ?>
                     <br/><br/>
                
               <h2>Berita kampus</h2>
                    <hr>
                    <?php
                    include "../admin/xkoneksi/koneksi.php";
                    ?>    
                     <?php
                     $sql = "SELECT * FROM tb_berita";
                      foreach ($dbh->query($sql) as $data) :
                     ?>
                <h3><?php echo "$data[brt_judul]";?></h3>
                <p>Kategori : <font color="green"><?php echo "$data[brt_kategori]";?></font></p>
                <p><?php echo "<img src='../berita/images/news/$data[brt_gambar]' width='420' height='220'>";?></p>         
                <p align="justify"><?php echo "$data[brt_isi]";?></p>
                <hr>
                <a href="../berita/edit_news.php?id=<?php echo $data['brt_id'];?>">
                    <img src="../admin/images/edit.png"></a>
                    <a href="../berita/del_news.php?id=<?php echo $data['brt_id'];?>" onclick="return confirm('Anda yakin akan menghapus berita?')">
                    <img src="../admin/images/hapus.png"></a>
                    <hr>
                <br/><br/>
                 <?php
                  endforeach;
                 ?>

            </div>         
        <div class="clear"></div>        
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