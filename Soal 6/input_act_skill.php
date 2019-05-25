<?php
include"connectdb/connect.php";

		$name_skill = $_POST['name_skill'];
		$user_id = $_GET['ID'];
		
		
$cek = mysqli_query($conn,"SELECT * FROM skills WHERE name_skill ='$name_skill'");
	$hasil_cek=mysqli_num_rows($cek);
	
	if($hasil_cek) {
		echo "<script>alert('Sorry, your data already exist. $name_skill Please input try again !!')</script>";
		echo "<meta http-equiv='refresh' content='0; url=input skill.php'>";
		
	

} else {
$query = mysqli_query($conn,"INSERT INTO skills (name_skill,user_id) VALUES ('$name_skill','$user_id')"); 

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