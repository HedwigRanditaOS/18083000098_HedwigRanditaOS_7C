<html>
<head> 
    <title>Halaman Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="container">
        <div class="content">
            <div class="box-daftar">
                <form class="box" action="index.php" method="post">
                    <h2>LOGIN</h2>
                    <input type="text" name="email" placeholder="Email" required/>
                    <input type="password" name="pass" placeholder="Password" required/>
                    <input type="submit" name="daftar" values="Daftar"/>

                </form>

                <?php
                include '../../assets/mysql_connect/koneksi.php';
                    if (isset($_POST['daftar'])){
                        $email = $_POST['email'];
                        $password = $_POST['pass'];

                        $cekuser = mysqli_query($conn,"SELECT * from tb_user where email='$email' and password='$password'");
                        $hitung = mysqli_num_rows($cekuser);

                    if ($hitung>0) {
                        $ambildatastatus = mysqli_fetch_array($cekuser);
                        $nama = $ambildatastatus['nama'];

                    if ($nama=='admin') {
                        $_SESSION['log'] = 'Logged';
                        $_SESSION['nama'] = 'admin';
                        header('location:../../new/login-admin.php');
                    } else{
                        $_SESSION['log'] = 'Logged';
                        $_SESSION['nama'] = 'user';
                        header('location:../../new/index.php');
                    }
                    }
                    } 
                ?>

            </div>
        </div>
    </div>
    
            <div class="footer">
                <p>Copyright &copy; 2021 designed by Admin Cantik.</p>
            </div>


</body>
</html>