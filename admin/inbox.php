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

                  <?php
                      if (!empty($_GET['hapus']) && $_GET['hapus'] == 'success') {
                      echo '<center>';
                      echo '<img src="../images/ok.png">&nbsp;&nbsp;<font color="green" size="2">Berhasil menghapus 1 pesan !</font>';
                      echo '</center>';
                     }
                    ?>
                     <br/><br/> 
                  <?php
                      if (!empty($_GET['clear']) && $_GET['clear'] == 'success') {
                      echo '<center>';
                      echo '<img src="../images/ok.png">&nbsp;&nbsp;<font color="green" size="2">Berhasil mengosongkan kotak pesan !</font>';
                      echo '</center>';
                     }
                    ?>
                     <br/><br/>

            <div class="post-item">
                <div class="post-meta">
                    <h3>Panel Inbox</h3>                    
                    <div class="clear"></div>
                </div>
                <p align="justify">Pesan masuk : </p>
                
                <?php
                    include "../admin/xkoneksi/koneksi.php";
                ?>

    <center>
        <table id="box-table-a">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Pengirim</th>
                    <th scope="col">Subjek</th>
                    <th scope="col">Email</th>
                    <th scope="col">Isi</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_bukutamu ORDER BY tamu_id";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[tamu_id]";?></td>
                <td><?php echo "$data[tamu_nama]";?></td>
                <td><?php echo "$data[tamu_subjek]";?></td>
                <td><?php echo "$data[tamu_email]";?></td>
                <td><?php echo "$data[tamu_isi]";?></td>
                <td><a href="../admin/del_pesan.php?id=<?php echo $data['tamu_id'] ?>" onclick="return confirm('Anda yakin akan menghapus data?')">
                    <img src="../admin/images/hapus.png"</a>
                </td>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>

            </div>           
            
        <a href="../admin/clear_pesan.php" class="more" onclick="return confirm('Anda yakin akan mengosongkan pesan masuk ?')">Kosongkan</a>
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