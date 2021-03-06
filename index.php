<?php 

    session_start();
    include("connect.php");  

    if (isset($_GET['logout'])) {
        unset($_SESSION['username']);
        unset($_SESSION['user_id']);
        header('location: index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style_index.css">
</head>
<body>

<!-- header section starts -->

<header>
    <a href="#" class="logo"><i class="fas fa-ytensils"></i>commm</a>

    <div id="menu-bar" class="fas fa-bars"></div>


  

    
    <nav class="navbar">
        <a href="product_menu.php">สินค้า</a>
        <a href="cart.php">ตระกร้าสินค้า</a>
        <a href="history.php">ประวัติการสั่งซื้อ</a>
        <a href="address.php">ที่อยู่</a>
        <?php if (!isset($_SESSION['username'])) : ?>
        <a href="login.php">เข้าสู่ระบบ</a>
        <?php endif ?>
        <?php if (isset($_SESSION['username'])) : ?>
             <a> <strong><?php echo $_SESSION['username']; ?></strong></a>
             <a href="index.php?logout='1'" style="color: red;">Logout</a>
        <?php endif ?>
        
            
            

    </nav>
    
    <div id="menu-bar" class="fas fa-bars"></div>

</header>


<!-- header section ends -->



<!-- home section starts -->

<section class="home" id="home">

    <div class="content">
        <h1>commm</h1>
        <p>ขายคอม</p>
        <a href="#" class="btn">order now</a>
    </div>

    <div class="image">
        <img src="images/home come.png" alt="">
    </div>

   
</section>    


<!-- home section ends -->




<!-- popular starts -->

<section class="promotion" id="promotion">

    <h1 class="heading">pro<span>motion</span></h1>
    <div class="box-container">

        <div class="box">
            <span class="price">$100 - $200</span>
            <img src="images/cpu1.png" alt="">
            <h3>cpu</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>

        <div class="box">
            <span class="price">$100 - $200</span>
            <img src="images/mb1.png" alt="">
            <h3>mainboard</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>

        <div class="box">
            <span class="price">$100 - $200</span>
            <img src="images/ram1.png" alt="">
            <h3>ram</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>

        <div class="box">
            <span class="price">$100 - $200</span>
            <img src="images/gpu1.png" alt="">
            <h3>gpu</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>

        <div class="box">
            <span class="price">$100 - $200</span>
            <img src="images/pws1.png" alt="">
            <h3>pws</h3>
            
            <a href="#" class="btn">order now</a>
        </div>

        <div class="box">
            <span class="price">$100 - $200</span>
            <img src="images/case1.png" alt="">
            <h3>case</h3>
            <a href="#" class="btn">order now</a>
        </div>


    </div>
</section>

<!-- popular ends -->

<!-- steps section starts  -->

<div class="step-container">

    <h1 class="heading">how it <span>works</span></h1>

    <section class="steps">

        <div class="box">
            <img src="images/step-1.png" width="200" alt="">
            <h3>choose your product</h3>
        </div>
        <div class="box">
            <img src="images/step-3.png" width="200" alt="">
            <h3>free and fast delivery</h3>
        </div>
        <div class="box">
            <img src="images/step-2.png" width="200" alt="">
            <h3>easy payments methods</h3>
        </div>
        <div class="box">
            <img src="images/step-4.png" width="200" alt="">
            <h3>and finally, enjoy your product</h3>
        </div>
    
    </section>

</div>



<footer class="footer">

    <div class="share">
        <a href="#" class="btn">facebook</a>
        <a href="#" class="btn">twitter</a>
        <a href="#" class="btn">instagram</a>
        <a href="#" class="btn">pinterest</a>
        <a href="#" class="btn">linkedin</a>
    </div>

</footer>

<!-- scroll top button  -->
<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

<!-- loader  -->
<div class="loader-container">
    <img src="images/loader.gif" alt="">
</div>




    <!-- custom js file link -->
    <script src="script.js"></script>
    
</body>
</html>