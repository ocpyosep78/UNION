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

    <?php include 'xmenu/menu_index.php'; ?>
    
    <div id="tubes_page_intro">
    	<h1>Staff Universitas Ontario</h1>
        <p align="justify">Staff dan Karyawan Universitas Ontario</p>
    </div>
    
    
    <div id="tubes_main">
    	<div id="tubes_content" class="left">
           <div class="post-item">
                
                <?php
                    include "admin/xkoneksi/koneksi.php";
                ?>

    <center>
        <table id="box-table-a">
            <thead>
                <tr>
                    <th scope="col">Profil</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Pendidikan</th>
                    <th scope="col">Kontak</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_staff ORDER BY staff_nama";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "<img src='admin/images/staff/$data[staff_foto]' width='80' height='80'>";?></td>
                <td><?php echo "$data[staff_nama]";?></td>
                <td><?php echo "$data[staff_jabatan]";?></td>
                <td><?php echo "$data[staff_alamat]";?></td>
                <td><?php echo "$data[staff_pendidikan]";?></td>
                <td><?php echo "$data[staff_kontak]";?></td>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>

            </div>     
            </div>         
                
		<div id="tubes_sidebar" class="right">
			
			<div class="sidebar_section">
                <h2>Alamat Kampus</h2>
                <img src="images/prodi/page.jpg" alt="image" class="img_nom img_border" />
                <p align="justify">Kampus Universitas Ontario berlokasi di : </p>
                <p align="justify">Jln. Ubud Selatan No.112 - 119
                                   Denpasar, Bali. 40876. Indonesia.</p>
                <p align="justify">Kontak :</p>
                <ul class="list_bullet">
                    <li>0361-76522211</li>
                    <li>Fax : 0361-754 (ext) 2</li>
                    <li>Email : union@union.ac.id</li>
                </ul>
                <a href="kontak.php" class="more">Selanjutnya</a>
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