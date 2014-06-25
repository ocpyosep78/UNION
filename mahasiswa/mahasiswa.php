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

    
    <?php include 'xmenu/menu_mhs.php'; ?>
    
    <div id="tubes_page_intro">
    	<h1>Mahasiswa</h1>
        <p align="justify">Halaman untuk mahasiswa</p>
    </div>
    
    <div id="tubes_main">
    	<div id="tubes_content" class="left">
            <h2>Selamat datang di halaman untuk mahasiswa</h2>
            <hr>
            <img class="img_border_b img_nom" src="../mahasiswa/images/kampus/mahasiswa.jpg" alt="Post Image" />
                <p align="justify">Halaman mahasiswa ini berfungsi untuk memberikan informasi mengenai kurikulum baru,
                    informasi jadwal kuliah dan informasi kerja praktek, skripsi dan informasi lainnya. Login untuk mengakses halaman
                    indeks mahasiswa.</p><br/>
            <hr>
            <h2>Pengumuman untuk mahasiswa</h2>
            <hr>
                    <?php
                    include "../admin/xkoneksi/koneksi.php";
                    ?>    
                     <?php
                     $sql = "SELECT * FROM tb_berita WHERE brt_kategori='Pengumuman' LIMIT 2";
                      foreach ($dbh->query($sql) as $data) :
                     ?>
                <h3><?php echo "$data[brt_judul]";?></h3>
                <p>Kategori : <font color="green"><?php echo "$data[brt_kategori]";?></font></p>
                <p><?php echo "<img src='../berita/images/news/$data[brt_gambar]' width='420' height='220'>";?></p>         
                <p align="justify"><?php echo "$data[brt_isi]";?></p>
                <hr>
                 <?php
                  endforeach;
                 ?>


        </div> 
                
		<div class="col_3 right">
			<h2>Panel Mahasiswa</h2>
			<div class="sidebar_section"> 
                <?php
                      if (!empty($_GET['logout']) && $_GET['logout'] == 'true') {
                      echo '<img src="../images/ok.png">&nbsp;&nbsp;<font color="green" size="2">Anda berhasil logout</font>';
                     }
                ?>
                     <br/><br/>
                <h3>LOGIN</h3>
                <form method="post" action="../mahasiswa/cek_login.php" name="login">
                <label for="username">Username</label><br/> 
                <input name="username" type="text" size="30px" id="username" maxlength="30" /><br/>
                
                <label for="password">Password</label><br/> 
                <input name="password" type="password" size="30px" id="password" maxlength="30" />

                <br/><br/>
                <input type="submit" name="submit" value="LOGIN" class="submit_btn" />

                <?php
                      if (!empty($_GET['attemp']) && $_GET['attemp'] == 'false') {
                      echo '<img src="../admin/images/delete.png">&nbsp;&nbsp;<font color="green" size="1">USERNAME/PASSWORD SALAH</font>';
                     }
                ?>
                     <br/><br/>
            </div>
            <div class="sidebar_section">
                <h3>Untuk bantuan hubungi :</h3>
                Gedung IT - <br/>
                Jln. Ubud Selatan No.113<br />
                Denpasar, Bali. 40876. <br />
                Indonesia.<br /><br />
                
                Tel: 0361-76522213<br />
                Fax: Fax : 0361-755 (ext) 3<br />
                Email : rektorat@union.ac.id<br />
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
	<?php include 'xlinker/footlink.php'; ?>
</div>

</body>
</html>