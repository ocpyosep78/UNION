<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Selamat datang di Universitas Ontario</title>

<?php include 'xincludes/stylesheet.php'; ?>
<?php include 'xincludes/script_dds.php'; ?>

</head>
<body id="home">

<div id="tubes_wrapper">

	
    <?php include 'xmenu/menu_index.php'; ?>
    <?php include 'xincludes/slider.php'; ?> 
    
    <div id="tubes_main">
    
    	<div id="tubes_content" class="left">
        
            <h2 align="center">UNIVERSITAS ONTARIO</h2>
            
            <div class="col col_2">
                <img src="images/album.png" alt="image 1" class="img_fl" />
              	<div class="col_w216 right">
                <h5>Berdiri sejak 1980</h5>
                <p align="justify">Mendedidakasikan diri terhadap bangsa sejak tahun 1980 untuk meningkatkan produktivitas dan kualitas pendidikan.
                   Salah satu Universitas tertua yang ada di Indonesia dan menjadi salah satu acuan bagi standarisasi pendidikan khususnya dalam bidang
                   sastra dan pariwisata.</p>
                </div>
            </div>
            
            <div class="col col_2 no_mr">
                <img src="images/chart-pie.png" alt="image 2" class="img_fl" />
              	<div class="col_w216 right">
                <h5>Pengalaman terbaik</h5>
                <p align="justify">Satu - satunya Universitas yang bergerak dalam bidang sastra dan pariwisata yang diakui di Asia Tenggara. Dan menjadi Nomor 1 dalam bidangnya.
                   Turut serta mencerdaskan bangsa dan ikut berpartisipasi dalam penyelenggaraan pendidikan yang berkompeten.</p>
                </div>
            </div>
            
            <div class="clear"></div>
            
            <div class="col col_2">
                <img src="images/podcast.png" alt="image 3" class="img_fl" />
              	<div class="col_w216 right">
                	<h5>Pusat Riset</h5>
                      <p align="justify">Universitas yang menjadi pusat riset tata bahasa di Indonesia serta negara - negara di Asia Tenggara. Menyumbangkan lebih dari 
                      100.000 tulisan berkualitas setiap tahunnya yang dihasilkan dari kalangan Mahasiswa, Dosen, hingga Sastrawan terkemuka.</p>
                </div>
            </div>
            
            <div class="col col_2 no_mr">
                <img src="images/print.png" alt="image 4" class="img_fl" />
              	<div class="col_w216 right">
                    <h5>Lulusan Berkualitas</h5>
                    <p align="justify">Universitas yang menghasilkan lulusan berkualitas, berkompeten, bertanggung jawab, berbudi pekerti luhur, bermoral tinggi,
                         serta siap dalam dunia kerja yang penuh dengan kompetisi. Dibekali pengalaman serta skill yang memadai dalam bidangnya.</p>
                 </div> 
             </div> 
            <div class="clear"></div>
            <hr />
            
            <div class="post-item last_post">
            	<h2>Berita kampus</h2>
                    <hr>
                    <?php
                    include "admin/xkoneksi/koneksi.php";
                    ?>    
                     <?php
                     $sql = "SELECT * FROM tb_berita LIMIT 1";
                      foreach ($dbh->query($sql) as $data) :
                     ?>
                <h3><?php echo "$data[brt_judul]";?></h3>
                <p>Kategori : <font color="green"><?php echo "$data[brt_kategori]";?></font></p>
                <p><?php echo "<img src='berita/images/news/$data[brt_gambar]' width='420' height='220'>";?></p>         
                <p align="justify"><?php echo "$data[brt_isi]";?></p><br/><br/>
                 <?php
                  endforeach;
                 ?>

                <a href="berita.php" class="more">Lainnya</a>
                </div>
            </div>
		
        </div>
                
		<div id="tubes_sidebar" class="right">
			
			<div class="sidebar_section">
                <h2>Program studi</h2>
                <img src="images/prodi/page.jpg" alt="prodi" class="img_nom img_border" />
                <p><em>Universitas Ontario memiliki beberapa program studi diantaranya : </em></p>
                <ul class="list_bullet">
                    <li><a href="#">Pariwisata</a></li>
                    <li><a href="#">Sastra Indonesia</a></li>
                    <li><a href="#">Sastra Inggris</a></li>
                    <li><a href="#">Sastra Perancis</a></li>
                    <li><a href="#">Sastra Jerman</a></li>
                    <li><a href="#">Sastra Rusia</a></li>
                </ul>
                <a href="prodi/prodi.php" class="more">Selanjutnya</a>
			</div>
            <div class="testimonial">
            	<p class="testimonial_text" align="center">Universitas No.1 dibidang pariwisata di Asia Tenggara dengan kompetensi yang luar biasa hebat serta
                                            Universitas terbaik yang bergerak di bidang sastra di Nusantara.</p>
                <p><strong>Wijayanto S</strong> - <i>Rektor UNION</i></p>
            </div>
            <div class="sidebar_section">
            	<h2>Tentang UNION</h2>
                <p align="justify">Universitas Ontario - Universitas Pariwisata Nomor 1 se-Asia Tenggara
                                   dengan visi dan misi yang menjunjung tinggi kecerdasan bangsa. </p>
                <a href="profil.php" class="more">Selanjutnya</a>
            </div>
      </div>
        
        <div class="clear"></div>


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