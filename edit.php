<?php
// import koneksi
include_once("config.php");
// proses update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $name=$_POST['name'];
    $usrname=$_POST['username'];
    $email=$_POST['email'];
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
    // query sql update data
    $result = mysqli_query($mysqli, "UPDATE user SET nama='$name',email='$email',username='$usrname', password='$pwd' WHERE username= '$id'");
// setelah proses menhapus maka akan langsung diarahkan ke halaman awal
    header("Location: index.php");}
}
?>
<?php
// menampilkan data user terpilih berdasarkan username
// mengambil dATA id dari yang diakses saat membuka halaman ini, id berupa data username 
$id = $_GET['id'];
//query menampilkan data user terpilih
$result = mysqli_query($mysqli, "SELECT * FROM user WHERE username = '$id'");
while($data = mysqli_fetch_array($result))
{
    $name = $data['nama'];
    $email = $data['email'];
    $usrname = $data['username'];
    $pwd =  $data['password'];
}
?>
<html>
<head>  
    <title>Edit Data</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <br/>
    <div class="form-group col-md-6">
        <a href="index.php">Kembali</a>
    </div>
    <form action="edit.php" method="post" name="Update">
        <table width="25%" border="0">
            <div class="form-group col-md-6">
                <label>Nama</label>
                <input name="name" type="text" class="form-control" value=<?php echo $name;?> required>
            </div>
            <div class="form-group col-md-6">
                <label>Email</label>
                <input name="email" type="text" class="form-control" value=<?php echo $email;?> required>
            </div>
            <div class="form-group col-md-6">
                <label>Username</label>
                <input name="username" type="text" class="form-control" value=<?php echo $usrname;?> required>
            </div>
            <div class="form-group col-md-6">
                <label>Password</label>
                <input name="password" type="text" class="form-control" value=<?php echo $pwd?> required>
            </div>
            <tr> 
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr> 
        </table>
    </form>

</body>
</html>