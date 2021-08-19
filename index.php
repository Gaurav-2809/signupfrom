<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP FORM</title>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section>
        <div class="col-sm-12">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="top">
                    SIGNUP FORM
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="col-sm-12"></div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form>
                <div class="form2" id="formm2">
                    <label for="fname">First Name:</label><br>
                    <input type="text" placeholder="Enter your first name" class="form-control" name="fname"
                        id="fname"><br>
                    <label for="lname">Last Name:</label><br>
                    <input type="text" class="form-control" placeholder="Enter your last name" name="lname"
                        id="lname"><br>
                    <label for="email">Email:</label><br>
                    <input type="email" class="form-control" placeholder="Enter your Email" name="email" id="email"><br>
                    <label for="phone">Phone:</label><br>
                    <input type="phone" class="form-control" placeholder="Enter your Phone" name="Phone" id="phone"><br>
                    <label for="gender">Gender:</label><br>
                    <select name="gender" id="gender" class="form-control">
                        <option value="Choose Gender">Choose Gender</option>
                        <option value="MALE">MALE</option>
                        <option value="FEMLALE">FEMALE</option>
                        <option value="TRANSGENDER">TRANSGENDER</option>
                      </select><br>
                    <label for="password">Password:</label><br>
                    <input type="password" class="form-control" placeholder="Choose Password" name="pass" id="pass"><br>
                    <label for="cpass">Confirm Password:</label><br>
                    <input type="password" class="form-control" placeholder="Enter Password" name="cpass"
                        id="cpass"><br>
                    <div class="button2">
                        <button class="btn5" onclick="sendsignup();">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </section>
</body>
<script type="text/javascript">
    function sendsignup()
    {
       var fname = document.getElementById('fname').value;
       var lname = document.getElementById('lname').value;
       var email = document.getElementById('email').value;
       var phone = document.getElementById('phone').value;
       var gender = document.getElementById('gender').value;
       var pass = document.getElementById('pass').value;
       var cpass = document.getElementById('cpass').value;
       var token = "<?php echo password_hash("signuptoken", PASSWORD_DEFAULT);?>"
       if(fname!="" && lname!="" && email!="" && phone!="" && gender!="" && pass!="" && cpass!="")
       {
           if(pass==cpass){
        $.ajax(
                   {
                       type: 'POST',
                       url:"ajax/signup.php",
                       data:{fname:fname,lname:lname,email:email,phone:phone,gender:gender,pass:pass,cpass:cpass,token:token},
                       success:function(data)
                       {
                         alert(data)
                       }
                    }
               );
            }
            else{
                alert('something went wrong')
            }
       } 
       else
       {
           alert('please fill all details');
       }
    }
   </script>
   <script type=text/javascript>
    $('form').submit(function(e){
        e.preventDefault();
    });
   </script>
</html>