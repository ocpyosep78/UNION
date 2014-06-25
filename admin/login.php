<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Selamat datang di Universitas Ontario</title>

<?php include 'xincludes/stylesheet.php'; ?>
<?php include 'xincludes/script_dds.php'; ?>

<script type="text/javascript">
    <?php 
        if(isset($_GET['message'])){ 
            if($_GET['message'] == 0){
    ?>
        alert("USERNAME atau PASSWORD salah !");
    <?php } } ?>
</script>

</head>

<body id="subpage">

<div id="tubes_wrapper">

    
    <?php include 'xmenu/menu_login.php'; ?>
    
    <div id="tubes_page_intro">
    	<h1>Login</h1>
        <p align="justify">Halaman Login untuk Admin</p>
    </div>
    
    <div id="tubes_main">
    <center>
            <div id="contact_form">

                     <?php
                          if (!empty($_GET['logout']) && $_GET['logout'] == 'true') {
                          echo '<center>';
                          echo '<img src="../images/ok.png">&nbsp;&nbsp;<font color="green" size="2">Anda berhasil logout !</font>';
                          echo '</center>';
                         }
                    ?>
                    <br/><br/> 
                    <?php
                          if (!empty($_GET['login']) && $_GET['login'] == 'false') {
                          echo '<center>';
                          echo '<img src="../admin/images/hapus.png">&nbsp;&nbsp;<font color="red" size="2">USERNAME/PASSWORD SALAH !</font>';
                          echo '</center>';
                         }
                    ?>
                    <br/><br/>

                    <p align="center"><img src="../images/union.png" width="420px" height="140px"></p>
                <form method="post" name="login" action="../admin/proses_login.php">      
                    <label for="username">USERNAME</label> 
                    <input name="username" type="text" class="login" id="username" maxlength="20" color="gray" required/>                    
                  	<label for="password">PASSWORD</label> 
               	    <input name="password" type="password" class="login" id="password" maxlength="16" required/>   
				              
                <div class="clear"></div>
                 	<input type="submit" name="submit" value="LOGIN" class="tb_login" /> 
                    <input type="reset" name="reset" value="RESET" class="tb_login" /> 
                 
                </form>
                </center></div>  
            </div>    
        </div> 
      <div class="clear"></div>
         
    </div>
</div>
    
</div>

<div id="tubes_footer_wrapper">
	<?php include 'xlinker/footlink.php'; ?>
</div>

</body>
</html>