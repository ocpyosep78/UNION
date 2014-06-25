<?php session_start(); 
    
    if(($_SESSION['ses_username'] != "") and ($_SESSION['ses_password'] != ""))
    {
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Selamat datang di Universitas Ontario</title>

<?php include 'xincludes/stylesheet.php'; ?>
<?php include 'xincludes/script_dds.php'; ?>
<?php include 'xlinker/listing.php'; ?>
<?php
    require_once "xkoneksi/koneksi_mysql.php";
    $id = $_GET["id"];
    $sql = "SELECT * FROM tb_staff where staff_id='$id'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    $count = mysql_num_rows($result);
?>

</head>
<body id="subpage">

<div id="tubes_wrapper">
    
    <?php include 'xmenu/menu_admin.php'; ?>
    
    <div id="tubes_page_intro">
        <h1>Panel Admin</h1>
        <p align="justify">Selamat datang admin !</p>
    </div>
    
    
    <div id="tubes_main">
        <div class="col_32 left">
            <div id="contact_form">
                <div id="post-meta">
                    <h3>Panel Staff</h3>                    
                    <div class="clear"></div>
                </div>
                <p align="justify">Edit karyawan dan staff : </p>
                
                <?php
                    include "../admin/xkoneksi/koneksi.php";
                ?>

                <form enctype="multipart/form-data" method="post" action="../admin/proses_update_sk.php">

                        <h5>IDENTITAS STAFF/KARYAWAN</h5>
                        <br/><br/>
                        <div class="col_3 left">
                            <input type="hidden" class="input_field" name="staff_id" placeholder="contoh:IDK001" maxlength="6" required value="<?php echo $row['staff_id'] ?>"/>
                            
                            <label>Nama Staff : </label>
                            <input type="text" class="input_field" name="staff_nama" placeholder="contoh:Agung Laksono" maxlength="25" required value="<?php echo $row['staff_nama'] ?>"/>

                            <label>Jabatan Staff : </label>
                            <select name="staff_jabatan" class="input_field" >
                               <option value="Office Boy" <?php if($row["staff_jabatan"] == "Office Boy") echo "selected";?>>Office Boy</option>
                               <option value="Security" <?php if($row["staff_jabatan"] == "Security") echo "selected";?> >Sekuriti</option>
                               <option value="Dosen" <?php if($row["staff_jabatan"] == "Dosen") echo "selected";?>>Dosen</option>
                               <option value="Staff IT" <?php if($row["staff_jabatan"] == "Staff IT") echo "selected";?>>Staff IT</option>
                               <option value="Sekretariat" <?php if($row["staff_jabatan"] == "Sekretariat") echo "selected";?>>Sekretariat</option>
                               <option value="Lainnya" <?php if($row["staff_jabatan"] == "Lainnya") echo "selected";?>>LAINNYA</option>
                            </select><br/><br/>
                        
                            <label>Alamat Staff : </label>
                            <textarea class="input_field" name="staff_alamat" required/><?php echo $row['staff_alamat'] ?></textarea> 

                            <label>Kontak Staff : </label>
                            <input type="text" class="input_field" name="staff_kontak" placeholder="contoh : 081987654321" maxlength="12" required value="<?php echo $row['staff_kontak'] ?>"/>

                            <label>Pendidikan Staff : </label>
                            <select name="staff_pendidikan" class="input_field" >
                               <option value="SMA" <?php if($row["staff_pendidikan"] == "SMA") echo "selected";?>>SMA</option>
                               <option value="D3" <?php if($row["staff_pendidikan"] == "D3") echo "selected";?>>D3</option>
                               <option value="S1" <?php if($row["staff_pendidikan"] == "S1") echo "selected";?>>S1</option>
                               <option value="S2" <?php if($row["staff_pendidikan"] == "S2") echo "selected";?>>S2</option>
                               <option value="S3" <?php if($row["staff_pendidikan"] == "S3") echo "selected";?>>S3</option>
                               <option value="Lainnya" <?php if($row["staff_pendidikan"] == "Lainnya") echo "selected";?>>LAINNYA</option>
                            </select><br/><br/>

                            <label>Foto Staff : </label>
                            <img src="../admin/images/staff/<?php echo $row['staff_foto'] ?>" width="80px" height="80px" class="img_border_b img_nom">    
                            <input type="file" class="input_field" name="staff_foto">

                            <input type="submit" value="Update" class="submit_btn" onclick="return confirm('Apakah data sudah benar ?')">
                        </form>
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


<?php 
    }
    else
    {
        header('Location: ../admin/login.php');
    }
?>