<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Norway</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="style.css">
    
    <?php require('inc/links.php');?>
    <style>
        .box{
            border-top-color: var(--teal) !important;
            
        }
    </style>

    

</head>
<body class="bg-light">

      <?php require('inc/header.php');?>
    
    <div class="my-5 px-4"> <!-- Added text-center class to center the text -->
        <h2 class="mt-12 pt-5 mb-4 h-font text-center">About us</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <p>
        Lorem, ipsum  dolor sit amet consectetur adipisicing elit. 
        Nostrum impedit porro veritatis quos beatae  tempora quasi 
        obcaecati quibusdam, illum quas vel. Ipsum sunt voluptatem 
        dicta consectetur omnis voluptates molestias voluptate.
    </p>
 
  <div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-3">Lorem ipsum dolor sit  </h3>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            omnis minima sapiente Laborum obcaecati explicabo fuga?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            omnis minima sapiente Laborum obcaecati explicabo fuga?
        </p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2  order-md-2 order-1">
            <img src="images/about.jpg"class="w-100">
        </div>

    </div>
  </div>
  <div class="container mt-5">
    <div class="row">
       <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div class="bg-white rounded shadow p-4 border-4 text-center box ">
             <img src ="images/hotel.svg" width="70px">
             <h4 class="mt-3">100+ Rooms</h4>
            
            </div>
       </div>
       <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div class="bg-white rounded shadow p-4 border-4 text-center box ">
             <img src ="images/customers.svg" width="70px">
             <h4 class="mt-3">2000+ CUSTOMERS</h4>
            
            </div>
       </div>
       <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div class="bg-white rounded shadow p-4 border-4 text-center box ">
             <img src ="images/rating.svg" width="70px">
             <h4 class="mt-3">100+ REVIEWS</h4>
            
            </div>
       </div>
       <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div class="bg-white rounded shadow p-4 border-4 text-center box ">
             <img src ="images/staff.svg" width="70px">
             <h4 class="mt-3">200+ STAFFs</h4>
            
            </div>
       </div>     
       </div>
    </div>
  </div>

  <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

  <div class="container px-4">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
       <img src="images/people1.webp"class="w-100">
       <h5 class="mt-2">Random Name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
       <img src="images/people1.webp"class="w-100">
       <h5 class="mt-2">Random Name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
       <img src="images/people1.webp"class="w-100">
       <h5 class="mt-2">Random Name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
       <img src="images/people1.webp"class="w-100">
       <h5 class="mt-2">Random Name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
       <img src="images/people1.webp"class="w-100">
       <h5 class="mt-2">Random Name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
       <img src="images/people1.webp"class="w-100">
       <h5 class="mt-2">Random Name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
       <img src="images/people1.webp"class="w-100">
       <h5 class="mt-2">Random Name</h5>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  </div>

 <?php require('inc/footer.php');?>

 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
    
    spaceBetween: 40,
    pagination: {
      el: ".swiper-pagination",
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 3,
      },
      
    },
  });
</script>

</body>
</html>
