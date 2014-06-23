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
    	<h1>Berita dan Informasi seputar Universitas Ontario</h1>
        <p align="justify">Menampilkan seluruh berita</p>
    </div>
    
    
    <div id="tubes_main">
    	<div id="tubes_content" class="left">
            <h2>List Berita</h2>

                <hr>
                <?php
                include "admin/xkoneksi/koneksi.php";
                ?>    
                <?php
                $sql = "SELECT * FROM tb_berita ORDER BY brt_id";
                foreach ($dbh->query($sql) as $data) :
                ?>
                <h3><?php echo "$data[brt_judul]";?></h3>
                <p>Kategori : <font color="green"><?php echo "$data[brt_kategori]";?></font></p>
                <p><?php echo "<img src='berita/images/news/$data[brt_gambar]' width='420' height='220'>";?></p>         
                <p align="justify"><?php echo "$data[brt_isi]";?></p>
                    <hr>
                 <?php
                  endforeach;
                 ?>
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

            <div class="sidebar_section sidebar_section_bg">
                <h3>Kategori</h3>
                <ul class="sidebar_link_list">
                    <li><a href="berita/pengumuman.php">Pengumuman</a></li>
                    <li><a href="berita/seputarkampus.php">Seputar Kampus</a></li>
                    <li><a href="berita/informasi.php">Informasi</a></li>
                </ul>
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