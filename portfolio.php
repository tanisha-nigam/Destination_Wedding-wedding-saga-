<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>portfolio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="portfolio">

   <h1 class="heading">our portfolio</h1>

   <div class="portfolio-container">

      <a href="pics/events/e13.jpg" class="box">
         <div class="image">
            <img src="pics/events/e13.jpg" alt="">
         </div>
         <h3>HALDI FUNCTION</h3>
      </a>

      <a href="pics/events/ME1.jpg" class="box">
         <div class="image">
            <img src="pics/events/ME1.jpg" alt="">
         </div>
         <h3>MEHENDI FUNCTION</h3>
      </a>

      <a href="pics/events/e1.jpg" class="box">
         <div class="image">
            <img src="pics/events/e1.jpg" alt="">
         </div>
         <h3>BACHELOREATE PARTY</h3>
      </a>

      <a href="pics/events/e6.jpg" class="box">
         <div class="image">
            <img src="pics/events/e6.jpg" alt="">
         </div>
         <h3>SANGEET FUNCTION</h3>
      </a>

      <a href="images/port-img-6.jpg" class="box">
         <div class="image">
            <img src="images/port-img-6.jpg" alt="">
         </div>
         <h3>ring ceremony</h3>
      </a>
      <a href="pics/events/e12.jpg" class="box">
         <div class="image">
            <img src="pics/events/e12.jpg" alt="">
         </div>
         <h3>wedding ceremony</h3>
      </a>
      

   </div>

</section>

<?php @include 'footer.php'; ?>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

   lightGallery(document.querySelector('.portfolio .portfolio-container'));

</script>

</body>
</html>