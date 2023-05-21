<?php

if (isset($_POST['title'])) {
    require '../functions/database.php';

    $title = $_POST['title'];

    if (empty($title)) {
        header("Location: index.php?mess=error");
    }
}