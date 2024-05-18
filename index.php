

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
    
    <body>
    
 
 
      <?php require('inc/header.php');?>
      

<!--swiper -->
   
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/gallery-img-1.jpg" class="w- d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/gallery-img-2.jpg"  class="w-100 d-block" >
        </div>
        <div class="swiper-slide">
          <img src="images/gallery-img-3.jpg"  class="w-100 d-block" >
        </div>
        <div class="swiper-slide">
          <img src="images/gallery-img-4.jpg"  class="w-100 d-block" >
        </div>
        <div class="swiper-slide">
          <img src="images/gallery-img-5.jpg"  class="w-100 d-block" >
        </div>
        <div class="swiper-slide">
          <img src="images/gallery-img-6.jpg"  class="w-100 d-block" >
        </div>
        <div class="swiper-slide">
          <img src="images/gallery-img-7.jpg"  class="w-100 d-block" >
        </div>
        <div class="swiper-slide">
          <img src="images/gallery-img-8.jpg"  class="w-100 d-block" >
        </div>
        <div class="swiper-slide">
          <img src="images/gallery-img-9.jpg"  class="w-100 d-block" >
        </div>
        <div class="swiper-slide">
          <img src="images/gallery-img-10.jpg"  class="w-100 d-block" >
        </div>
      </div>
     
    </div>
  </div>
  
  <!--swiper-->

    

          <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
      
          
    <script src="//code.tidio.co/sd7qrujsk2fadbbpaaiiydshxmaxbsum.js" async></script>
     
    <!--script for toogle -->
  
    <script>
      let menuToggle =document.querySelector('.menuToggle');
      let sidebar =document.querySelector('.sidebar');
      menuToggle.onclick =function(){
        menuToggle.classList.toggle('active');
        sidebar.classList.toggle('active');
      }

      let Menulist = document.querySelectorAll('.Menulist li');
  function activeLink() {
    Menulist.forEach((item) =>
      item.classList.remove('active'));
    this.classList.add('active');
  }
  Menulist.forEach((item) =>
    item.addEventListener('click', activeLink));

      </script>

      <!--script for toogle-->









</div>


    <!--check availability form-->

    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded ">
            <h5 class="mb-4">Check Booking Availability</h5>
            <form>
                <div class="row align-items-end">
                <div class="col-lg-3 mb-3">
                    <label class="form-label" style="font-weight:500;">Check-in</label>

                   <input type="date" class="form-control shadow-none">
                  </div>
                  <div class="col-lg-3 mb-3">
                    <label class="form-label" style="font-weight:500;">Check-out</label>

                     <input type="date" class="form-control shadow-none">
                     </div>
                     <div class="col-lg-3 mb-3">
                    <label class="form-label" style="font-weight: 500;">Adult</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>   
                        
                   </select>
                  </div>

                  <div class="col-lg-3  mb-3">
                    <label class="form-label" style="font-weight: 500;">Children</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>   
                        
                   </select>

                 </div>
                 <div class="col-lg-1mb-lg-3 mt-2">
                    <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                 </div>
                </div>
               </form>
            </div>
        </div>
    </div>
   
    <!-- Toggle button and slide-out menu -->
    



\

  <!-- our rooms -->
   <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    
   <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="images/gallery-img-1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Simple rooms Name</h5>
            <h6 class="mb-4">₹2000 per day</h6>
            <div class="features mb-4">
              <h6 class="mb-1">features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 bathroom</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">3 sofa</span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">wifi</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">television</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill=" yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill=" yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill=" yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill=" yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>

                <!-- Add more stars if needed -->
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn-sm text-white custom-bg">Book now</a>
              <a href="#" class="btn-sm btn-outline-dark shadow-none">More details</a>
            </div>
          </div>
        </div>
      </div>
   
      <!-- Second card -->
      <div class="col-lg-4  col-md-6 my-2">
        <div class="card shadow-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="images/gallery-img-2.jpg" class="card-img-top">
          <div class="card-body">
            <!-- Content for second card -->
            <h5>Simple rooms Name</h5>
            <h6 class="mb-4">₹2000 per day</h6>
            <div class="features mb-4">
              <h6 class="mb-1">features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 bathroom</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">3 sofa</span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">wifi</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">television</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>

                <!-- Add more stars if needed -->
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn-sm text-white custom-bg">Book now</a>
              <a href="#" class="btn-sm btn-outline-dark shadow-none">More details</a>
            </div>
          </div>
          </div>
        </div>
         
      <!-- Third card -->
      <div class="col-lg-4 col-md-6 my-3" + >
        <div class="card shadow-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="images/gallery-img-3.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Simple rooms Name</h5>
            <h6 class="mb-4">₹2000 per day</h6>
            <div class="features mb-4">
              <h6 class="mb-1">features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 bathroom</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">3 sofa</span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">wifi</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">television</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="16" heigh="16"  fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn-sm text-white custom-bg">Book now</a>
              <a href="#" class="btn-sm btn-outline-dark shadow-none">More details</a>
            </div>
          </div>
        </div>
      </div>
    
  </div>
  
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class=" btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>   
      </div>
    </div>
   </div>

    <!--facility-->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

  <div class="container">
