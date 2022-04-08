<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
   

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- swiper css link  -->
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">




</head>
<body>
<div class="container">

<?php @include 'header.php'; ?>

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(pics/events/e10.jpg) no-repeat">
            <div class="content">
               <h3>plan your wedding with us!</h3>
               <p>Wedding is not about spending the least or the most amount of money; it's about spending good money on the elemnts that are most important to the couple. Make your day memorable with us.</p>
               <a href="about.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(pics/photoshoot/p22.jpg) no-repeat">
            <div class="content">
            <h3>Willing your wedding memorable ?</h3>
               <p>If you are going to plan your wedding, then a certain amount of suffering is not a choice, make your wedding plannings stress free by contacting us </p>
               
               <a href="about.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(pics/photoshoot/p7.jpeg) no-repeat">
            <div class="content">
            <h3>Confused with the decoration, destiantion? Needd help? Contact us !</h3>
               <p>Bride's oath - I will accept help, I will not criticize the help, I will let my wedding planner help. Planning wedding involves thousands of decisions. Decisions that need to be made and moved forward on.</p>
               <a href="about.php" class="btn">discover more</a>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<section class="services">

   <h1 class="heading">our services</h1>

   <div class="swiper service-slider">

      <div class="swiper-wrapper">


      <div class="swiper-slide slide">
            <img src="pics/venue/LeMeriate/lv1.jpg" alt="">
            <div class="content">
               <h3>wedding Destination</h3>
               <p>We decided to take your story to the next level.<br> Find that endless ocean, the place that is truly beautiful, take vows of togetherness in the different destination. </p>
               <a href="destination.php" class="btn">DESTINATIONS</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="pics/decorators/bangalore/bd7.jpeg" alt="">
            <div class="content">
               <h3>Wedding Decoration</h3>
               <p>Everything has a place, and everything in its place!<br>Design is coming to grips with one's real lifestyle, one's real place in the world. Be faithful to your own taste and contact our decors.</p>
               <a href="Decoration.php" class="btn">DECORATORS</a>
            </div>
         </div>

         

         <div class="swiper-slide slide">
            <img src="pics/shopping/payal/pd1.jpg" alt="">
            <div class="content">
               <h3>Wedding shopping</h3>
               <p>There is a little bit of magic found in buying something new . It is instant gratification, a quick fix.”<br>
               Shopping is cardio. Time to get fit, time do some cardio. Get yourself designer wears.
</p>
               <a href="shopping.php" class="btn">DESIGNERS</a>
            </div>
         </div>


         <div class="swiper-slide slide">
            <img src="pics/photoshoot/p2.jpeg" alt="">
            <div class="content">
               <h3>photography</h3>
               <p>If your photos aren't good enough, then you're not close enough. Get yourself photoshoot with our photographer and team.</p>
               <a href="photo.php" class="btn">PHOTOGRAPHERS</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="pics/MakeUp/farush/fm6.jpg" alt="">
            <div class="content">
               <h3>MAKE-UP ARTIST</h3>
               <p>party without gorgeous look is not really a party<br>
               Get yourself party ready with our top make-up artists.
</p>
               <a href="makeup.php" class="btn">ARTISTS</a>
            </div>
         </div>

         

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<?php @include 'footer.php'; ?>

</div>


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

    
</body>
</html>