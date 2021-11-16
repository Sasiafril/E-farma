<?php
    include './koneksi.php';

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    

    $sql = "INSERT INTO user (nama, username, password, level) VALUES('$nama','$username','$password','user')";
    if($conn->query($sql) === TRUE){
        echo "<div class='alert alert-primary alert-success' role='alert'> <a href='index.php' >Kembali</a> <br> Buat Akun Sukses</div>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>