<div class="row justify-content-evenly px-lg-0 px-md-0 px-5">

<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
  <img src="images/IMG_43553.svg" width="80px">
  <h5 class="mt-3">Wifi</h5>
</div>

<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
  <img src="images/IMG_41622.svg" width="80px">
  <h5 class="mt-3">TV</h5>
</div>

<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
  <img src="images/IMG_49949.svg" width="80px">
  <h5 class="mt-3">AC</h5>
</div>

<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
  <img src="images/IMG_96423.svg" width="80px">
  <h5 class="mt-3">Wifi</h5>
</div>

<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
  <img src="images/IMG_43553.svg" width="80px">
  <h5 class="mt-3">Wifi</h5>
</div>

  <div class="col-lg-12 text-center mt-5">
    <a href="#" class=" btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
    </div>
   </div>
  </div>

  <!--testimonial-->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
 
  <div class=".swiper-container mt-5">
    <div class="Swiper-testimonials">
      <div class="swiper-wrapper mb-5">

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" >
              <path d="M12 1.1l2.59 5.72 6.15.57-4.65 4.2 1.38 6.66-5.47-3.63-5.47 3.63 1.38-6.66-4.65-4.2 6.15-.57z"/>
            </svg>
            <h6 class="m-0 ms-2">Random user</h6>
          </div>
    
  
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Dignissimos voluptatibus quaerat ipsa voluptatum vero suscipit natus asperiores labore. Dolorum totam architecto excepturi dicta quam illo
            rem earum repellendus mollitia quisquam.
          </p>
          <div class="rating">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>
          </div>
        </div>

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" >
              <path d="M12 1.1l2.59 5.72 6.15.57-4.65 4.2 1.38 6.66-5.47-3.63-5.47 3.63 1.38-6.66-4.65-4.2 6.15-.57z"/>
            </svg>
            <h6 class="m-0 ms-2">Random user</h6>
          </div>
    
  
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Dignissimos voluptatibus quaerat ipsa voluptatum vero suscipit natus asperiores labore. Dolorum totam architecto excepturi dicta quam illo
            rem earum repellendus mollitia quisquam.
          </p>
          <div class="rating">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>
          </div>
        </div>
     
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" >
              <path d="M12 1.1l2.59 5.72 6.15.57-4.65 4.2 1.38 6.66-5.47-3.63-5.47 3.63 1.38-6.66-4.65-4.2 6.15-.57z"/>
            </svg>
            <h6 class="m-0 ms-2">Random user</h6>
          </div>
    
  
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Dignissimos voluptatibus quaerat ipsa voluptatum vero suscipit natus asperiores labore. Dolorum totam architecto excepturi dicta quam illo
            rem earum repellendus mollitia quisquam.
          </p>
          <div class="rating">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>
          </div>
        </div>
        
      
      </div>     
      <div class="swiper-pagination"></div>
    </div>
  </div>

 <!--reach us-->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded"  height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.86053520977!2d75.79055784999998!3d26.885210750000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1715188674127!5m2!1sen!2sin" loading="lazy"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
       <div class="bg-white p-4 rounded mb-4">
            <h5>Call us</h5>
            <a href="tel:+917734568922" class="d-inline-block mb-2 text-decoration-none text-dark">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
              </svg>+917734568922
            </a>
            <br>
            <a href="tel:+917734568922" class="d-inline-block text-decoration-none text-dark">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
              </svg>+917734568922
            </a>
       </div>

        <div class="bg-white p-4 rounded mb-4">
        <h5>Follow us</h5>
        <a href="#" class="d-inline-block mb-3 ">
          <span class="badge bg-light text-dark fs-6 p-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
              <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
            </svg> Twitter
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block mb-3 ">
          <span class="badge bg-light text-dark fs-6 p-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
            </svg> Instagram
          </span>
        </a>
        <br>
        
        <a href="#" class="d-inline-block ">
          <span class="badge bg-light text-dark fs-6 p-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
            </svg>  Facebook
          </span>
        </a>
        


      </div>  
    </div>
  </div>
 
  <?php require('inc/footer.php');?>
  

 
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper1 = new Swiper(".swiper-container", {
    spaceBetween: 30,
    effect: "fade",
    loop: true,
    autoplay: {},
  });

  var swiper2 = new Swiper(".Swiper-testimonials", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
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
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 3,
      },
    },
  });
  </script>

 
</div>




</body>
</html>
