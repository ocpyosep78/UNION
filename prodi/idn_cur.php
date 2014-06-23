<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Selamat datang di Universitas Ontario</title>

<?php include 'xincludes/stylesheet.php'; ?>
<?php include 'xincludes/script_dds.php'; ?>
<?php include '../berita/xlinker/listing.php'; ?>

</head>
<body id="subpage">

<div id="tubes_wrapper">
    
    <?php include 'xmenu/menu_prodi.php'; ?>
    
    <div id="tubes_page_intro">
        <h1>List Kurikulum</h1>
        <p align="justify">Program studi Sastra Indonesia !</p>
    </div>
    
    
    <div id="tubes_main">
        <div id="tubes_content" class="left">
            <div class="post-item">
                
                <?php
                    include "../berita/xkoneksi/koneksi.php";
                ?>    
       <h3>Semester : I</h3>
        <table id="box-table-a">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Mata Kuliah</th>
                    <th>Tahun</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    <th>Prodi</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_kurikulum             
            WHERE kur_semester = '1' AND kur_prodi = 'Sastra Indonesia'";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[kur_id]";?></d>
                <td><?php echo "$data[kur_matkul]";?></td>
                <td><?php echo "$data[kur_tahun]";?></td>
                <td><?php echo "$data[kur_semester]";?></td>
                <td><?php echo "$data[kur_sks]";?></td>
                <td><?php echo "$data[kur_prodi]";?></td>
                <td><?php echo "$data[kur_keterangan]";?></td>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>

       <h3>Semester : II</h3>
        <table id="box-table-a">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Mata Kuliah</th>
                    <th>Tahun</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    <th>Prodi</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_kurikulum             
            WHERE kur_semester = '2' AND kur_prodi = 'Sastra Indonesia'";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[kur_id]";?></d>
                <td><?php echo "$data[kur_matkul]";?></td>
                <td><?php echo "$data[kur_tahun]";?></td>
                <td><?php echo "$data[kur_semester]";?></td>
                <td><?php echo "$data[kur_sks]";?></td>
                <td><?php echo "$data[kur_prodi]";?></td>
                <td><?php echo "$data[kur_keterangan]";?></td>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>

        <h3>Semester : III</h3>
        <table id="box-table-a">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Mata Kuliah</th>
                    <th>Tahun</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    <th>Prodi</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_kurikulum             
            WHERE kur_semester = '3' AND kur_prodi = 'Sastra Indonesia'";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[kur_id]";?></d>
                <td><?php echo "$data[kur_matkul]";?></td>
                <td><?php echo "$data[kur_tahun]";?></td>
                <td><?php echo "$data[kur_semester]";?></td>
                <td><?php echo "$data[kur_sks]";?></td>
                <td><?php echo "$data[kur_prodi]";?></td>
                <td><?php echo "$data[kur_keterangan]";?></td>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>

        <h3>Semester : IV</h3>
        <table id="box-table-a">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Mata Kuliah</th>
                    <th>Tahun</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    <th>Prodi</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_kurikulum             
            WHERE kur_semester = '4' AND kur_prodi = 'Sastra Indonesia'";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[kur_id]";?></d>
                <td><?php echo "$data[kur_matkul]";?></td>
                <td><?php echo "$data[kur_tahun]";?></td>
                <td><?php echo "$data[kur_semester]";?></td>
                <td><?php echo "$data[kur_sks]";?></td>
                <td><?php echo "$data[kur_prodi]";?></td>
                <td><?php echo "$data[kur_keterangan]";?></td>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>

        <h3>Semester : V</h3>
        <table id="box-table-a">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Mata Kuliah</th>
                    <th>Tahun</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    <th>Prodi</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_kurikulum             
            WHERE kur_semester = '5' AND kur_prodi = 'Sastra Indonesia'";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[kur_id]";?></d>
                <td><?php echo "$data[kur_matkul]";?></td>
                <td><?php echo "$data[kur_tahun]";?></td>
                <td><?php echo "$data[kur_semester]";?></td>
                <td><?php echo "$data[kur_sks]";?></td>
                <td><?php echo "$data[kur_prodi]";?></td>
                <td><?php echo "$data[kur_keterangan]";?></td>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>

        <h3>Semester : VI</h3>
        <table id="box-table-a">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Mata Kuliah</th>
                    <th>Tahun</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    <th>Prodi</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_kurikulum             
            WHERE kur_semester = '6' AND kur_prodi = 'Sastra Indonesia'";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[kur_id]";?></d>
                <td><?php echo "$data[kur_matkul]";?></td>
                <td><?php echo "$data[kur_tahun]";?></td>
                <td><?php echo "$data[kur_semester]";?></td>
                <td><?php echo "$data[kur_sks]";?></td>
                <td><?php echo "$data[kur_prodi]";?></td>
                <td><?php echo "$data[kur_keterangan]";?></td>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>

        <h3>Semester : VII</h3>
        <table id="box-table-a">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Mata Kuliah</th>
                    <th>Tahun</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    <th>Prodi</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_kurikulum             
            WHERE kur_semester = '7' AND kur_prodi = 'Sastra Indonesia'";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[kur_id]";?></d>
                <td><?php echo "$data[kur_matkul]";?></td>
                <td><?php echo "$data[kur_tahun]";?></td>
                <td><?php echo "$data[kur_semester]";?></td>
                <td><?php echo "$data[kur_sks]";?></td>
                <td><?php echo "$data[kur_prodi]";?></td>
                <td><?php echo "$data[kur_keterangan]";?></td>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>

        <h3>Semester : VIII</h3>
        <table id="box-table-a">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Mata Kuliah</th>
                    <th>Tahun</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    <th>Prodi</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_kurikulum             
            WHERE kur_semester = '8' AND kur_prodi = 'Sastra Indonesia'";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[kur_id]";?></d>
                <td><?php echo "$data[kur_matkul]";?></td>
                <td><?php echo "$data[kur_tahun]";?></td>
                <td><?php echo "$data[kur_semester]";?></td>
                <td><?php echo "$data[kur_sks]";?></td>
                <td><?php echo "$data[kur_prodi]";?></td>
                <td><?php echo "$data[kur_keterangan]";?></td>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>
        
        
            </div>       

        
        <a href="../prodi/prodi_idn.php" class="kurmore2">Kembali</a>
        <div class="clear"></div>        
        </div>
                
        <div class="col_3 right">
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
                <a href="../kontak.php" class="more">Selanjutnya</a>
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