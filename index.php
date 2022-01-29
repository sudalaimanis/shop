

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="icon.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Shopping Portal</title>
</head>

<body>
    <!-- header section start -->
    <header id="header">
        <nav>
            <div class="logo">
                <a href="#"><img src="img/logo.png" style="width: 130px;" alt="" srcset=""><span></span></a>
            </div>

           
                <div class="container">
                    <h5 class="text-right">Points :</h5>
                <!-- <img class="img-fluid" src="img/coin.png" alt="" width="50" height="50">  -->
                </div>

             <div class="search-box">
                <div class="search-icon">
                    <span class="icon-search"></span>
                </div>
                     <input type="text" placeholder="Search...">
             </div>
            <div class="icon-links">
                <div id="customer-center"><span class="icon-phone-alt"></span>
            <a href="tel:6380091001"></a></div>
                
                <div id="login-or-signup"><span class="icon-user"></div>
            </div>
        </nav>
    </header>
    <!-- header section end -->





    <!-- featured products section start  -->
    <div class="featured-product" id="pricing">
        <div class="section-wrap">
            <div class="section-title">
                <h3 style="text-align:center; font-size:30px;">OUR PRODUCTS</h3>
            </div>

            <div class="featured-products">
                <div class="product-wrap apple">
                    <div class="product-img">
                        <img src="img/apple.jpg" alt="apple_img">
                    </div>
                    <div class="product-icons">
                        <div class="add-to-favorite"><span class="icon-heart"></span></div>
                        
                    </div>

                    <div class="product-description">
                        <p class="product-name">Fresh Apple</p>
                        <p class="price">Points-2</p>
                        <div class="add-to-cart-btn">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"><span class="icon-cart-plus"></span>Buy Now</button>
                         </div>
                         <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Manvaasam</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body">
                                <form name="regiss" method="post" action="regiss.php">
                                    <!-- we will create registration.php after registration.html -->
                                    NAME:<input type="text" name="Name" value=""class="form-control"></br>
                                    EMAIL-ID:<input type="text" name="Email" value=""class="form-control"></br>
                                    MOBILE:<input type="text" name="Mobile" value="" class="form-control"></br>
                                    ADDRESS:<input type="text" name="Address" value="" class="form-control"></br>
                                    <!-- RE-PASSWORD:<input type="text" name="repassword" value=""></br> -->
                                    <input type="submit" name="submit" value="submit" class="btn btn-success">
                                    </form>

                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>

                                </div>
                            </div>
                            </div>

                    </div>
                </div>
                

                <div class="product-wrap">
                    <div class="product-img">
                        <img src="img/orange.jpg" alt="orange_img">
                    </div>

                    <div class="product-icons">
                        <div class="add-to-favorite"><span class="icon-heart"></span></div>
                        
                    </div>

                    <div class="product-description">
                        <p class="product-name">Fresh Orange</p>
                        <p class="price">Points-2</p>
                        <div class="add-to-cart-btn">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"><span class="icon-cart-plus"></span>Buy Now</button>
                        </div>
                         <!-- The Modal -->
                         <div class="modal fade" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Manvaasam</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body">
                                <form name="regiss" method="post" action="regiss.php">
                                    <!-- we will create registration.php after registration.html -->
                                    NAME:<input type="text" name="Name" value=""class="form-control"></br>
                                    EMAIL-ID:<input type="text" name="Email" value=""class="form-control"></br>
                                    MOBILE:<input type="text" name="Mobile" value="" class="form-control"></br>
                                    ADDRESS:<input type="text" name="Address" value="" class="form-control"></br>
                                    <!-- RE-PASSWORD:<input type="text" name="repassword" value=""></br> -->
                                    <input type="submit" name="submit" value="submit" class="btn btn-success">
                                    </form>

                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>

                                </div>
                            </div>
                            </div>
                    </div>
                </div>

                <div class="product-wrap">
                    <div class="product-img">
                        <img src="img/cherry.jpg" alt="cherry_img">
                    </div>

                    <div class="product-icons">
                        <div class="add-to-favorite"><span class="icon-heart"></span></div>
                       
                    </div>

                    <div class="product-description">
                        <p class="product-name">Fresh Cherry</p>
                        <p class="price">Points-2</p>
                        <div class="add-to-cart-btn">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"><span class="icon-cart-plus"></span>Buy Now</button>
                        </div>
                         <!-- The Modal -->
                         <div class="modal fade" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Manvaasam</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body">
                                <form name="regiss" method="post" action="regiss.php">
                                    <!-- we will create registration.php after registration.html -->
                                    NAME:<input type="text" name="Name" value=""class="form-control"></br>
                                    EMAIL-ID:<input type="text" name="Email" value=""class="form-control"></br>
                                    MOBILE:<input type="text" name="Mobile" value="" class="form-control"></br>
                                    ADDRESS:<input type="text" name="Address" value="" class="form-control"></br>
                                    <!-- RE-PASSWORD:<input type="text" name="repassword" value=""></br> -->
                                    <input type="submit" name="submit" value="submit" class="btn btn-success">
                                    </form>

                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>

                                </div>
                            </div>
                            </div>
                    </div>
                </div>

                <div class="product-wrap">
                    <div class="product-img">
                        <img src="img/strawberry.jpg" alt="strawberry_img">
                    </div>

                    <div class="product-icons">
                        <div class="add-to-favorite"><span class="icon-heart"></span></div>
                        
                    </div>

                    <div class="product-description">
                        <p class="product-name">Fresh Strawberry</p>
                        <p class="price">Points-2</p>
                        <div class="add-to-cart-btn">
                            <p><span class="icon-cart-plus"></span> Buy Now</p>
                        </div>
                    </div>
                </div>

                <div class="product-wrap">
                    <div class="product-img">
                        <img src="img/grape.jpg" alt="grape_img">
                    </div>

                    <div class="product-icons">
                        <div class="add-to-favorite"><span class="icon-heart"></span></div>
                        
                    </div>

                    <div class="product-description">
                        <p class="product-name">Fresh Grapes</p>
                        <p class="price">Points-2</p>
                        <div class="add-to-cart-btn">
                            <p><span class="icon-cart-plus"></span>Buy Now</p>
                        </div>
                    </div>
                </div>

                <div class="product-wrap">
                    <div class="product-img">
                        <img src="img/grape_black.jpg" alt="grape_img">
                    </div>

                    <div class="product-icons">
                        <div class="add-to-favorite"><span class="icon-heart"></span></div>
                       
                    </div>

                    <div class="product-description">
                        <p class="product-name">Grapes Black</p>
                        <p class="price">Points-2</p>
                        <div class="add-to-cart-btn">
                            <p><span class="icon-cart-plus"></span> Buy Now</p>
                        </div>
                    </div>
                </div>

                <div class="product-wrap">
                    <div class="product-img">
                        <img src="img/watermellon.jpg" alt="watermellon_img">
                    </div>

                    <div class="product-icons">
                        <div class="add-to-favorite"><span class="icon-heart"></span></div>
                        
                    </div>

                    <div class="product-description">
                        <p class="product-name">Fresh Watermelon</p>
                        <p class="price">Points-2</p>
                        <div class="add-to-cart-btn">
                            <p><span class="icon-cart-plus"></span> Buy Now</p>
                        </div>
                    </div>
                </div>
                

                <div class="product-wrap">
                    <div class="product-img">
                        <img src="img/pineapple.jpg" alt="pinapple_img">
                    </div>

                    <div class="product-icons">
                        <div class="add-to-favorite"><span class="icon-heart"></span></div>
                        
                    </div>

                    <div class="product-description">
                        <p class="product-name">Fresh Pinapple</p>
                        <p class="price">Points-2</p>
                        <div class="add-to-cart-btn">
                            <p><span class="icon-cart-plus"></span> Buy Now</p>
                        </div>
                    </div>
                </div>

                <div class="product-wrap">
                    <div class="product-img">
                        <img src="img/coconut.jpg" alt="coconut_img">
                    </div>

                    <div class="product-icons">
                        <div class="add-to-favorite"><span class="icon-heart"></span></div>
                    
                    </div>

                    <div class="product-description">
                        <p class="product-name">Fresh Coconut</p>
                        <p class="price">Points-2</p>
                        <div class="add-to-cart-btn">
                            <p><span class="icon-cart-plus"></span> Buy Now</p>
                        </div>
                    </div>
                </div>

                

                <div class="product-wrap">
                    <div class="product-img">
                        <img src="img/papaya.jpg" alt="papaya_img">
                    </div>

                    <div class="product-icons">
                        <div class="add-to-favorite"><span class="icon-heart"></span></div>
                        
                    </div>

                    <div class="product-description">
                        <p class="product-name">Fresh Papaya</p>
                        <p class="price">Points-2</p>
                        <div class="add-to-cart-btn">
                            <p><span class="icon-cart-plus"></span> Buy Now</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- featured products section end  -->

     <!-- footer tab  -->

    

    

    <footer>
        <p>Created By Manvaasam Team</p>
    </footer>

    <script src="script.js"></script>

</body>

</html>


<!-- Creator info:
     -------------
     Md. Riazul Islam, Web Designer & Developer
     B.Sc In CSE, Sylhet Engineering College
     From Dhaka, Bangladesh
    --------------------------------------------->