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

</head>
<body id="subpage">

<div id="tubes_wrapper">

    <?php include '../mahasiswa/xmenu/menu_maha.php'; ?>
    
    <div id="tubes_page_intro">
    	<h1>Halaman Indeks Mahasiswa</h1>
    </div>
    
    
    <div id="tubes_main">
    	<div id="tubes_content" class="left"><div class="post-meta">
                    <h3>Panel File</h3>                    
                    <div class="clear"></div>
                </div>
                <p align="justify">Silahkan unduh berkas pendukung perkuliahan dsini. Berikut list file pendukung perkuliahan : </p><br/>
             <div class="post-item2">
                     <br/><br/>
                
                
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
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table><hr>

            </div>           
                   
        </div>
                
        </div>         
                
		<div id="tubes_sidebar" class="right">
			
			<div class="sidebar_section">
                <h2>Alamat Kampus</h2>
                <img src="../images/prodi/page.jpg" alt="image" class="img_nom img_border" />
                <p align="justify">Kampus Universitas Ontario berlokasi di : </p>
                <p align="justify">Jln. Ubud Selatan No.112 - 119
                                   Denpasar, Bali. 40876. Indonesia.</p>
                <p align="justify">Kontak :</p>
                <ul class="list_bullet">
                    <li>0361-76522211</li>
                    <li>Fax : 0361-754 (ext) 2</li>
                    <li>Email : union@union.ac.id</li>
                </ul>
                <a href="../kontak.php" class="more">Selanjutnya</a>
			</div>            
       </div>        
        <div class="clear"></div>
                
    </div>
</div>

<div id="tubes_bottom_wrapper">
	<div id="tubes_bottom">
    	
        <div class="col col_3">
            <?php include 'xlinker/kampus_foto.php'; ?>
        </div>
    	
        <div class="col col_3">
        	<?php include 'xlinker/bawah.php'; ?>
        </div>
        
        <div class="col col_3 no_mr">
        	<?php include 'xlinker/sosmed.php'; ?>
        </div>
        
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
        header('Location: ../mahasiswa/mahasiswa.php');
    }
?>