<?php
    include('../config/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <th>firstname</th>
            <th>lastname</th>
            <th>E-mail</th>
            <th>Status</th>
            <td>...</td>
        </tr>
        <tr>
            <td>Gabriel</td>
            <td>Bolaños</td>
            <td>Gabriel@mail.com</td>
            <td>Active</td>
            <td>
                <img src = "icons/edit.png" width="15">
                <img src = "icons/search.png" width="15">
                <img src = "icons/trash.png" width="15">
            </td>
        </tr>
        <?php
            //Here code
            $sql = "
            select
                firstname,
                lastname,
                email,
                case when status = true then 'Active' else 'No active' end as status
            from
                users";
        ?>
    </table>    
</body>
</html>
