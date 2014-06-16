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
	
    <?php include 'xmenu/menu_news.php'; ?>
    
    <div id="tubes_page_intro">
    	<h1>Informasi Pendaftaran</h1>
        <p>Informasi mengenai pendaftaran mahasiswa/i Universitas Ontario</p>
    </div>
    
    
    <div id="tubes_main">
    	<div id="tubes_content" class="left">
            <div class="post-item">
            	<div class="post-meta">
                    <div class="post-meta-content">
                    	<h2>Form Pendaftaran Mahasiswa/i baru UNION</h2>
                    </div>
                    <div class="clear"></div>
				</div>
                <img class="img_border_b img_nom" src="images/daftar/01.jpg" alt="Post Image" /><br/>
                   
          </div>

        <div class="col_32 left">
            <div id="contact_form">
                <form enctype="multipart/form-data" method="post" name="contact" action="../berita/reg_process.php"> 

                <h5>IDENTITAS CALON MAHASISWA</h5>
                <div class="col_3 left">

                    <label for="nama">No Identitas (KTP/SIM/Kartu Pelajar/Passport) :</label>
                    <input name="no_reg" type="text" class="input_field" id="no_reg" placeholder="contoh : 203002">

                    <label for="nama">Nama Lengkap :</label> 
                    <input name="nama" type="text" class="input_field" id="nama" maxlength="30" required/>
                    
                    <label for="tmptlhr">Tempat Lahir :</label> 
                    <input name="tmptlhr" type="text" class="input_field" id="tmptlhr" maxlength="30" required/>
                    
                    <label for="tgllahir">Tanggal Lahir : </label> 
                    <input type="date" name="tgllahir" class="input_field" />
                    
                    <label for="gender">Jenis Kelamin : </label> 
                    <input type="radio" name="gender" value="L" id="laki-laki" checked/>Laki-Laki
                    <input type="radio" name="gender" value="P" id="perempuan" />Perempuan
                    <br/><br/>
                    
                    <label for="agama">Agama :</label> 
                    <input type="radio" name="agama" value="Islam" checked/>ISLAM
                    <input type="radio" name="agama" value="Kristen" />KRISTEN<br/>
                    <input type="radio" name="agama" value="Hindu" />HINDU
                    <input type="radio" name="agama" value="Budha" />BUDHA<br/>
                    <input type="radio" name="agama" value="Lainnya" />LAINNYA
                    <br/><br/>

                    <label for="tipesekolah">Agama :</label> 
                    <input type="radio" name="tipesekolah" value="SMA" checked/>SMA
                    <input type="radio" name="tipesekolah" value="SMK"/>SMK
                    <input type="radio" name="tipesekolah" value="STM"/>STM
                    <input type="radio" name="tipesekolah" value="MA"/>MA
                    <input type="radio" name="tipesekolah" value="Lainnya"/>Lainnya
                    <br/><br/>

                    <label for="jurusan">Jurusan :</label> 
                    <select name="jurusan" class="input_field" >
                           <option value="IPA">IPA</option>
                           <option value="IPS">IPS</option>
                           <option value="Bahasa">BAHASA</option>
                           <option value="Lainnya">LAINNYA</option>
                     </select><br/><br/>

                    <label for="thnlulus">Tahun lulus :</label> 
                    <input name="thnlulus" type="text" class="input_field" required/>

                    <label for="namasekolah">Nama sekolah :</label> 
                    <input name="namasekolah" type="text" class="input_field" required/>

                    <hr width="600px">
                    <h5>DATA PRIBADI</h5>
                    <label for="namaayah">Nama Ayah :</label> 
                    <input name="namaayah" type="text" class="input_field" required/>

                    <label for="namaibu">Nama ibu :</label> 
                    <input name="namaibu" type="text" class="input_field" required/>

                    <label for="kerjaayah">Pekerjaan Ayah :</label> 
                    <select name="kerjaayah" class="input_field" >
                           <option value="PNS">PNS</option>
                           <option value="Pegawai swasta">Pegawai Swasta</option>
                           <option value="Dokter">Dokter</option>
                           <option value="Guru/Dosen">Guru/Dosen</option>
                           <option value="Polisi">Polisi</option>
                           <option value="TNI">TNI</option>
                           <option value="Lainnya">LAINNYA</option>
                     </select><br/><br/>

                    <label for="kerjaibu">Pekerjaan Ibu :</label> 
                    <select name="kerjaibu" class="input_field" >
                           <option value="PNS">PNS</option>
                           <option value="Pegawai swasta">Pegawai Swasta</option>
                           <option value="Dokter">Dokter</option>
                           <option value="Guru/Dosen">Guru/Dosen</option>
                           <option value="Polisi">Polisi</option>
                           <option value="Ibu rumah tangga">Ibu Rumah Tangga</option>
                           <option value="Lainnya">LAINNYA</option>
                     </select><br/><br/>

                    <label for="alamat">Alamat :</label> 
                    <input name="alamat" type="text" class="input_field" required/>

                    <label for="kota">Kota :</label> 
                    <input name="kota" type="text" class="input_field" required/>

                    <label for="kodepos">Kode Pos :</label> 
                    <input name="kodepos" type="text" class="input_field" required/>

                    <hr width="600px">
                    <h5>PRODI PILIHAN</h5>

                    <label for="prodi">Program Studi Pilihan di UNION :</label> 
                    <select name="prodi" class="input_field" >
                           <option value="Pariwisata" selected>Pariwisata</option>
                           <option value="Sastra Indonesia">Sastra Indonesia</option>
                           <option value="Sastra Inggris">Sastra Inggris</option>
                           <option value="Sastra Perancis">Sastra Perancis</option>
                           <option value="Sastra Jerman">Sastra Jerman</option>
                           <option value="Sastra Rusia">Sastra Rusia</option>
                     </select><br/><br/>

                    <label for="jenjang">Jenjang :</label> 
                    <input type="radio" name="jenjang" value="D3" checked/>D3
                    <input type="radio" name="jenjang" value="Strata 1/S1" />Strata 1/S1<br/>
                    <br/><br/>

                    <label for="foto">Foto terbaru berwarna (maks. 2MB):</label>
                    <input name="foto" type="file" class="input_field" required/>

                    <label for="kontak">Kontak :</label> 
                    <input name="kontak" type="text" class="input_field" required/>

                </div>
                
                <div class="clear"></div>
                    <input type="submit" name="submit" value="Kirim" class="submit_btn" onclick="return confirm('Apakah data sudah benar ?')"/>
                 
                </form>
            </div>    
        </div> 
                       
            
        </div>
                
		<div id="tubes_sidebar" class="right">
			
			<div class="sidebar_section sidebar_section_bg">
                <h2>Alamat Kampus</h2>
                <img align="center" src="images/kampus/page.jpg" alt="image" class="img_nom img_border"  width="250px" height="100px" />
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

            <div class="sidebar_section sidebar_section_bg">
                <h2>Tanggal Pendaftaran</h2>
                <p align="justify">Pendaftaran di bagi menjadi dua gelombang. Yakni :</p>
                <ul>
                    <li>Gelombang 1 : 19 Juni - 19 Juli 2014</li>
                    <li>Gelombang 2 : 20 Juli - 21 September 2014</li>
                </ul>
            </div>
            
      </div>
        
        <div class="clear"></div>
                
    </div> <!-- END of main -->
</div> <!-- END of wrapper -->

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