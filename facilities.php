

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Norway</title>
    <link rel="stylesheet" href="style.css">

  
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


    <?php require('inc/links.php');?>
    
    <body>
    
 
 
      <?php require('inc/header.php');?>

      <div class="my-5 px-4"> <!-- Added text-center class to center the text -->
      <h2 class="mt-12 pt-5 mb-4  h-font text-center">OUR FACILITIES</h2>
    </div>

 
  <?php require('inc/footer.php');?>

</body>
</html>
