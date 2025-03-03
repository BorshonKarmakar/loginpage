<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="e-commerce website.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="website icon" type="png" href="my logo_.png">
    <script src="js/bootstrap.bundle.min.js"></script>
    

</head>
<body>
<div class="all-item">
    <nav class="navbar navbar-expand-lg first-item first-nav">
        <div class="container-fluid">
            <img src="MY logo_.png" class="navbar-brand" style="width: 200px; height: 100px; " alt="">
            <h3 class="text">Brand <span>Name</span></h3>
            <button class="navbar-toggler" data-bs-target="#nav" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse item" id="nav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link ">Home</a></li>
                    <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggler" data-bs-toggle="dropdown">Contact With Us</a>
                    <ul class="dropdown-menu contact">
                        <li><a href="https://www.facebook.com/borshonbk.3" target="_blank" class="text-dark">Facebook</a></li>
                        <li><a href="https://www.instagram.com/borshonkarmakar/" target="_blank" class="text-dark">Instagram</a></li>
                        <li><a href="https://t.me/borshon2004" target="_blank" class="text-dark">Telegram</a></li>
                    </ul>
                    </li>
                    
                    <li class="nav-item ">
                        <div class="form-floating d-flex ">
                            <input type="text" class="form-control search" placeholder="Search Here">
                            <label for="">Search</label>
                            <button class="btn btn-outline-info">Search</button>
                        </div>
                    </li>
                    <li class="nav-item"><p class="nav-link text-white"><?php echo $_SESSION['userlogin']; ?></p><li>
                    <li class="nav-item"><button class="login"><a href="firstpage.html" name="logout" class="nav-link " id="log">Logout</a></button>
                    
                    </li>
                </ul>
            </div>
        </div>
       </nav>
       <table class="container table text-center table-hover table-bordered mt-2 timetable" style="width: 50%;">
        <thead>
            <tr class="table-primary">
                <th class="table-item">Date</th>
                <th class="table-item">Day</th>
                <th class="table-item">Time</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-secondary">
                <td class="table-item" id="date"></td>
                <td class="table-item" id="day"></td>
                <td class="table-item" id="time"></td>
            </tr>
        </tbody>
       </table>
       <div class="container">
        <div class="carousel slide carousel-all" id="borshon" data-bs-ride="carousel">
            
            <div class="carousel-indicators">
                <button class="active bg-info" data-bs-target="#borshon" data-bs-slide-to="0"></button>
                <button  class="bg-info" data-bs-target="#borshon" data-bs-slide-to="1"></button>
                <button  class="bg-info" data-bs-target="#borshon" data-bs-slide-to="2"></button>
                <button  class="bg-info" data-bs-target="#borshon" data-bs-slide-to="3"></button>
                <button class="bg-info" data-bs-target="#borshon" data-bs-slide-to="4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="discount-sale-banner-or-label-for-business-promotion-50-percent-off-FBW7JN.jpg" class="d-block w-100 picture" alt="">
                </div>
                <div class="carousel-item">
                    <img src="Design-sans-titre-1024x1024.png" class="d-block w-100 picture" alt="">
                </div>
                <div class="carousel-item">
                  <img src="3ce709113389695.60269c221352f.jpg" class="d-block w-100 picture" alt="">
              </div>
              <div class="carousel-item">
                  <img src="cash-on-delivery-banner-3.jpg" class="d-block w-100 picture" alt="">
              </div>
              <div class="carousel-item">
                <img src="902021f0-da7f-4565-a8db-8294bad51be8_BD-1976-688.jpg_2200x2200q80.jpg" class="d-block w-100 picture" alt="">
              </div>
            </div>
            <button class="carousel-control-prev" data-bs-target="#borshon" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-info"></span>
            </button>
            <button class="carousel-control-next" data-bs-target="#borshon" data-bs-slide="next">
              <span class="carousel-control-next-icon bg-info"></span>
          </button>
        </div>
    </div>
