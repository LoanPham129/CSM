<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <style>
        .menu.mt-5 a.btn-info:hover {
            background-image: linear-gradient(to top, #ff7762 0%, #fb5196 100%) !important;
        }
    </style>
</head>
<body>
    <div class="dashboard d-flex justify-content-between">
        <div class="sidebar bg-dark vh-100">
            <h1 class="bg-primary p-4" style='background-image: linear-gradient(to top, #b721ff 0%, #21d4fd 100%); '>
                <a href="./index.php" class="text-light text-decoration-none" >Dashboard</a></h1>
            <div class="menues p-4 mt-5">
                <div class="menu">
                    <a href="create.php" class="text-light text-decoration-none"><strong>Add New Post</strong></a>
                </div>
                <div class="menu mt-5">
                    <a href="../index.php" class="text-light text-decoration-none"><strong>View Website</strong></a>
                </div>
                <div class="menu mt-5">
                    <a href="logout.php" class="btn btn-info" style='position: relative; overflow: hidden; transition: all 0.35s ease;
                    background-image: linear-gradient(to top, #b721ff 0%, #21d4fd 100%); '>Logout</a>
                </div>
            </div>
        </div>