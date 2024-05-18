<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Norway</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
    <?php require('inc/header.php'); ?>
    
    <div class="my-5 px-4 text-center">
        <h2 class="mt-5 pt-5 mb-4 h-font">Our rooms</h2>
        <div class="h-line bg-dark"></div>
    </div>
  
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <a class="mt-2">FILTERS</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="filterDropdown">

                        <div class="border bg-light p-3 rounded mb-3">
                          <h5 class="mb-3">CHECK AVAILABILITY</h5>
                          


                        </div>
                            
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    
</body>
</html>
