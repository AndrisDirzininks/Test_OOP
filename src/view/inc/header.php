<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- some custom css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Scandiweb Test</title>
</head>
<body>
    <!-- load the navbar -->
    <?php require_once("../src/view/inc/navbar.php");?>
    <!-- loading classes -->
    <?php require_once("../src/classes/NavBar.php");?>
    <?php require_once("../src/classes/Database.php");?>
    <?php require_once("../src/classes/GetPost.php");?>
    <?php require_once("../src/classes/MassDelete.php");?>    
    <?php require_once("../src/classes/TypeCaseFactory.php");?>
    <?php require_once("../src/classes/CheckSku.php");?>
    <?php require_once("../src/classes/AddDvd.php");?>
    <?php require_once("../src/classes/AddBook.php");?>
    <?php require_once("../src/classes/AddFurniture.php");?>

    
    <!-- wrap all page content -->
    <div class="container">
        <!-- handle navigation with a class -->
        <?php $navigation = new NavBar; ?>