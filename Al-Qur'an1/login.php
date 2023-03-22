<?php
session_start();
include "koneksi.php";
?>

<div class="login">
    <form action="" method= "POST">

    <table>
        <tr>
            <th colspan="2">LOGIN</th>
        </tr>
        <tr>
            <td width="100">Username</td>
            <td> <input type="text" name="username"></td>
        </tr>
        <tr>
            <td width="100">Password</td>
            <td> <input type="password" name="password"></td>
        </tr>
        <tr>
        <td><input type="submit" value="login" name="proseslog"></td>
        </tr>
    </table>
    </form>
</div>

<?php
if(isset($_POST['proseslog'])) {
    $sql = mysqli_query($koneksi, "select * from admin where username = '$_POST[username]'
    and password = '$_POST[password]'");

    $cek = mysqli_num_rows($sql);
    if($cek > 0 ) {
        $_SESSION['username'] = $_POST['username'];

        echo "<meta http-equiv=refresh content=0;URL='index2.php'>";
    } else{
        echo "<p align=center><b> Username atau Password Salah</b></p>";
        echo "<meta http-equiv=refresh content=1;URL='login.php'>";
    }
}

?>
