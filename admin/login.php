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

                <h2>LOGIN FORM</h2>
                <form method="post" name="login" action="proses_login.php">      
                    <label for="username">USERNAME</label> 
                    <input name="username" type="text" class="input_field" id="username" maxlength="20" color="gray" required/>                    
                  	<label for="password">PASSWORD</label> 
               	    <input name="password" type="password" class="input_field" id="password" maxlength="16" required/>   
				</div>                
                <div class="clear"></div>
                 	<input type="submit" name="submit" value="LOGIN" class="submit_btn" />                    
                    <input type="reset" name="reset" value="RESET" class="submit_btn" />
                 
                </form>
                </center>
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