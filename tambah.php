<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <br/>
    <div class="form-group col-md-6">
        <a href="index.php">Kembali</a>
    </div>
    <form action="tambah.php" method="post" name="form1">
        <table width="25%" border="0">
            <div class="form-group col-md-6">
                <label>Nama</label>
                <input name="name" type="text" class="form-control" placeholder="Masukkan Nama" required>
            </div>
            <div class="form-group col-md-6">
                <label>Email</label>
                <input name="email" type="text" class="form-control" placeholder="Masukkan Email" required>
            </div>
            <div class="form-group col-md-6">
                <label>Username</label>
                <input name="username" type="text" class="form-control" placeholder="Masukkan Username" required>
            </div>
            <div class="form-group col-md-6">
                <label>Password</label>
                <input name="password" type="text" class="form-control" placeholder="Masukkan Password" required>
            </div>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr> 
        </table>
    </form>

    <?php
    //pengondisian untuk menjalankan perintah tambah data.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $usrname = $_POST['username'];
        $pwd = $_POST['password'];
        if ($name == "") {
            header("location:tambah.php?nama=");        
        }elseif ($email == "") {
            header("location:tambah.php?email=");        
        }elseif ($usrname == "") {
            header("location:tambah.php?usrname=");        
        }elseif ($pwd == "") {
            header("location:tambah.php?pwd=");        
        } else {
            // import koneksi
            include_once("config.php");
            // query tmmbah data
            $result = mysqli_query($mysqli, "INSERT INTO user(nama,email,username,password) VALUES('$name','$email','$usrname','$pwd')");
            // pemberitahuan sukses menambah data
            echo "Data berhasil ditambah. <a href='index.php'>Lihat data</a>";
        }
    }
    ?>
</body>
</html>