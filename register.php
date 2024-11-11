<?php

//connect database
include 'config.php';

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
    $user_type = $_POST['user_type'];

    $select_users = mysqli_query($conn, "SELECT * FROM users WHERE email = 'email' AND password = '$pass'") or die('query failed');

    //Kalo user yang dipilih sudah ada sebelumnya
    if(mysqli_num_rows($select_users) > 0){
        $message[] = 'user already exist!';
    }
    //Kalo user yang dipilih belum ada
    else {
        //Konfirmasi password
        if($pass != $cpass){
            $message[] = 'confirm password not matched!';
        } else {
        //Masukkan data ke database
        mysqli_query($conn, "INSERT INTO users (name, email, password, user_type) VALUES ('$name', '$email', '$cpass', '$user_type')") or die('query failed');
        $message[] = 'registered succesfully!';
        //Direct ke halaman login
        header('location:login.php');
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>


<!-- print message kalau terjadi error -->
<?php
if(isset($message)) {
    foreach($message as $message){
        echo '
        <div class="message">
        <span>'.$message.'</span>
        <i class="fas fa-times" onclick="this.parentElement.remove()"></i>
        </div>
        ';
    }
}
?>
<!-- form register -->
    <div class="form-container">
        <form action="" method="post">
            <!-- input -->
            <input type="text" name="name" placeholder="enter your name" required
            class="box">
            <input type="email" name="email" placeholder="enter your email" required
            class="box">
            <input type="password" name="password" placeholder="enter your password" required
            class="box">
            <input type="password" name="cpassword" placeholder="confirm your password" required
            class="box">
            <select name="user_type" class="box">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <input type="submit" name="submit" value="register now" class="btn">
            <p>already have an account? <a href="login.php">login now</a></p>
        </form>
    </div>
</body>
</html>