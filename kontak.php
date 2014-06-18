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
    	<h1>Kontak Kami</h1>
        <p align="justify">Kami siap untuk melayani anda.</p>
        <p align="justify">Jam kerja : Senin - Sabtu pukul 08.00 WITA - 16.00 WITA</p>
    </div>
    
    <div id="tubes_main">
    	<div class="col_32 left">
            <div id="contact_form">

                    <?php
                      if (!empty($_GET['message']) && $_GET['message'] == 'success') {
                      echo '<center>';
                      echo '<img src="images/ok.png">&nbsp;&nbsp;<font color="green" size="2">Berhasil mengirim pesan !</font>';
                      echo '</center>';
                     }
                     ?>
                     <br/><br/>

                <h2>Buku tamu</h2>
                <form method="post" name="contact" action="admin/testimoni.php">
                
                <div class="col_3 left">

                    <input name="tamu_id" type="hidden" class="input_field" id="tamu_id">

                    <label for="nama">Nama:</label> 
                    <input name="tamu_nama" type="text" class="input_field" id="tamu_nama" maxlength="30" placeholder="nama anda" required/>
                    
                  	<label for="email">Email:</label> 
               	    <input name="tamu_email" type="text" class="input_field" id="tamu_email" maxlength="30" placeholder="email anda" required/>
                    
                    <label for="subyek">Subyek:</label> 
                    <input name="tamu_subjek" type="text" class="input_field" id="tamu_subjek" placeholder="contoh : tanya" maxlength="30" />
				</div>
                
                <div class="col_3 right">
                    <label for="pesan">Isi Pesan</label> 
                    <textarea id="tamu_isi" name="tamu_isi" rows="0" cols="0" class="required"></textarea>
				</div>
                
                <div class="clear"></div>
                 	<input type="submit" name="submit" value="Kirim" class="submit_btn" onclick="return confirm('Anda ingin mengirimkan pesan ?')"/><br/>             
                 
                </form>
            </div>    
        </div> 
                
		<div class="col_3 right">
			<h2>Alamat Kampus</h2>
			<div class="sidebar_section">
                <h3>Kampus UNION</h3>
                Jln. Ubud Selatan No.112 - 119<br />
                Denpasar, Bali. 40876. <br />
                Indonesia.<br /><br />
                
                Tel: 0361-76522211<br />
                Fax: Fax : 0361-754 (ext) 2<br />
                Email : union@union.ac.id<br />
            </div>
            <div class="sidebar_section">
                <h3>Gedung Rektorat</h3>
                Jln. Ubud Selatan No.113<br />
                Denpasar, Bali. 40876. <br />
                Indonesia.<br /><br />
                
                Tel: 0361-76522213<br />
                Fax: Fax : 0361-755 (ext) 3<br />
                Email : rektorat@union.ac.id<br />
			</div>
      </div>
        
      <div class="clear"></div>
      <iframe width="960" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31569.79065775347!2d115.26603944999998!3d-8.477603426364265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23d0d964ec3b7%3A0x4030bfbca7d2d30!2sUbud!5e0!3m2!1sen!2s!4v1400418937900"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=new+york+central+park&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=60.158465,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Central+Park,+New+York&amp;t=m&amp;ll=40.769606,-73.973372&amp;spn=0.014284,0.033023&amp;z=14" style="color:#0000FF;text-align:left">Perbesar peta lokasi UNION</a></small>
                
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