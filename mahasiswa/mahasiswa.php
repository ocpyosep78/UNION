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
            <h2>Universitas Ontario</h2>
            <div class="col col_2">
                <h5>Sejak 1980</h5>
                    <p align="justify">
                        Berdiri sejak 1980 menjanjikan pendidikan yang berkualitas bagi bangsa. Mengutamakan kualitas dari pada kuantitas
                        yang hanya bertitik pada tujuan tertentu. Memiliki tujuan jelas serta menjunjung tinggi nilai, harkat serta martabat
                        bangsa.
                    </p>
                </div>
            <div class="col col_2 no_mr">
                <h5>Nomor 1 di Asia Tenggara</h5>
                <p align="justify">
                        Universitas Nomor 1 di Asia Tenggara dengan kualitas pendidikan yang menjanjikan serta kurikulum yang selalu 
                        berkembang mengikuti zaman serta kebutuhan. Bergerak dalam bidang Pariwisata, Sastra dan ketatabahasaan. 
                    </p>
                </div>
            <div class="clear"></div>
                <div class="col col_3">
                    <h5>Visi yang jelas</h5>
                    <p align="justify">
                            Memiliki visi yang jelas dan melihat jauh kedepan. Serta memiliki tujuan dengan orientasi memajukan
                            bangsa mulai dari titik yang paling awal.
                    </p>
                </div>
            <div class="col col_32 no_mr">
                <h5>Visi</h5>
                <p align="justify">
                    1. Mencerdaskan bangsa dengan pendidikan yang berkualitas.<br>
                    2. Menciptakan lulusan yang berpengalaman dalam bidangnya.<br>
                    3. Membangun bangsa dengan anak didik yang mampu bekerja keras. <br>
                    4. Menciptakan lulusan dengan wawasan yang luas dan mampu bersaing. <br>
                    5. Menjadi inovator sekaligus menjadi pembaharuan bagi bangsa.
                </p>
            </div>            
            <div class="clear"></div>
            
        </div> 
                
		<div class="col_3 right">
			<h2>Panel Mahasiswa</h2>
			<div class="sidebar_section">
                <h3>LOGIN</h3>
                <form method="post" action="#" name="login">
                <label for="username">Username</label><br/> 
                <input name="username" type="text" size="20px" id="username" maxlength="30" /><br/>
                
                <label for="password">Password</label><br/> 
                <input name="password" type="password" size="20px" id="password" maxlength="30" />

                <br/><br/>
                <input type="submit" name="submit" value="LOGIN" class="submit_btn" />
                <input type="reset" name="reset" value="RESET" class="submit_btn" />
                </form>
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