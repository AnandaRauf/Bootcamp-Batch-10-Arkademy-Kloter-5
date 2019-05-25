<?php
include"connectdb/connect.php";

		$name_user = $_POST['name_user'];
		
		
		
$cek=mysqli_query($conn,"SELECT * FROM users WHERE name_user='$name_user'");
	$hasil_cek=mysqli_num_rows($cek);
	
	if($hasil_cek) {
		echo "<script>alert('Sorry, your data already exist. $name_skill Please input try again !!')</script>";
		echo "<meta http-equiv='refresh' content='0; url=input skill.php'>";
		
	

} else {
$query = mysqli_query($conn,"INSERT INTO users (name_user) VALUES ('$name_user')"); 

if (isset ($query)) {
	
echo "<script>alert('Data save succesfull. Thanks for input ^-^');</script>";
	echo "<meta http-equiv='refresh' content='0; url=input programmer.php'>";
} else {
echo "<script>alert('Data anda gagal dimasukan karena ulangi sekali lagi');</script>";
echo "<meta http-equiv='refresh' content='0; url=input skill.php'>";
echo mysqli_error();
}
if (isset($_POST['input-btn'])) {
    if (empty($_POST['name_user'])) {
        $errors['name_user'] = 'Please input your full name';
    }
}
}
		
		
?>