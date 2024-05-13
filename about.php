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
        .pop:hover{
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>

    <?php require('inc/header.php');?>

</head>
<body>
    <div class="navbar">
        <!-- Your navigation bar content here -->
        <div class="menuToggle"></div>
        <div class="sidebar">
            <ul class="Menulist">
                <li class="logo active" style="--bg:#f80808;">
                    <a href="#">
                        <div class="icon"><ion-icon name="home-outline"></ion-icon></div>
                        <div class="text">Home</div>         
                    </a>           
                </li>

                <li class="logo" style="--bg:#e51111;">
                    <a href="#">
                        <div class="icon"><ion-icon name="person-circle-outline"></ion-icon></div>
                        <div class="text">About</div>         
                    </a>           
                </li>

                <li class="logo" style="--bg:#0e0af4;">
                    <a href="#">
                        <div class="icon"><ion-icon name="person-add-outline"></ion-icon></div>
                        <div class="text">Contact</div>         
                    </a>           
                </li>

                <li class="logo" style="--bg:#abff02;">
                    <a href="#">
                        <div class="icon"><ion-icon name="person-circle-outline"></ion-icon></div>
                        <div class="text">Profile</div>         
                    </a>           
                </li>

                <div class="bottom">
                    <li style="--bg:#333;">
                        <a href="#">
                            <div class="icon"></div>
                            <div class="imgBx"> 
                                <img src="profile.jpg" alt="Profile Picture">
                            </div>
                            <div class="text">Sarthak Sain</div>
                        </a>           
                    </li>
                </div>

                <li class="logo" style="--bg:#ec0bc3;">
                    <a href="#">
                        <div class="icon"><ion-icon name="log-in-outline"></ion-icon></div>
                        <div class="text">Login</div> 
                    </a>
                </li>
            </ul>
        </div>

        <!--script for toggle -->
        <script>
            let menuToggle = document.querySelector('.menuToggle');
            let sidebar = document.querySelector('.sidebar');
            menuToggle.onclick = function() {
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
        <!--script for toggle-->

    </div>

    
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
        <div class="col lg-3 col-md-6">

        </div>
    </div>
  </div>

 <?php require('inc/footer.php');?>

    

</body>
</html>
