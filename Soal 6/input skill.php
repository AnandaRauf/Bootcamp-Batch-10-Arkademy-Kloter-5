<?php
include "connectdb/connect.php"	
?>
<html>
<head>
<title>Soal 6 Bootcamp Arkademy Batch 10 Kloter 5 - Input Programmer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/inputskill.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Input Skill </h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="input_act_skill.php" method="post">
					<input class="text" type="text" name="name_skill" placeholder="Your skill name" required="">
					
<tr><td class="head-data">Pilih User :
			<select name="ID">
			<option value="">User</option>
			<?php	
					// query untuk menampilkan users
					
					$query =  mysqli_query ($conn, "SELECT * FROM users");
		
					$hasil = mysqli_query($query);
					while ($data = mysqli_fetch_row($hasil,$selc))
					{
						echo "<option value='".$data['ID']."'>".$data['name_user']."</option>";
					}
			?>
					</select>
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" name="input-btn" value="Input">
				</form>
				
			</div>
		</div>
		<!-- copyright -->
		<div class="passion-store-copy">
			<p>© 2019 Soal 6 Bootcamp Arkademy Batch 5 Kloter 5. All Rights Reserved | Developed by <a href="https://www.instagram.com/anandarauf08" target="_blank">Ananda Rauf Maududi</a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>