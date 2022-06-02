<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body class="body">

<!--Link to the css file-->
<style>
    <?php
include '/xampp/htdocs/phpinvsc/style.css';
?>
</style>

<div class="flex">
    <h2 class="head">SQL Connector<h2>
<form action="show.php" method="post" class="form" action="" method="">
Name: <input type="text" name="name" class="fields"><br>
Surname: <input type="text" name="surname" class="fields"><br>
E-mail: <input type="text" name="email" class="fields"><br>
Landline: <input type="text" name="landline" class="fields"><br>
Cellphone: <input type="text" name="cell" class="fields"><br>
<input type="submit">
</form>

</div>

</body>
</html>