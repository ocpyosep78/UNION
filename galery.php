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
        <p>Berikut adalah galeri kampus dan aktivitas kami <font size="1">(klik pada gambar untuk memperbesar)</font> </p>
    </div>
    
    
    <div id="tubes_main">
    
    	<div class="col col_2">
        	<img src="images/portfolio/01.jpg" alt="image" />
        </div>
        
        <div class="col col_2 no_mr">
        	<img src="images/portfolio/02.jpg" alt="image" height="230px" width="465px" />
        </div>
        
        <div class="clear"></div>
        
        <div class="col col_2">
        	<a href="images/portfolio/02.jpg" rel="lightbox[gallery]"><img src="images/portfolio/02.jpg" alt="image 2" height="230px" width="465px"  /></a>
        </div>
        
        <div class="col col_2 no_mr">
        	<img src="images/portfolio/04.jpg" alt="image" />
        </div>
        
        <div class="clear"></div>
            
            <div class="tubes_paging">
                <?php include 'xlinker/paging.php'; ?>
            </div>            
    </div>
</div>

<div id="tubes_bottom_wrapper">
	<div id="tubes_bottom">
    	
        <div class="col col_3">
            <?php include 'xlinker/galeri.php'; ?>
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