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
    	<h1>Galeri</h1>
        <p>Berikut adalah galeri kampus dan aktivitas kami</p>
    </div>
    
    
    <div id="tubes_main">
                <?php
                    include "admin/xkoneksi/koneksi.php";
                ?>
                <?php
                     $sql = "SELECT * FROM tb_galeri WHERE gal_tipe='Kampus' ORDER BY gal_tanggal";
                      foreach ($dbh->query($sql) as $data) :
                 ?>
        <div class="col col_2">
            <h5 align="center"><?php echo "$data[gal_judul]";?></h5>            
            <p>Kategori : <?php echo "$data[gal_tipe]";?></p>
            <p align="left">Tanggal foto : <font color="green"><?php echo "$data[gal_tanggal]";?></font></p>
            <p><?php echo "<img src='images/galeri/$data[gal_foto]' height='230px' width='465px'>";?></p>  
            <p align="justify"><?php echo "$data[gal_caption]";?></p>
        </div>
                <?php
                  endforeach;
                 ?>
                  <?php
                     $sql = "SELECT * FROM tb_galeri WHERE gal_tipe='Kegiatan' ORDER BY gal_tanggal";
                    foreach ($dbh->query($sql) as $data) :
                 ?>

    	<div class="col col_2 no_mr">
            <h5 align="center"><?php echo "$data[gal_judul]";?></h5>            
            <p>Kategori : <?php echo "$data[gal_tipe]";?></p>
            <p align="left">Tanggal foto : <font color="green"><?php echo "$data[gal_tanggal]";?></font></p>
        	<p><?php echo "<img src='images/galeri/$data[gal_foto]' height='230px' width='465px'>";?></p>  
            <p align="justify"><?php echo "$data[gal_caption]";?></p>
        </div>
                 <?php
                  endforeach;
                 ?>
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