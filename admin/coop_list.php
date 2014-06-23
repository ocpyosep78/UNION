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
                
                <div class="post-meta">                   
                    <h3>Panel Kerjasama</h3>                    
                    <div class="clear"></div>
                </div>
                <p align="justify">List kerjasama : </p>
                
                <?php
                    include "../admin/xkoneksi/koneksi.php";
                ?>

    <center>
        <table id="box-table-a">
            <thead>
                <tr>
                    <th scope="col">Logo Perusahaan</th>
                    <th scope="col">ID Perusahaan</th>
                    <th scope="col">Nama Perusahaan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Detail Kerjasama</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_kerjasama ORDER BY kj_id";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "<img src='../prodi/images/kerjasama/$data[kj_foto]' width='200' height='200'>";?></td>
                <td><?php echo "$data[kj_id]";?></td>
                <td><?php echo "$data[kj_nama]";?></td>
                <td><?php echo "$data[kj_alamat]";?></td>
                <td><?php echo "$data[kj_detail]";?></td>
                <td><a href="../berita/edit_kj.php?id=<?php echo "$data[kj_id]";?>"><img src="../admin/images/edit.png"</a></td>
                <td><a href="../prodi/delete_kj.php?id=<?php echo $data['kj_id'] ?>" onclick="return confirm('Anda yakin akan menghapus data?')">
                    <img src="../admin/images/hapus.png"</a>
                </td>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>

            </div>           
            
        <a href="../berita/create_kj.php" class="more">Tambah Data</a>
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