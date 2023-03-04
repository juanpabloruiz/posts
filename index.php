<?php
$conn = new mysqli('localhost', 'root', 'sole', 'db');
mysqli_set_charset($conn, 'utf8');
?>
<a href="admin">Administrador</a>
<table>
    <tr>
        <th>id</th>
        <th>correo</th>
        <th>clave</th>
        <th>fecha</th>
    </tr>
    <?php
    $query = mysqli_query($conn, "SELECT * FROM users");
    while($row = mysqli_fetch_array($query)) { 
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['mail']; ?></td>
        <td><?php echo $row['pass']; ?></td>
        <td><?php echo $row['date']; ?></td>
    </tr>
    <?php
    }
    ?>
</table>