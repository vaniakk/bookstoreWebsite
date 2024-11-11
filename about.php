<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- Link Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Link file CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<?php include 'header.php'; ?>

<div class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/aboutus.jpg" alt="" height="500px">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Our online platform allows you to explore a vast collection of books from the comfort of your home.</p>
            <p>Have a specific book in mind? Looking for recommendations? Our team is here to assist you at every step, ensuring that your reading preferences are met with a tailored and thoughtful approach.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

    </div>

</section>

<section class="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
             <p>I stumbled upon this online bookstore and couldn't be happier.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Emily Thompson</h3>
        </div>

        <div class="box">
         <p>I've ordered multiple times, and each experience has been a breeze. The ordering process is simple, and my books arrive at my doorstep faster than I expected. Great service!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jonathan Harris</h3>
        </div>

        <div class="box">
         <p>What sets this bookstore apart is the personalized touch. I asked for recommendations, and they went above and beyond to suggest books tailored to my taste. Love it!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sophie Miller</h3>
        </div>

        <div class="box">
         <p>This bookstore has become my go-to for all things books. Their curated selection and reliable service make it a standout choice for any avid reader like me.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Daniel Rodriguez</h3>
        </div>

        <div class="box">
         <p>Quality matters, and this bookstore consistently delivers. The books I've received are in excellent condition, and the curated collection speaks volumes about their commitment to readers.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Olivia Bennett</h3>
        </div>

        <div class="box">
         <p>I appreciate the smooth and secure transactions whenever I shop here. It's a relief to know that my orders are processed efficiently, making the entire book-buying experience enjoyable.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Michael Carter</h3>
        </div>

    </div>

</section>

<section class="authors">

    <h1 class="title">authors</h1>

    <div class="box-container">

        <div class="box">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Jenn Reese</h3>
        </div>

        <div class="box">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Jostein Gaarder</h3>
        </div>

        <div class="box">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Leila S.</h3>
        </div>

        <div class="box">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Lucy Steele</h3>
        </div>

        <div class="box">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Tere Liye</h3>
        </div>

        <div class="box">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Vona Stewart</h3>
        </div>

    </div>

</section>

<?php include 'footer.php'; ?>

<!-- Link file JavaScript -->
<script src="js/script.js"></script>

</body>
</html>