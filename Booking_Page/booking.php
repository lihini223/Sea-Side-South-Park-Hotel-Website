<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking page</title>
    <link rel="stylesheet" href="booking.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>

<body>
    <header>
        <ul>
            <li><a class="active" href="../HomePage/index.html">HOME</a></li>
            <li><a href="../Accomodation/Accomodation.html">ACCOMMADATION</a></li>
            <li><a href="../gallery/gallery.html">GALLERY</a></li>
            <li><a href="../contactus/contactus.php">CONTACT US</a></li>
            <li><a href="../Booking_Page/booking.html">BOOK YOUR STAY</a></li>
          </ul>
    </header>
    <br>
    <section>
    <div class="container">
        <div class="contactus">
            <div>
                <h1>Been Here Before ?</h1>
                <input type="button" class="btn btn-info waves-effect" value="LOGIN | SIGN UP" id="book-btn" onclick="login();">
            </div>
              
        </div>
        <form action="booking_process.php" name="frm1" method = "POST">
            <div class="contactform" >
                <h2>BOOKING</h2>
                <div class="formBox">
                    <div class="inputBox w20">
                        <input type="text" name="firstname" id="fname" required>
                        <span>First Name</span>
                    </div> 
                    <div class="inputBox w20">
                        <input type="text" name="lastname" required>
                        <span>Last Name</span>
                    </div> 
                    <div class="inputBox w20">
                        <input type="email" name="email" required>
                        <span>Email Address</span>
                    </div>
                    <div class="inputBox w20">
                        <input type="text" name="phone" required>
                        <span>Mobile Number</span>
                    </div>  
                    <div class="inputBox w20">
                        <input type="date" name="checkin" required>
                        <span>Check In</span>
                    </div> 
                    <div class="inputBox w20">
                        <input type="date" name="checkout" required>
                        <span>Check Out</span>
                    </div>
                    <div class="inputBox w20">
                        <input type="number" name="Adults" required placeholder="">
                        <span>Number of Adults</span>
                    </div>
                    <div class="inputBox w20">
                        <input type="number" name="Children"  placeholder="" >
                        <span>Number of Childrens</span>
                    </div>
                    <div class="inputBox w20">
                        <input type="number" name="rooms" required placeholder="">
                        <span>Number of rooms</span>
                    </div>
                    <div class="inputBox w20" >Room Type
                        <select name="roomt">
                            <option>Family room</option>
                            <option>Deluxe room</option>
                            <option>Classic room</option>
                        </select>
                    </div>
                    <div class="inputBox w20">Meal Type
                        <select name="meal">
                            <option>Breakfast only</option>
                            <option>Half board</option>
                            <option>Full board</option>
                        </select>
                    </div>
                   
                     
                    <div class="inputBox w100">
                        <input type="submit" value="Send" >
                    </div> 
                </div>
            </div>
        </form>
       
    </div>
</section>

<div class="footer-bottom border-top" >
    <div class="container text-center">
        <div class="row" >
               <div class="col-md-12 footer-copyright text-light " id="f-bottom">
                &copy; Website Design & Developed By <a href="#">Pure Bloods</a>
            </div>
           </div>
    </div>
</div>
<script>
    function login(){
        location.href = "../Log in & Sign Up/login.php";
    }
</script>
</body>
</html>

