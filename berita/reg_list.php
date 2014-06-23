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
    
    <?php include 'xmenu/menu_berita.php'; ?>
    
    <div id="tubes_page_intro">
        <h1>List Pendaftar</h1>
        <p align="justify">Selamat datang admin !</p>
    </div>
    
    
    <div id="tubes_main">
        <div id="tubes_content" class="left">
                    <?php
                      if (!empty($_GET['verifikasi']) && $_GET['verifikasi'] == 'success') {
                      echo '<center>';
                      echo '<img src="../images/ok.png">&nbsp;&nbsp;<font color="green" size="2">Berhasil melakukan verifikasi pendaftar !</font>';
                      echo '</center>';
                     }
                     ?>
                     <br/><br/>

            <div class="post-item">
                <div class="post-meta">                   
                    <div class="clear"></div>
                </div>
                <p align="justify">List pendaftar calon mahasiswa/i UNION : </p>
                
                <?php
                    include "../berita/xkoneksi/koneksi.php";
                ?>
    <center>
        <table id="box-table-a">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>No Registrasi</th>
                    <th>Nama</th>
                    <th>Tgl Lahir</th>
                    <th>Tempat Lahir</th>
                    <th>Gender</th>
                    <th>Agama</th>
                    <th>Tipe Sekolah</th>
                    <th>Jurusan</th>
                    <th>Tahun Lulus</th>
                    <th>Nama Sekolah</th>
                    <th>Nama Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Pekerjaan Ayah</th>
                    <th>Pekerjaan Ibu</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Kode Pos</th>
                    <th>Prodi Pilihan</th>
                    <th>Jenjang</th>
                    <th>Kontak</th>
                    <th>Verifikasi Data</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_daftar ORDER BY df_id";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "<img src='../berita/images/reg/$data[df_foto]' width='80' height='80'>";?></td>
                <td><?php echo "$data[df_id]";?></td>
                <td><?php echo "$data[df_nama]";?></td>
                <td><?php echo "$data[df_tgllahir]";?></td>
                <td><?php echo "$data[df_tptlahir]";?></td>
                <td><?php echo "$data[df_gender]";?></td>
                <td><?php echo "$data[df_agama]";?></td>
                <td><?php echo "$data[df_tipesekolah]";?></td>
                <td><?php echo "$data[df_jurusan]";?></td>
                <td><?php echo "$data[df_thnlulus]";?></td>
                <td><?php echo "$data[df_namasekolah]";?></td>
                <td><?php echo "$data[df_namaayah]";?></td>
                <td><?php echo "$data[df_namaibu]";?></td>
                <td><?php echo "$data[df_kerjaayah]";?></td>
                <td><?php echo "$data[df_kerjaibu]";?></td>
                <td><?php echo "$data[df_alamat]";?></td>
                <td><?php echo "$data[df_kota]";?></td>
                <td><?php echo "$data[df_kodepos]";?></td>
                <td><?php echo "$data[df_prodi]";?></td>
                <td><?php echo "$data[df_jenjang]";?></td>
                <td><?php echo "$data[df_kontak]";?></td>
                <td><a href="../berita/ver_daftar.php?id=<?php echo "$data[df_id]";?>" onclick="return confirm('Verifikasi calon mahasiswa dengan nomor <?php echo "$data[df_id]";?> ?')"><img src="../images/mail.png"</a></td>
                </td>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>
        
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