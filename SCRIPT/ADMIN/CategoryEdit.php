<?php
include('../conn.php');

//print_r($_POST);

if(isset($_POST['cat-edit-submit'])) {
    session_destroy();
    session_start();
    //print_r($_SESSION);
    $CatID = $_SESSION['cat-id'];
    $name_edit = filter_var($_POST['cat-edit-name'], FILTER_SANITIZE_STRING);
    $query = "UPDATE categories SET NAME_CAT = '$name_edit' WHERE ID_CAT = $CatID";
    $result = mysqli_query($mysqli, $query);
    if($result == 1) {
        header('Location: ../../test-panel.php');
    }
} else if(isset($_POST['cat-add-submit'])) {
    session_destroy();
    session_start();
    //print_r($_SESSION);
    $CatID = $_SESSION['cat-id'];
    $name_edit = filter_var($_POST['cat-edit-name'], FILTER_SANITIZE_STRING);
    echo $query = "INSERT INTO categories (NAME_CAT) VALUES ('$name_edit')";
    $result = mysqli_query($mysqli, $query);
    if($result == 1) {
        header('Location: ../../test-panel.php');
    }
} else if(isset($_POST['cat-remove-submit'])) {
    session_destroy();
    session_start();
    //print_r($_SESSION);
    $CatID = $_SESSION['cat-id'];
    $name_edit = filter_var($_POST['cat-edit-name'], FILTER_SANITIZE_STRING);
    echo $query = "DELETE FROM categories WHERE ID_CAT = $CatID";
    $result = mysqli_query($mysqli, $query);
    if($result == 1) {
        header('Location: ../../test-panel.php');
    }
}
?>