<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include("head.php");
  ?>
</head>

<body>
  <?php
      include("header.php");
  ?>

  <main>
    <div class="service_cont">
      <div class="service_cont2">
        <h1>Services</h1>
      </div>
    </div>

    <div class="container p-5 service-card">
      <div>
        <div class="row p-2 mb-5 card1 shadow-lg">
          <div class="col-lg-6 text-center   col-xl-6  serv-img">
            <img class="rounded-1 shadow-lg" src="./images/service2.jpg" alt="" />
          </div>
          <div class="col-lg-6 text-center   col-xl-6  serv-disc">
            <h2>Contactless Delivery:</h2>
            <p>
              "Prioritizing your safety with contactless delivery. Enjoy peace
              of mind knowing your delicious meal is delivered with care and
              consideration for your well-being."
            </p>
          </div>
        </div>
        <div class="row p-2 mb-5 card1 shadow-lg">
          <div class="col-lg-6 text-center  col-xl-6 serv-disc">
            <h2>Lightning-Speed Delivery:</h2>
            <p>
              "Experience the thrill of lightning-fast delivery, where your favorite meals arrive at your doorstep in
              record time."
            </p>
          </div>
          <div class="col-lg-6 text-center   col-xl-6  serv-img">
            <img class="rounded-1 shadow-lg" src="./images/light_speed.jpg" alt="" />
          </div>
        </div>
      </div>
      <div>
        <div class="row p-2 mb-5 card1 shadow-lg">
          <div class="col-lg-6 text-center   col-xl-6  serv-img">
            <img class="rounded-1 shadow-lg" src="./images/Scheduled-Delivery-5.jpg" alt="" />
          </div>
          <div class="col-lg-6 text-center   col-xl-6  serv-disc">
            <h2>Scheduled Deliveries:</h2>
            <p>
              "Plan your meals effortlessly with our scheduled delivery option. Enjoy the convenience of having your
              favorite dishes arrive precisely when you want them."
            </p>
          </div>
        </div>
        <div class="row p-2 mb-5 card1 shadow-lg">
          <div class="col-lg-6 text-center   col-xl-6  serv-disc">
            <h2>Geo-Location Services:</h2>
            <p>
              "Experience the convenience of accurate delivery estimates with our geo-location services, ensuring your
              meal arrives right on time, every time."
            </p>
          </div>
          <div class="col-lg-6 text-center   col-xl-6  serv-img">
            <img class="rounded-1 shadow-lg" src="./images/geolocation-of-city.jpg" alt="" />
          </div>
        </div>
      </div>
      <div>
        <div class="row p-2 mb-5 card1 shadow-lg">
          <div class="col-lg-6 text-center   col-xl-6  serv-img">
            <img class="rounded-1 shadow-lg" src="./images/Scheduled-Delivery-5.jpg" alt="" />
          </div>
          <div class="col-lg-6 text-center   col-xl-6  serv-disc">
            <h2>Online Ordering Platform:</h2>
            <p>
              "Seamless and user-friendly online ordering – your favorite meals just a click away, ensuring a
              hassle-free and delightful experience." </p>
          </div>
        </div>
        <div class="row p-2 mb-5 card1 shadow-lg">
          <div class="col-lg-6 text-center   col-xl-6  serv-disc">
            <h2>Social Media Integration:</h2>
            <p>
              "Stay connected with us on social media for the latest updates, promotions, and a vibrant community of
              food lovers. Join the conversation and share the joy of great food."
            </p>
          </div>
          <div class="col-lg-6 text-center   col-xl-6  serv-img">
            <img class="rounded-1 shadow-lg" src="./images/geolocation-of-city.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="full-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3 itom">
          <img class="img-fluid" src="https://i.postimg.cc/Vs3yTqKx/foodii.png" alt="Foodii Logo" />
          <p>
            Foodii is a food delivery app
            <a href="#" class="text-decoration-none">Read more</a>
          </p>
          <div class="icon">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
            <a href="https://www.google.com/"><i class="fab fa-google-plus-square"></i></a>
            <a href="https://www.twitter.com/"><i class="fab fa-twitter-square"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="col-md-3 itom margi">
          <h3>Important Links</h3>
          <a href="#" class="text-decoration-none">Privacy Policy</a><br />
          <a href="#" class="text-decoration-none">Youtube Channel Link</a><br />
          <a href="#" class="text-decoration-none">Blog Articles</a><br />
          <a href="#" class="text-decoration-none">Social Media</a>
        </div>
        <div class="col-md-3 itom margi">
          <h3>Our Services</h3>
          <a href="#" class="text-decoration-none">Live Order Tracking</a><br />
          <a href="#" class="text-decoration-none">No Minimum Order</a><br />
          <a href="#" class="text-decoration-none">Lightning-Fast Delivery</a><br />
        </div>
        <div class="col-md-3 itom margi">
          <h3>Contact Us</h3>
          <a href="#" class="text-decoration-none"><i class="fa fa-phone"></i> +(91) 9090909090</a><br />
          <a href="mailto:abc@gmail.com" class="text-decoration-none"><i class="fa fa-envelope"></i>
            abc@gmail.com</a><br />
          <div class="embed-responsive embed-responsive-16by9" style="margin-top: 10px">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15278.981512248596!2d74.0652613!3d16.789338899999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1700934044198!5m2!1sen!2sin"
              width="100%" height="150" style="border: 0" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>