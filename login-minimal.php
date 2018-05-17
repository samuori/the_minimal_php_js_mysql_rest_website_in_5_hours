<?php

require "header.php";

$username="";
$password="";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username=$_POST['username'];
    $password=$_POST['password'];

    if($username=="utente" && $password=="utente"){
        $_SESSION['login'] = $username;
        header ("Location: index.php");
        exit;
    }
    else {
        $_SESSION['login'] ="";
    }
}
?>

<h2>Puoi entrare con utente:utente</h2>

<form name="login" action="" method="POST">
    Utente <input name="username" type="text" value="">
    <br>
    <p>Password <input name="password" type="password" value="" size="20"> </p>
    <button type="submit">INVIA</button>

</form>

<?php

require "footer.html";

?>
