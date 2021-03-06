<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us page</title>
    <link rel="stylesheet" href="contact us.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>
<header>
    <ul>
        <li><a class="active" href="../HomePage/index.html">HOME</a></li>
        <li><a href="../Accomodation/Accomodation.html">ACCOMMADATION</a></li>
        <li><a href="../gallery/gallery.html">GALLERY</a></li>
        <li><a href="../contactus/contactus.php">CONTACT US</a></li>
        <li><a href="../Booking_Page/booking.html">BOOK YOUR STAY</a></li>
      </ul>
</header>
<body>
  
    <section>
    <div class="container">
        <div class="contactus">
            <div>
                <h2>Contact Us</h2>
                <ul class="info">
                    <li>
                        <span><img src="pin.png"></span>
                        <span>Address line1<br>
                            Address line2<br>
                            Address line3</span>
                    </li>
                    <li>
                        <span><img src="mail.png"></span>
                        <span>sea-side-south-park@gmail.com</span>
                    </li>
                  
                    <li>
                        <span><img src="phone.png"></span>
                         <span>0123456789</span>
                    </li>
                </ul>
            </div>
                <ul class="sci">
                    <li><a href="#"><img src="facebook.png"></a></li>
                    <li><a href="#"><img src="twitter.png"></a></li>
                    <li><a href="#"><img src="instagram-sketched.png"></a></li>
                    <li><a href="#"><img src="youtube.png"></a></li>
                </ul>
        </div>
        <form action="inquiry.php" name="frm1" method="POST">
            <div class="contactform" >
                <h2>Let us know what you think!</h2>
                <div class="formBox">
                    <div class="inputBox w50">
                        <input type="text" name="firstname" id="fname" required>
                        <span>First Name</span>
                    </div> 
                    <div class="inputBox w50">
                        <input type="text" name="lastname" required>
                        <span>Last Name</span>
                    </div> 
                    <div class="inputBox w50">
                        <input type="email" name="email" required>
                        <span>Email Address</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" name="phone" required>
                        <span>Mobile Number</span>
                    </div>  
                    <div class="inputBox w100">
                        <textarea name="message" required></textarea>
                        <span>write your message here... </span>
                    </div> 
                    <div class="inputBox w100">
                        <input type="submit" value="Send" onclick="validate();">
                    </div> 
                </div>
            </div>
        </form>
       
    </div>
</section>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.5786587725984!2d80.03599131409507!3d6.820988321527411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25276948fdbfb%3A0x89acd7dba1e9a83f!2sNSBM%20Green%20University%20Town%20Hostel%20Complex!5e0!3m2!1sen!2slk!4v1598179281499!5m2!1sen!2slk" width="1350" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<div class="footer-bottom border-top" >
    <div class="container text-center">
        <div class="row" >
               <div class="col-md-12 footer-copyright text-light " id="f-bottom">
                &copy; Website Design & Developed By <a href="#">Pure Bloods</a>
            </div>
           </div>
    </div>
</div>

</body>
</html>

