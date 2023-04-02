<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage-Posts</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="index.php" class="nav__logo">Weblog</a>
            <ul class="nav__items">
            <li> <a href="blog.php">Blog</a> </li>
                <li> <a href="about.php">About</a> </li>
                <li> <a href="services.php">Services</a> </li>
                <li> <a href="contact.php">Contact</a> </li>
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/avatar1.png">
                    </div>
                    <ul>
                        <li><a href=".admin/dashboard.php">Dashboard</a></li>
                        <li><a href="">Log Out</a></li>
                    </ul>
                </li>
            </ul>
            <button id="open__nav-btn"></button>
            <button id="close__nav-btn"></button>
        </div>
    </nav>
