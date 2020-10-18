<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/normalized.css">
    <link rel="stylesheet" href="../css/resturant.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom sticky-top"> 
       <div class="container-fluid">
          <a class="navbar-brand" href="../html/mark3.html">Food junction</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="../php/logout.php"> Log out </a> </li>
                </ul>
            </div>
       </div>
    </nav>
   <div class="container-fluid banner">
     <h1 class="display1 text-center">Resturants in Darbhanga</h1>
   
       <div class="container-fluid ">
           <h3 class="display3">  Now Food hub in your cities.</h3>
          <div class="dropdown">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
              Select your cities.
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item active" href="#">Darbhanga</a>
              <a class="dropdown-item" href="#">Patna</a>
              <a class="dropdown-item" href="#">Muzzafarpur</a>
            </div>
           </div>
        </div>
    </div>

        <div class="container-fluid res-interface">
            <div class="row text-center">
                <div class="col-md-4 col-sm-4 col-xs-12 box" style="border: 1px solid rgb(170, 166, 166);">
                <a href="../php/dominosin.php">
                  <img src="../image/domios.jpg" class="rounded float-left custom-img img-thumbnail">
                  <h2 class="display2 text-dark">Dominos</h2>
                  <p class="font-weight-light text-muted">Fast food, Pizza</p>
            
                  <ul class="nav text-dark justify-content-center" >
                    <li class="nav-items"><P>-Rs150 per person</P></li>
                    <li class="nav-items"> <P>-upto 30 min</P</li>
                    <li class="nav-items"> <P>-Accept Cash & Online payment</P</li>
                  </ul>
          
                  <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                  </div>
              </a>
            </div>
          
                <div class="col-md-4 col-sm-4 col-xs-12 box" style="border: 1px solid rgb(170, 166, 166);">
                    <a href="../html/bawarchi.html">
                      <img src="../image/bawarchi.jpg" class="rounded float-left custom-img img-thumbnail">
                      <h2 class="display2 text-dark">Bawarchi Resturant</h2>
                      <p class="font-weight-light text-muted">North indian,Briyani,Fast food</p>
                
                      <ul class="nav text-dark justify-content-center" >
                        <li class="nav-items"><P>-Rs100 per person</P></li>
                        <li class="nav-items"> <P>-upto 30 min</P</li>
                        <li class="nav-items"> <P>-Accept Cash & Online payment</P</li>
                      </ul>
              
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star "></span>
                      </div>
                  </a>
                </div>
          
                    <div class="col-md-4 col-sm-4 col-xs-12 box" style="border: 1px solid rgb(170, 166, 166);">
                        <a href="../html/snackoh.html">
                          <img src="../image/snack.jpg" class="rounded float-left custom-img img-thumbnail">
                          <h2 class="display2 text-dark">Snack'Oh</h2>
                          <p class="font-weight-light text-muted">Snack,Fast food,Noodles</p>
                    
                          <ul class="nav text-dark justify-content-center" >
                            <li class="nav-items"><P>-Rs150 per person</P></li>
                            <li class="nav-items"> <P>-upto 30 min</P</li>
                            <li class="nav-items"> <P>-Accept Cash & Online payment</P</li>
                          </ul>
                  
                          <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                          </div>
                      </a>
                    </div>
                </div>

              <div class="container-fluid ads">
                <h2 class="display2 text-center">Your Ads here</h2>
              </div>

            <div class="row text-center">
                <div class="col-md-4 col-sm-4 col-xs-12 box" style="border: 1px solid rgb(170, 166, 166);">
                <a href="../html/dominos.html">
                  <img src="../image/Desitadka.jpg" class="rounded float-left custom-img img-thumbnail">
                  <h2 class="display2 text-dark">Desi tadka</h2>
                  <p class="font-weight-light text-muted">veg & Non-veg dishes,family resturant</p>
            
                  <ul class="nav text-dark justify-content-center" >
                    <li class="nav-items"><P>-Rs150 per person</P></li>
                    <li class="nav-items"> <P>-upto 30 min</P</li>
                    <li class="nav-items"> <P>-Accept Cash & Online payment</P</li>
                  </ul>
          
                  <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                  </div>
              </a>
                </div>
          
                <div class="col-md-4 col-sm-4 col-xs-12 box" style="border: 1px solid rgb(170, 166, 166);">
                    <a href="../html/bawarchi.html">
                      <img src="../image/cafe18.jpg" class="rounded float-left custom-img img-thumbnail">
                      <h2 class="display2 text-dark">Cafe 18</h2>
                      <p class="font-weight-light text-muted">Drinks & shake,fast food</p>
                
                      <ul class="nav text-dark justify-content-center" >
                        <li class="nav-items"><P>-Rs100 per person</P></li>
                        <li class="nav-items"> <P>-upto 30 min</P</li>
                        <li class="nav-items"> <P>-Accept Cash & Online payment</P</li>
                      </ul>
              
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star "></span>
                      </div>
                  </a>
                    </div>
          
                    <div class="col-md-4 col-sm-4 col-xs-12 box" style="border: 1px solid rgb(170, 166, 166);">
                        <a href="../html/snackoh.html">
                          <img src="../image/radhe.jpg" class="rounded float-left custom-img img-thumbnail">
                          <h2 class="display2 text-dark">Radhe Radhe</h2>
                          <p class="font-weight-light text-muted">Veg dishes,Paneer varities,Family resturant</p>
                    
                          <ul class="nav text-dark justify-content-center" >
                            <li class="nav-items"><P>-Rs150 per person</P></li>
                            <li class="nav-items"> <P>-upto 30 min</P</li>
                            <li class="nav-items"> <P>-Accept Cash & Online payment</P</li>
                          </ul>
                  
                          <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked "></span>
                            <span class="fa fa-star "></span>
                          </div>
                      </a>
                   </div>
               </div>
              
               <div class="container-fluid ads">
                <h2 class="display2 text-center ">Your Ads here</h2>
              </div>

            <div class="row text-center">
                <div class="col-md-4 col-sm-4 col-xs-12 box" style="border: 1px solid rgb(170, 166, 166);">
                <a href="dominos.html">
                  <img src="../image/swadsagar.jpg" class="rounded float-left custom-img img-thumbnail">
                  <h2 class="display2 text-dark">Swad sagar</h2>
                  <p class="font-weight-light text-muted">Chinese,fast food,Noodles</p>
            
                  <ul class="nav text-dark justify-content-center" >
                    <li class="nav-items"><P>-Rs150 per person</P></li>
                    <li class="nav-items"> <P>-upto 30 min</P</li>
                    <li class="nav-items"> <P>-Accept Cash & Online payment</P</li>
                  </ul>
          
                  <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                  </div>
              </a>
                </div>
          
                <div class="col-md-4 col-sm-4 col-xs-12 box" style="border: 1px solid rgb(170, 166, 166);">
                    <a href="bawarchi.html">
                      <img src="../image/navrang.jpg" class="rounded float-left custom-img img-thumbnail">
                      <h2 class="display2 text-dark">Navrang Bakery </h2>
                      <p class="font-weight-light text-muted">Bakery, Cakes, Cookies,pastries</p>
                
                      <ul class="nav text-dark justify-content-center" >
                        <li class="nav-items"><P>-Rs100 per person</P></li>
                        <li class="nav-items"> <P>-upto 30 min</P</li>
                        <li class="nav-items"> <P>-Accept Cash & Online payment</P</li>
                      </ul>
              
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked "></span>
                        <span class="fa fa-star checked "></span>
                      </div>
                  </a>
                    </div>
          
                    <div class="col-md-4 col-sm-4 col-xs-12 box" style="border: 1px solid rgb(170, 166, 166);">
                        <a href="snackoh.html">
                          <img src="../image/anandbakery.jpg" class="rounded float-left custom-img img-thumbnail">
                          <h2 class="display2 text-dark">Anand Bakers</h2>
                          <p class="font-weight-light text-muted">Bakery,cake,cookies,snack</p>
                    
                          <ul class="nav text-dark justify-content-center" >
                            <li class="nav-items"><P>-Rs50 per person</P></li>
                            <li class="nav-items"> <P>-upto 30 min</P</li>
                            <li class="nav-items"> <P>-Accept Cash & Online payment</P</li>
                          </ul>
                  
                          <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                          </div>
                      </a>
                    </div>
                  </div>
            
                  <div class="container-fluid ads">
                    <h2 class="display2 text-center">Your Ads here</h2>
                  </div>

            <div class="row text-center">
                <div class="col-md-4 col-sm-4 col-xs-12 box" style="border: 1px solid rgb(170, 166, 166);">
                <a href="dominos.html">
                  <img src="../image/7th.jpg" class="rounded float-left custom-img img-thumbnail">
                  <h2 class="display2 text-dark">7th Heaven</h2>
                  <p class="font-weight-light text-muted">Cake,Cookies,pastries,snack</p>
            
                  <ul class="nav text-dark justify-content-center" >
                    <li class="nav-items"><P>-Rs100 per person</P></li>
                    <li class="nav-items"> <P>-upto 30 min</P</li>
                    <li class="nav-items"> <P>-Accept Cash & Online payment</P</li>
                  </ul>
          
                  <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                  </div>
              </a>
                </div>
          
                <div class="col-md-4 col-sm-4 col-xs-12 box" style="border: 1px solid rgb(170, 166, 166);">
                    <a href="bawarchi.html">
                      <img src="../image/mr-idli.jpg" class="rounded float-left custom-img img-thumbnail">
                      <h2 class="display2 text-dark">Mr Idli</h2>
                      <p class="font-weight-light text-muted">North indian,Briyani,Idli dhosa</p>
                
                      <ul class="nav text-dark justify-content-center" >
                        <li class="nav-items"><P>-Rs150 per person</P></li>
                        <li class="nav-items"> <P>-upto 30 min</P</li>
                        <li class="nav-items"> <P>-Accept Cash & Online payment</P</li>
                      </ul>
              
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star "></span>
                      </div>
                  </a>
                    </div>
          
                    <div class="col-md-4 col-sm-4 col-xs-12 box" style="border: 1px solid rgb(170, 166, 166);">
                        <a href="roti-soti.jpg">
                          <img src="../image/snack.jpg" class="rounded float-left custom-img img-thumbnail">
                          <h2 class="display2 text-dark">Roti Soti</h2>
                          <p class="font-weight-light text-muted">Chicken,Briyani,veg course</p>
                    
                          <ul class="nav text-dark justify-content-center" >
                            <li class="nav-items"><P>-Rs180 per person</P></li>
                            <li class="nav-items"> <P>-upto 30 min</P</li>
                            <li class="nav-items"> <P>-Accept Cash & Online payment</P</li>
                          </ul>
                  
                          <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                          </div>
                      </a>
                     </div>
                </div>
</div>

</body>
</html>