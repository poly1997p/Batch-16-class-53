
<?php
include 'config.php';
?>

<?php
if(isset($_POST['submit'])){

  $full_name = $_POST['full_name'];
  $phone_number = $_POST['phone_number'];
  $address = $_POST['address'];
  $area = $_POST['area'];
  

  $query = "INSERT INTO orders (full_name, phone_number, address, area) VALUES('$full_name', '$phone_number', '$address', '$area')";
  $insertData = mysqli_query($connection, $query);

  if($insertData == true){
     header('location:index.php');
     exit;
  }
  else{
    echo 'failed to insert data';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
   
</head>

<body>
    <!-- ===header-section=== -->
    <header class="header-section">
        <img src="image/coffee-drinks3.jpg" class="img-responsive">
        <div class="hero-contant">
            <h2 class="ms-4">
                Keep your dreams <br>
                aroused with a cup<br>
                of coffee.</h2>
            <p class="ms-4">The coffee ideas shared by these generators are not<br> cool at all,as they are not human
                being.</p>
            <a href="#checkout" class="btn-custom ms-4">Buy Now</a>
        </div>
    </header>
    <!-- ===header-end=== -->
     <!-- ===product-list=== -->
    <!-- ====product-description==== -->
    <section class="features-section">
        <div class="container">
            <h2>Why Choose Our Coffee?</h2>
            <div class="hr-custom mb-4">
                <hr class="border-warning">
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="image/monson.jpg">
                        <h5><strong>Quality</strong><br>What makes a great cup of coffee? Quality, care, and preparation
                            of coffee beans!<br>
                            All of our coffee beans are locally supplied and freshly roasted on site by our supplier.
                        </h5>
                        <p>Indian Monsoon Malabar Coffee.</p>
                    </div>


                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="image/brown-java.webp">
                        <h5><strong>Aroma</strong><br>The aroma of coffee can evoke feelings of comfort, warmth, and relaxation. Roasting coffee releases hundreds of substances that stimulate the sense of smell.
                        </h5>
                        <p>Old Brown Java Coffee.</p>
                    </div>


                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="image/rum.jpg">
                        <h5><strong>Health benefits</strong><br>
                            Coffee contains caffeine, which can help improve memory, cognitive function, and alertness. It also contains antioxidants and other active substances.
                        </h5>
                        <p>Rum Baba (Flavoured Coffee).</p>
                    </div>


                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="image/iris.jpg">
                        <h5><strong>Roast</strong><br>The roast of a coffee refers to the temperature and length of time the beans are roasted. Light roasts tend to be more acidic and complex.
                        </h5>
                        <p>Irish Cream (Flavoured Coffee).</p>
                    </div>


                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="image/strawberry.webp">
                        <h5><strong>Flavor</strong><br>The flavor of coffee is often the main reason people choose it. Speciality coffees are often made from single-origin Arabica beans. 
                        </h5>
                        <p>Strawberry & Cream (Flavoured Coffee) .</p>
                    </div>


                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="image/blue1.jpg">
                        <h5><strong>Type of Bean</strong><br>Arabica beans are generally considered to be superior to Robusta beans in terms of taste. Arabica beans are often picked by hand. 
                        </h5>
                        <p>Blue Mountain Coffee.</p>
                    </div>


                </div>

            </div>

        </div>

    </section>
    <!-- =====click====start -->
    <section class="container mb-5">
        <div class="row container">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 ">
                <div class="container">
                <img src="image/thow-coffee.jpg " class="ig-responsive" style="width: 95%; height:400px; display: block;">
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <div class="content-click">
                    <div>
                        <h4><strong>Happiness</strong><br>at the click of a button</h4>
                    </div>
                    <div>
                        <p style="color: rgb(102, 20, 20);">
                            we realise that it's not always possible to drop <br> in when you want some coffee,so we've
                            introduced a<br> home delivery service offer-ing our entire menu.
                            
                        </p>
                        <a href="cash_delivery.php" class="btn-delivery">cash on Delivery</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- ====click===end -->
    <!-- ===product-description-end==== -->
    <!-- ===customer-review=== -->
    <section class="review-section">
        <div class="container">
            <h2>Our Customer Says About Us</h2>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="review-custom">
                        <img src="image/img1.jpg" >
                        <div class="text-danger star">
                            ★★★★★
                          </div>
                        <p><u>Indian Monsoon Malabar</u>&nbsp;-I have always ordered this flavour from my previous
                            coffee supplier, it's just as good now from the love of coffee.</p>
                        <h5>Reviewer: <b>Rebecca</b> from <b>Hawhurst</b></h5>
                        
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="review-custom">
                        <img src="image/img2.jpg">
                        <div class="text-danger star">
                            ★★★★☆
                          </div>
                        <p><u>Old Brown Java</u>&nbsp;-I ordered this coffee for special occasions,
                            but we ended up having it almost every day. It is smooth and aromatic, going to order again!
                        </p>
                        <h5>Reviewer: <b>Natasha</b> from <b>London</b> </h5>
                       
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="review-custom">
                        <img src="image/jhon.jpg">&nbsp;
                        <div class="text-danger star">
                            ★★★★★
                          </div>
                        <p><u>Rum Baba (Flavoured Coffee)</u>&nbsp; - This coffee has a bit of sweetness without
                            compromising the taste. good for afternoon when you want something sweeter.</p>
                        <h5>Reviewer: <b>Jhon</b> from <b>Southend on Sea</b></h5>
                       
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="review-custom">
                        <img src="image/img3.jpg">
                        <div class="text-danger star">
                            ★★★★☆
                          </div>
                        <p><u>Irish Cream (Flavoured Coffee)</u>&nbsp;-Still really enjoying this coffee, definetely my
                            after dinner treat. As always excellent service.</p>

                        <h5>Reviewer: <b>Sandra</b> from <b>Essex</b></h5>
                        
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="review-custom">
                        <img src="image/img5.jpeg">&nbsp;
                        <div class="text-danger star">
                            ★★★★★
                          </div>
                        <p><u>Strawberry & Cream (Flavoured Coffee) </u>&nbsp; -  Love this coffee, with the perfect hint of strawberry & Cream, its a must. Great service as always.
                            .</p>
                        <h5>Reviewer: <b>Jayne</b> from <b>BFPO - Germany</b></h5>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====product-checkout-form==== -->



    <section class="checkout-section" id="checkout">
        <div class="container">
            <h2>Checkout</h2>
            <form action="" method="post" class="checkout-form">
                <div class="mb-3">
                    <label for="" class="form-label">Full Name*</label>
                    <input type="text" class="form-control custom-input" name="full_name" value="" id="" placeholder="Your full name*"
                        required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Phone Number*</label>
                    <input type="text" class="form-control custom-input" name="phone_number" value="" id="" placeholder="Your Phone Number*"
                        required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Full Address*</label>

                    <textarea class="form-control custom-input" name="address" id="" placeholder="Your Full Address"></textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Area*</label>
                    <select class="form-control custom-input" name="area" id="">
                        <option value="" selected disabled>Select area</option>
                        <option value="in-dhaka">Inside dhaka (80)</option>
                        <option value="out-dhaka">outside dhaka (120)</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-warning">confirm order</button>
            </form>
        </div>
    </section>
    <!-- =====footer-section==== -->
    <footer class="mt-5 footer-part">
        <div class="container">
            <div class="row  footer-content">
                <div class="col-12 col-sm-6 col-md-4">
                    <img src="image/coffee1.jpg">
                    <p style="color: aliceblue;">Serving premium coffee,crafted with care</p>
                </div>
                <div class="col-12 col-sm-6 col-md-4 contact">
                    <b>Phone:0xxxxxxxxxxx</b>
                    <b>Email:Support@espressocoffee.com</b>
                    <b>Customer support:Mon-Fri,9 AM to 6 PM</b>
                </div>
                <div class="col-12 col-sm-6 col-md-4 social-icons">
                    <b style="color: aliceblue;">Stay connected with us on social media</b><br>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </div>
               
               
                
            </div>
            <div class="container-fluid hrcls">
                <hr class=" my-2">
            </div>

            <div class="row copy">
                <div class="col-12 col-sm-6 col-md-4">
                    <p style="color: aliceblue;">&copy 2025 Espresso Coffee. All right reserved</p>
                </div>
                <div class="col-12 col-sm-6 col-md-4 develop-by">
                    <b style="color: aliceblue;">Design & Develop by <a href="https://www.facebook.com/hiddenglw?mibextid=LQQJ4d" target="_blank">Full stack blush</a></b>
                </div>
               <div class="col-12 col-sm-6 col-md-4">
                    <b style="color: aliceblue;">"We accept: Visa,MasterCard,PayPal,and more"<br>"Secure payment guaranteed"</b> 
               </div>
              
            </div>
            
        </div>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>