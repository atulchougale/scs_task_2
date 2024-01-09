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
    <div class="pageheader_contact">
      <div class="pageheader__content">
        <h1>Contact Information</h1>
      </div>
    </div>
    <div class="container contact shadow-lg">
      <div class="follow-text">
        <h5>Get In Touch!</h5>
        <h1>Follow Us On Social Media</h1>
      </div>

      <div class="row">
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 information-itemss">
          <div class="info-item">
            <div class="info-icon">
              <i class="fa-solid fa-envelope i-icon" style="color: #ffffff"></i>
            </div>
            <div class="info-headingg text-center">
              <h4>Email Address</h4>
              <p>
                <i class="fa-solid fa-envelope"></i>foodiidilevry@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 information-itemss">
          <div class="info-item">
            <div class="info-icon">
              <i class="fa-solid fa-mobile i-icon text-center" style="color: #ffffff"></i>
            </div>
            <div class="info-headingg text-center">
              <h4>Phone Number</h4>
              <p><i class="fa-solid fa-phone"></i> +91 9090909090</p>
            </div>
          </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 information-itemss">
          <div class="info-item">
            <div class="info-icon">
              <i class="fab fa-facebook-square i-icon" style="color: #ffffff"></i>
            </div>
            <div class="info-headingg text-center">
              <h4>Facebook</h4>
              <p>
                <i class="fab fa-facebook-square"></i> Kolhapur , Mahabharata,41600.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 information-itemss">
          <div class="info-item">
            <div class="info-icon">
              <i class="fab fa-instagram i-icon" style="color: #ffffff"></i>
            </div>
            <div class="info-headingg text-center">
              <h4>Instagram</h4>
              <p><i class="fab fa-instagram"></i> @FoodiDilevry</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container m-3 choose1 text-center ">
      <h2>We are Here For You! </h2>
      <p class="heading-mgn">
        Have a question, suggestion, or craving? Reach out to us through the
        contact form below. Our team is ready to assist you with anything
        related to our delicious offerings, delivery services, or any special
        requests you may have. Your satisfaction is our priority, and we look
        forward to hearing from you!
      </p>
    </div>

    <div class="container contact_form">
      <div class="section__header text-center">
        <h2>Let's Chat Food!</h2>
        <p class="heading-mgn">
          Your feedback matters! Whether you have a query about our menu, need
          assistance with an order, or want to share your thoughts, our
          contact form is here for you. Reach out to us, and let's make your
          food delivery experience exceptional. We're just a message away from
          turning your cravings into a delightful reality!
        </p>
      </div>
      <div class="row contact_row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 contactform">
          <img src="./images/contac_us.jpg" alt="" class="contact_img" />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="contact-form1 shadow-lg">
            <form action="#" method="POST">
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Your Name*" name="name" id="name1" required />
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" placeholder="Your Email*" name="email" id="email"  required/>
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Phone Number*" name="phone" id="phone" required />
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Subject" name="subject" id="subject" required />
              </div>
              <div class="mb-3">
                <textarea class="form-control" rows="4" placeholder="Enter Your Message" name="message" id="message" required></textarea>
              </div>
              <div class="mb-3 text-center">
                <button type="submit" name="submit" class="btn" id="btn-bgclr">
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-5">
      <div class="googleMap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d49386.769434139154!2d74.04505067828408!3d16.789586961930805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTbCsDQ4JzAyLjQiTiA3NMKwMDQnMDIuOCJF!5e0!3m2!1sen!2sin!4v1701017988086!5m2!1sen!2sin" width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </main>



  <?php
  include("footer.php");
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  <?php
  include("dbconnect.php");

  if (isset($_POST['submit'])) {

    $name    = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO `contact`(`name`, `email`, `phone`,`subject`, `message` )
    VALUES('$name', '$email', '$phone', '$subject', '$message')";

$query = mysqli_query($conn, $sql);

if ($query) {
    echo  "<script>
    swal({
        title: 'Message send Successfully!',
        text: 'Your Feedback is Very Helpful for us!',
        icon: 'success',
        button: 'Ok, Done',
    }).then(function() {
        window.location.href = 'contact.php';
    });
  </script>";
    
} else {
    echo  "<script>
    swal({
        title: 'Message sending Failed!',
        text: 'Message sending failing is fail please try Again !',
        icon: 'error',
        button: 'Ok, Done',
    }).then(function() {
        window.location.href = 'contact.php';
    });
  </script>";
}

    
  }
?>


</body>

</html>