<div class="container row  card-container">
    <div class="card col-md-3" style="width: 18rem;">
       <img src="airbud.jpg" class="card-img-top" alt="">
       <div class="card-body">
        <div class="card-title">
            <h3>Xiaomi T9 Airbuds</h3>
            <p>positive feedback</p>
            <h4 style="color: blue;">৳2299</h4>
        </div>
        <div class="card-text">
            <del>৳3000</del>
            <span>-21%</span><br>
            <button class="btn btn-outline-primary card-button" ><a href="https://www.daraz.com.bd/#hp-flash-sale" style="text-decoration: none; color: black;" target="_blank" class="stretched-link">Buy Now</a></button>
        </div>
       </div>
    </div> 
    <div class="card col-md-3" style="width: 18rem;">
        <img src="noodles.jpg" class="card-img-top" alt="">
        <div class="card-body">
         <div class="card-title">
             <h3>Dekko Noodles</h3>
             <h4 style="color: blue;">৳35</h4>
         </div>
         <div class="card-text">
             <del>৳50</del>
             <span>-7.5%</span><br>
             <button class="btn btn-outline-primary card-button" ><a href="https://www.daraz.com.bd/#hp-flash-sale" style="text-decoration: none; color: black;" target="_blank"class="stretched-link">Buy Now</a></button>
         </div>
        </div>
     </div>
     <div class="card col-md-3" style="width: 18rem;">
        <img src="./Oil.jpg" class="card-img-top" alt="">
        <div class="card-body">
         <div class="card-title">
             <h3>Parachute Coconut Oil</h3>
             <h4 style="color: blue;">৳160</h4>
         </div>
         <div class="card-text">
             <del>৳200</del>
             <span>-20%</span><br>
             <button class="btn btn-outline-primary card-button" ><a href="https://www.daraz.com.bd/#hp-flash-sale" style="text-decoration: none; color: black;" target="_blank" class="stretched-link">Buy Now</a></button>
         </div>
        </div>
     </div>
        <div class="card col-md-3" style="width: 18rem;">
        <img src="Pant.jpg" class="card-img-top" alt="">
        <div class="card-body">
         <div class="card-title">
             <h3>Premium Jins Pant</h3>
             <h4 style="color: blue;">৳2400</h4>
         </div>
         <div class="card-text">
             <del>৳2800</del>
             <span>-15%</span><br>
             <button class="btn btn-outline-primary card-button" ><a href="https://www.daraz.com.bd/#hp-flash-sale" style="text-decoration: none; color: black;" target="_blank" class="stretched-link">Buy Now</a></button>
         </div>
        </div>
     </div>
     
    </div>
    <div class="container row  card-container">
        <div class="card col-md-3" style="width: 18rem;" style="position: relative;">
            <marquee behavior="" direction="" class="stock">Stock Limited</marquee>
           <img src="Perfume.jpg" class="card-img-top" alt="">
           <div class="card-body">
            <div class="card-title">
                <h3>Premium Perfume For men</h3>
                <h4 style="color: blue;">৳600</h4>
            </div>
            <div class="card-text">
                <del>৳800</del>
                <span>-21%</span><br>
                <button class="btn btn-outline-primary card-button" ><a href="https://www.daraz.com.bd/#hp-flash-sale" style="text-decoration: none; color: black;" target="_blank" class="stretched-link">Buy Now</a></button>
            </div>
           </div>
        </div> 
        <div class="card col-md-3" style="width: 18rem;">
            <img src="Shirt.jpg" class="card-img-top" alt="">
            <div class="card-body">
             <div class="card-title">
                 <h3>Shirt For Men</h3>
                 <h4 style="color: blue;">৳1299</h4>
             </div>
             <div class="card-text">
                 <del>৳1599</del>
                 <span>-15%</span><br>
                 <button class="btn btn-outline-primary card-button" ><a href="https://www.daraz.com.bd/#hp-flash-sale" style="text-decoration: none; color: black;" target="_blank"class="stretched-link">Buy Now</a></button>
             </div>
            </div>
         </div>
         <div class="card col-md-3" style="width: 18rem;">
            <img src="Tecno.jpg" class="card-img-top" alt="">
            <div class="card-body">
             <div class="card-title">
                 <h3>Tecno Spark Go</h3>
                 <h4 style="color: blue;">৳22999</h4>
             </div>
             <div class="card-text">
                 <del>৳30000</del>
                 <span>-21%</span><br>
                 <button class="btn btn-outline-primary card-button" ><a href="https://www.daraz.com.bd/#hp-flash-sale" style="text-decoration: none; color: black;" target="_blank" class="stretched-link">Buy Now</a></button>
             </div>
            </div>
         </div>
            <div class="card col-md-3" style="width: 18rem;">
            <img src="watch.jpg" class="card-img-top" alt="">
            <div class="card-body">
             <div class="card-title">
                 <h3>Rolex Brand Watch</h3>
                 <h4 style="color: blue;">৳2299</h4>
             </div>
             <div class="card-text">
                 <del>৳3000</del>
                 <span>-21%</span><br>
                 <button class="btn btn-outline-primary card-button" ><a href="https://www.daraz.com.bd/#hp-flash-sale" style="text-decoration: none; color: black;" target="_blank" class="stretched-link">Buy Now</a></button>
             </div>
            </div>
         </div>
         
        </div>
</div>
<div class="container containerr">
    <div class="loginpage">
        <h1 style="color: blueviolet; font-family: cursive;">Brand <span style="color: yellowgreen;">Name</span></h1>
        <form action="" >
            
            <div class="form-floating floating">
                <input type="text" class="form-control" placeholder="Enter your mail here." required>
                <label for="">Enter your E-mail here.</label>
               
            </div>
            <div class="form-floating floating">
                <input type="text" class="form-control" placeholder="Username"  id="username" required>
                <label for="" >Username</label>
            </div>
            <div class="form-floating floating">
                <input type="password" class="form-control" placeholder="Password" required>
                <label for="">Password</label>
            </div>
            <button  type="submit" style="margin-top: 20px; width: 200px; height: 50px; border-radius: 40px;" onclick="CLEAR();">Log In</button>
            <p style="color: red;" id="p"></p>
            
   
        </form>
    </div>
</div>

    

<script src="ecommerce.js"></script>
</body>
</html>
