<?php
session_start();
?>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Masuk Absenkit</title>
	<link rel="shortcut icon" href="assets/img/fav-icon.ico" type="image/x-icon">
	<link rel="stylesheet" href="assets/css/separate/pages/login.min.css">
    <link rel="stylesheet" href="assets/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body> 
	<div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
			
                <form class="sign-box" action="page.php?process-masuk" id="form-masuk" name="login" method="POST">
                <div class="sign-avatar">  
					<img src="assets/img/avatar-1-128.png" alt="">
				</div>
				
                <header class="sign-title">Masuk</header>
				<?php 
				//kode php ini kita gunakan untuk menampilkan pesan Peringatan Masuk Terlebih dahulu !
				?>
				
               		<div class="form-group">
					<div class="form-control-wrapper">
					<input	id="masuk-email" class="form-control" name="user" type="text" placeholder="Username"
						data-validation="[L>=1]"
						data-validation-message="Username Tidak Boleh Kosong!">
				    </div>		   
                    </div>
					
                    <div class="form-group">
					<div class="form-control-wrapper">
                    <input 	id="masuk-pass" class="form-control" name="pass" placeholder="Password" type="password" 
						data-validation="[L>=6]"
						data-validation-message="Password Tidak Boleh Kurang Dari 6 Karakter.">
		            </div>									
                    </div>
					
					<div class="form-group form-group-checkbox">
					<div class="checkbox float-left">
					<input 	id="cek-agree" name="cek[agree]" type="checkbox"
							data-validation="[NOTEMPTY]"
							data-validation-message="Ceklis jika sudah benar!">
					<label for="cek-agree">Apakah data anda benar?</label>
					</div>
					</div>
					
                    <button type="submit" name="login" class="btn btn-rounded">Masuk</button>
                    <p class="sign-note">Lupa Kata Sandi? <a href="page.php?lupa-sandi">Hubungi Admin</a></p>
                </form>
				
            </div><!--.container-fluid-->
        </div><!--.page-center-in-->
    </div><!--.page-center-->
	
<script src="assets/js/lib/jquery/jquery.min.js"></script>
<script src="assets/js/lib/tether/tether.min.js"></script>
<script src="assets/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/lib/html5-form-validation/jquery.validation.min.js"></script>
<script type="text/javascript" src="assets/js/lib/match-height/jquery.matchHeight.min.js"></script>
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });
            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                },100);
            });
			/* ==========================================================================
			 Validation
			 ========================================================================== */
			$('#form-masuk').validate({
				submit: {
					settings: {
						inputContainer: '.form-group',
						errorListClass: 'form-tooltip-error'
					}
				}
			});
			$('#form-cek').validate({
				submit: {
					settings: {
						inputContainer: '.form-group',
						errorListClass: 'form-tooltip-error'
					}
				}
			});
        });
    </script>
<script src="assets/js/app.js"></script>
</body>
</html>

 <!-- AbsenKit (absensi siswa berbasis web)
 ********************************************
 * Created      : Husni Mubarok				*
 * Release Date : 28 Februari 2017			*
 * E-mail       : cusnix@gmail.com			*
 * Phone        : (+62)82214121989			*
 * BBM          : D38EC5FB					*
 * Facebook     : fb.me/cusnix				*
 ********************************************
 -->