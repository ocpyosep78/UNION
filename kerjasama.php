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
    	<h1>Profil Universitas Ontario</h1>
        <p align="justify">Pendidikan adalah kunci kesuksesan ! </p>
    </div>
    
    
    <div id="tubes_main">
    	<div id="tubes_content" class="left">
            <div class="post-item">


                <img class="img_border_b img_nom" src="images/kampus/coop.jpg" alt="Post Image" />
                <p align="justify">Universitas Ontario memiliki banyak relasi dan sudah melakukan kerjasama dengan beberapa
                    perusahaan terkemuka. Selain mereka melakukan kerjasama, kami juga selalu melakukan state perancangan
                    kerja dengan mengikut sertakan mahasiswa dalam program kerjanya. Sehingga mahasiswa memiliki pengalaman
                    dalam dunia organisasi dan pekerjaan.</p>
                <p>List kerjasama kami : </p>
                <div class="post-meta">                   
                    <div class="clear"></div>
                </div>
            </div> 
                
                <?php
                    include "admin/xkoneksi/koneksi.php";
                ?>

    <center>
        <table id="box-table-c">
            <thead>
                <tr>
                    <th scope="col">Logo Perusahaan</th>
                    <th scope="col">Nama Perusahaan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Detail Kerjasama</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_kerjasama ORDER BY kj_id";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "<img src='prodi/images/kerjasama/$data[kj_foto]' width='150' height='150'>";?></td>
                <td><?php echo "$data[kj_nama]";?></td>
                <td><?php echo "$data[kj_alamat]";?></td>
                <td><?php echo "$data[kj_detail]";?></td>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>
   
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