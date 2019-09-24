<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
<a href="index.php">Kembali</a>
    <br/><br/>
    <?php 
	if(isset($_GET['nama'])){
		if($_GET['nama'] == ""){
			echo "<h4 style='color:red'>isi kolom nama !</h4>";
		}
    }
    if(isset($_GET['email'])){
		if($_GET['email'] == ""){
			echo "<h4 style='color:red'>isi kolom email !</h4>";
		}
    }
    if(isset($_GET['usrname'])){
		if($_GET['usrname'] == ""){
			echo "<h4 style='color:red'>isi kolom username !</h4>";
		}
    }
    if(isset($_GET['pwd'])){
		if($_GET['pwd'] == ""){
			echo "<h4 style='color:red'>isi kolom password !</h4>";
		}
	}
	?>
    <form action="tambah.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="text" name="password"></td>
            </tr>
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