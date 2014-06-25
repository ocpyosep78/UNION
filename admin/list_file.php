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
                      if (!empty($_GET['upload']) && $_GET['upload'] == 'success') {
                      echo '<center>';
                      echo '<img src="../images/ok.png">&nbsp;&nbsp;<font color="green" size="2">Berhasil menambah data !</font>';
                      echo '</center>';
                     }
                     ?>
                     <br/><br/>
                    <?php
                      if (!empty($_GET['delete']) && $_GET['delete'] == 'success') {
                      echo '<center>';
                      echo '<img src="../images/ok.png">&nbsp;&nbsp;<font color="green" size="2">Berhasil menghapus File !</font>';
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
                    <h3>Panel File</h3>                    
                    <div class="clear"></div>
                </div>
                <p align="justify">List file pendukung perkuliahan : </p>
                
                <?php
                    include "../admin/xkoneksi/koneksi.php";
                ?>

    <center>
        <h5>FILE KERJA PRAKTEK</h5>
        <table id="box-table-c">
            <thead>
                <tr>
                    <th scope="col">File ID</th>
                    <th scope="col">Nama File</th>
                    <th scope="col">Tipe File</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">File</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_file WHERE file_tipe = 'Kerja Praktek' ";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[file_id]";?></td>
                <td><?php echo "$data[file_nama]";?></td>
                <td><?php echo "$data[file_tipe]";?></td>
                <td><?php echo "$data[file_keterangan]";?></td>
                <td><a href="../admin/download.php?filename=<?php echo "$data[file_file]";?>"><?php echo "$data[file_file]";?></a></td>
                <td><a href="../admin/del_file.php?id=<?php echo "$data[file_id]";?>" onclick="return confirm('Anda yakin akan menghapus data?')">
                    <img src="../admin/images/hapus.png"</a>
                </td>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table><hr>

        <h5>FILE SKRIPSI</h5>
        <table id="box-table-c">
            <thead>
                <tr>
                    <th scope="col">File ID</th>
                    <th scope="col">Nama File</th>
                    <th scope="col">Tipe File</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">File</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_file WHERE file_tipe = 'Skripsi' ";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[file_id]";?></td>
                <td><?php echo "$data[file_nama]";?></td>
                <td><?php echo "$data[file_tipe]";?></td>
                <td><?php echo "$data[file_keterangan]";?></td>
                <td><a href="../admin/download.php?filename=<?php echo "$data[file_file]";?>"><?php echo "$data[file_file]";?></a></td>
                <td><a href="../admin/del_file.php?id=<?php echo "$data[file_id]";?>" onclick="return confirm('Anda yakin akan menghapus data?')">
                    <img src="../admin/images/hapus.png"</a>
                </td>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table><hr>

        <h5>FILE JADWAL KULIAH</h5>
        <table id="box-table-c">
            <thead>
                <tr>
                    <th scope="col">File ID</th>
                    <th scope="col">Nama File</th>
                    <th scope="col">Tipe File</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">File</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_file WHERE file_tipe = 'Jadwal Kuliah' ";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[file_id]";?></td>
                <td><?php echo "$data[file_nama]";?></td>
                <td><?php echo "$data[file_tipe]";?></td>
                <td><?php echo "$data[file_keterangan]";?></td>
                <td><a href="../admin/download.php?filename=<?php echo "$data[file_file]";?>"><?php echo "$data[file_file]";?></a></td>
                <td><a href="../admin/del_file.php?id=<?php echo "$data[file_id]";?>" onclick="return confirm('Anda yakin akan menghapus data?')">
                    <img src="../admin/images/hapus.png"</a>
                </td>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table><hr>

         <h5>FILE Beasiswa</h5>
        <table id="box-table-c">
            <thead>
                <tr>
                    <th scope="col">File ID</th>
                    <th scope="col">Nama File</th>
                    <th scope="col">Tipe File</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">File</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_file WHERE file_tipe = 'Beasiswa' ";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[file_id]";?></td>
                <td><?php echo "$data[file_nama]";?></td>
                <td><?php echo "$data[file_tipe]";?></td>
                <td><?php echo "$data[file_keterangan]";?></td>
                <td><a href="../admin/download.php?filename=<?php echo "$data[file_file]";?>"><?php echo "$data[file_file]";?></a></td>
                <td><a href="../admin/del_file.php?id=<?php echo "$data[file_id]";?>" onclick="return confirm('Anda yakin akan menghapus data?')">
                    <img src="../admin/images/hapus.png"</a>
                </td>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table><hr>

         <h5>FILE PENGUMUMAN</h5>
        <table id="box-table-c">
            <thead>
                <tr>
                    <th scope="col">File ID</th>
                    <th scope="col">Nama File</th>
                    <th scope="col">Tipe File</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">File</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_file WHERE file_tipe = 'Pengumuman' ";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[file_id]";?></td>
                <td><?php echo "$data[file_nama]";?></td>
                <td><?php echo "$data[file_tipe]";?></td>
                <td><?php echo "$data[file_keterangan]";?></td>
                <td><a href="../admin/download.php?filename=<?php echo "$data[file_file]";?>"><?php echo "$data[file_file]";?></a></td>
                <td><a href="../admin/del_file.php?id=<?php echo "$data[file_id]";?>" onclick="return confirm('Anda yakin akan menghapus data?')">
                    <img src="../admin/images/hapus.png"</a>
                </td>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table><hr>

            </div>           
            
        <a href="../admin/add_file.php" class="more">Tambah Data</a>
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