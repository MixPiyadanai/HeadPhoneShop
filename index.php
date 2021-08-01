<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/Main.css">
    <link rel="stylesheet" href="css/titleEntranceAni.css">
    <link rel="stylesheet" href="css/Card.css">
    <title>SSS.HeadPhoneShop</title>
    <?php
    include 'layouts/googleFont.php';
    ?>
</head>

<body>
    <?php
    include 'layouts/navigationBar.php';
    include 'layouts/index/loginFormModal.php';
    ?>
    <div class="container pt-5">
    <?php 
    include 'layouts/index/featuredCard.php';
    include 'layouts/index/featuredModal.php';
    include 'layouts/index/productListCard.php';
    include 'layouts/index/productListModal.php';
    ?>




    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="JavaScripts/main.js"></script>
</body>

</html>