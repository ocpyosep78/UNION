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
                    <h3>Selamat datang di panel administrasi</h3>                    
                    <div class="clear"></div>
                </div>
                <p align="justify">Halaman ini hanya diperuntukkan bagi mereka yang memiliki akses kedalam sistem. Halaman ini berisi beberapa bagian sistem
                          seperti Panel pembaharuan hingga panel administrasi website. Jika ada kesalahan dalam halaman ini hubungi : </p>
                <ul>
                    <li>Handy D - handydannu@admin.com</li>
                    <li>Lukman B - lukmanbarokah@admin.com</li>
                    <li>Rika Y - rikayuliana@admin.com</li>
                    <li>Martono - martono@admin.com</li>
                </ul>       
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