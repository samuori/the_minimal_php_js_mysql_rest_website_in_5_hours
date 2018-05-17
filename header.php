<?php
session_start();

function authenticated($u, $p) {
    /* Questa funzione si occupa di autenticare l'utente:
     *
     * param u: nome utente
     * param p: password
     *
     * return true se autenticato, false altrimenti
     */

    if ($u == "pippo" && $p == "pippo") {
        return true;
    } else {
        return false;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title>Sito PHP/JS/HTML/REST</title>
        <link rel="stylesheet" href="assets/bulma.css">
        <script defer src="assets/font-awesome.min.js"></script>
    </head>
  <body>
    <script src="assets/jquery-3.3.1.min.js"></script>
    <nav>
        <ul>
            <li><a href="/login.php">Login</a></li>
            <li><a href="/client.php">Comunica la tua posizione</a></li>
            <li><a href="/dashboard.php">Tabella</a></li>
            <li><a href="/dashboard-ajax.php">Tabella (AJAX)</a></li>
            <li><a href="/logout.php">Logout</a></li>
        </ul>
    </nav>
