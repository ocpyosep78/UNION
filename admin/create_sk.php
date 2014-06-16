<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Selamat datang di Universitas Ontario</title>

<?php include 'xincludes/stylesheet.php'; ?>
<?php include 'xincludes/script_dds.php'; ?>
<?php include 'xlinker/listing.php'; ?>


</head>
<body id="subpage">

<div id="tubes_wrapper">
    
    <?php include 'xmenu/menu_admin.php'; ?>
    
    <div id="tubes_page_intro">
        <h1>Panel Admin</h1>
        <p align="justify">Selamat datang admin !</p>
    </div>
    
    
    <div id="tubes_main">
        <div id="tubes_content" class="left">
            <div class="post-item">
                <div class="post-meta">
                    <h3>Tambah STAFF/KARYAWAN baru</h3>                    
                    <div class="clear"></div>
                </div>
                <p align="justify">Gunakan halaman ini untuk menambah staff/ karyawan baru !</p>

                <div class="col_32 left">
                    <div id="contact_form">
                        <form enctype="multipart/form-data" method="post" action="../admin/proses_create_sk.php">

                        <h5>IDENTITAS STAFF/KARYAWAN</h5>
                        <br/><br/>
                        <div class="col_3 left">
                            <label for="staff_id">ID Staff : </label>
                            <input type="text" class="input_field" name="staff_id" placeholder="contoh:IDK001" maxlength="6" required/>
                            
                            <label>Nama Staff : </label>
                            <input type="text" class="input_field" name="staff_nama" placeholder="contoh:Agung Laksono" maxlength="25" required/>

                            <label>Jabatan Staff : </label>
                            <select name="staff_jabatan" class="input_field" >
                               <option value="Office Boy">Office Boy</option>
                               <option value="Security">Sekuriti</option>
                               <option value="Dosen">Dosen</option>
                               <option value="Staff IT">Staff IT</option>
                               <option value="Sekretariat">Sekretariat</option>
                               <option value="Lainnya">LAINNYA</option>
                            </select><br/><br/>
                        
                            <label>Alamat Staff : </label>
                            <textarea class="input_field" name="staff_alamat" required/></textarea> 

                            <label>Kontak Staff : </label>
                            <input type="text" class="input_field" name="staff_kontak" placeholder="email/ponsel" maxlength="12" required/>

                            <label>Pendidikan Staff : </label>
                            <select name="staff_pendidikan" class="input_field" >
                               <option value="SMA">SMA</option>
                               <option value="D3">D3</option>
                               <option value="S1">S1</option>
                               <option value="S2">S2</option>
                               <option value="S3">S3</option>
                               <option value="Lainnya">LAINNYA</option>
                            </select><br/><br/>

                            <label>Foto Staff : </label>
                            <input type="file" class="input_field" name="staff_foto">

                            <input type="submit" value="Tambah" class="submit_btn">
                        </form>
                        </div>
                            
                    </div>
                </div>

            </div>
        <div class="clear"></div>        
        </div>
                
        <div id="tubes_sidebar" class="right">
            
            <div class="sidebar_section sidebar_section_bg">
                <?php include 'xmenu/side_admin.php';?>
            </div>
      </div>
        
        <div class="clear"></div>
                
    </div>
</div>

<div id="tubes_bottom_wrapper">
    <div id="tubes_bottom">     
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