<!DOCTYPE html>
<html>

<head>
    <title>Sign Up | Sea Side South Park</title>
    <link rel="shortcut icon" href="sssp.jpg" />
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">">
    <script language="javascript" type="text/javascript">
        function validateform()
        {
            if(document.SignIn.SIpassword.value.length==0)
            {
                alert("Please Enter Your Password");
                return;	
            }

            if(document.SignIn.SIemail.value.length==0)
            {
                alert("Missing Enter Your Email");
                return;		
            }           
        }
        function  validateform2()
        {
            if(document.CreateAccount.SUpassword.value.length==0)
            {
                alert("Please Enter Your Password");
                return;	
            }

            if(document.CreateAccount.SUemail.value.length==0)
            {
                alert("Please Enter Your Email");
                return;		
            }
            if(document.CreateAccount.SUname.value.length==0)
            {
                alert("Please Enter Your Name");
                return;		
            }
        } 
        function validateEmail1()  
        {  
            var x=document.SignIn.SIemail.value;  
            var atposition=x.indexOf("@");  
            var dotposition=x.lastIndexOf(".");  
            if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)
            {  
                alert("Please enter a valid e-mail address \n atposition:"+atposition+"\n dotposition:"+dotposition);  
                return false;  
            }  
        } 
        function validateEmail2()  
        {  
            var x=document.CreateAccount.SUemail.value;  
            var atposition=x.indexOf("@");  
            var dotposition=x.lastIndexOf(".");  
            if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)
            {  
                alert("Please enter a valid e-mail address \n atposition:"+atposition+"\n dotposition:"+dotposition);  
                return false;  
            }  
        } 
    </script>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">

            <form name="CreateAccount" action="signup.php" method="POST" onsubmit="return validateEmail2();">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <button onclick="validateform2();" >SignUp</button>
                
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form name="SignIn" action="process.php" method="POST" onsubmit="return validateEmail1();">
                <h1>Sign In</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
                </div>
                <span>or use your account</span>
                <input type="text" name="lemail" placeholder="Email">
                <input type="password" name="lpassword" placeholder="Password">
                <a href="#">Forgot Your Password?</a>

                <button onclick="validateform();">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, there!</h1>
                    <p>Don't have an Account?</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });
        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>


</body>

</html>
