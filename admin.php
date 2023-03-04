<?php
$conn = new mysqli('localhost', 'root', 'sole', 'db');
mysqli_set_charset($conn, 'utf8');
?>
<form method="post">
    <input type="email" name="mail" placeholder="Correo electrónico">
    <input type="password" name="pass" placeholder="Contraseña">
    <input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])) {
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    mysqli_query($conn, "INSERT INTO users (mail, pass) VALUES ('$mail', '$pass')");
    echo '<script>window.location="./"</script>';
} 
?>