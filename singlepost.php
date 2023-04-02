<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="./css/style.css">
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
                <li> <a href="signin.php">Signin</a> </li>
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


    <section class="singlepost">
        <div class="container singlepost__container">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, dicta.</h2>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/avatar2.png">
                </div>
                <div class="post_author-info">
                    <h5>By: Jane Doe</h5>
                    <small>June 10, 2022 07:23</small>
                </div>
            </div>
            <div class="singlepost__thumbnail">
                <img src="./images/blog3.jpg">
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vestibulum, magna eget vulputate tempor, ipsum ligula scelerisque ipsum, ut tincidunt leo leo vitae ligula. Proin facilisis et dui ac iaculis. Phasellus condimentum sagittis scelerisque. Aliquam id nisl ut neque fermentum imperdiet. Nulla mollis gravida tempor. Sed eu cursus massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent nec metus ligula. Nulla facilisi. Nulla urna metus, dignissim in elit non, vehicula placerat tortor. Sed urna mi, semper ut consequat ac, condimentum id justo. Pellentesque rutrum velit sed placerat aliquet.
            </p>
            <p>
                Vivamus varius eu quam sit amet blandit. Morbi ac purus laoreet, ornare est id, sagittis risus. Morbi facilisis nisl erat. Vestibulum ex orci, finibus quis tortor a, tempor vehicula orci. In sapien eros, iaculis ut commodo in, sollicitudin nec quam. Nunc at mi eget ligula ornare eleifend nec in est. Praesent at orci metus. Donec aliquet aliquet rhoncus. Nulla nec commodo orci.
            </p>
            <p>
                Aliquam convallis massa ut velit dictum blandit. Duis sit amet diam porta, laoreet purus quis, congue arcu. Ut viverra orci sed mauris placerat dignissim. Aenean pharetra, libero ac viverra elementum, massa ligula ullamcorper lectus, at pulvinar risus sem non elit. Nulla facilisi. Quisque pretium vehicula commodo. Nunc semper nulla id venenatis ultricies. Nunc vulputate gravida elit vitae auctor. Maecenas fermentum mi finibus ligula dapibus lacinia sed eget felis. Donec sit amet imperdiet metus. Nulla tempus tortor ex, vitae egestas ex mollis ac. Vestibulum a pellentesque ante, et lobortis nunc.
            </p>
        </div>
        </section>


    <footer class="footer">
        <p></p>
    </footer>
    
</body>
</html>