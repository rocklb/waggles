<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../styles.css">
</head>
<body> 

    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="/imgs/logo3.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg bg-light">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a href="" class="nav-link">Admin</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">
                Manage Details
            </h3>
        </div>

        <!-- third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 align-items">
                <div>
                    <p class="text-light text-center">Current User</p>
                </div>

                <div class="button text-center">
                    <button><a href="index.php?insert_product" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1"></a>View Products</button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1"></a>View Categories</button>
                    <button><a href="" class="nav-link text-light bg-info my-1"></a>Orders</button>
                    <button><a href="" class="nav-link text-light bg-info my-1"></a>Payments</button>
                    <button><a href="" class="nav-link text-light bg-info my-1"></a>Logout</button>
                </div>
            </div>   
        </div>
</div>
<!-- fourth child -->
<div class="container my-5">
    <?php


   if(isset($_GET['insert_category'])){
       include('insert_categories.php');
   }

   if(isset($_GET['insert_product'])){
    include('insert_products.php');
}
    ?>
</div>

<!-- bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/15a9a0cae1.js" crossorigin="anonymous"></script>
</body>
</html>