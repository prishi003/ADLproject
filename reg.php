
<?php session_start(); ?> 


<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Registration</title>
    <style>
      .container {
    background-color: #f9f9f9; /* Light greyish-white */
    padding: 20px;
    border-radius: 10px;
}
.form-control {
    background-color: #fff !important; /* Ensures inputs stay white */
    color: #000 !important; /* Makes text inside inputs black */
}
    </style>

    <script>
       function validateRegForm(){
          var firstname=regForm.firstName;
          var lastname=regForm.lastName;
          var gen=regForm.gender;
          var birthdate=regForm.dob;
          var email=regForm.email;
          var username=regForm.userName;
          var pass=regForm.password;

          if(firstname.value=="" || firstname.value==null)
          {
            window.alert("Please enter your firstname.");
            firstname.focus();
            return false;
          }
          if(firstname.length<=4)
          {
            window.alert("Your firstname must be at least 4 charecter.");
            firstname.focus();
            return false; 
          }
          if(lastname.value=="" || lastname.value==null)
          {
            window.alert("Please enter your lastname.");
            firstname.focus();
            return false;
          }
          if(lastname.length<=4)
          {
            window.alert("Your lastname must be at least 4 charecter.");
            firstname.focus();
            return false;     
          }
          if (email.value == "" || email.value==null)
          {
              window.alert("Please enter a valid e-mail address.");
              email.focus();
              return false;
          }
          if (email.value.indexOf("@", 0) < 0) // string.indexOf(searchValue,Start) .
          {
              window.alert("Please enter a valid e-mail address.");
              email.focus();
              return false;
          }
          if (email.value.indexOf(".", 0) < 0)
          {
              window.alert("Please enter a valid e-mail address.");
              email.focus();
              return false;
          }
         if(username.value=="" || username.value==null)
          {
            window.alert("Please enter your User Name.");
            firstname.focus();
            return false;
          }
          if(str.username<=5)
          {
            window.alert("Your User name must be at least 5 charecter.");
            firstname.focus();
            return false; 
          }
          if(pass.value=="" || pass.value==null)
          {
            window.alert("Please enter your Password.");
            firstname.focus();
            return false;
          }
          if(str.pass<=7)
          {
            window.alert("Your password must be at least 7 charecter.");
            firstname.focus();
            return false; 
          }

          return true;

       }

    </script>

     </head>

  <body>
  <?php include 'navbar.html';  ?>

  <div>

          <div class="container">
          <div class="row">
          <div class="page-header">
          <h1 style="font-size:48px; font-weight:bold; color:rgb(100,100,155);">Registration Form</h1>
          </div>
          <form class="form-horizontal" role="form" method="post" action="submit.php" name="regForm" onsubmit="return validateRegForm();">
           
              <div class="form-group">
              <label for="firstName" class="col-sm-2 control-label">First Name:</label>
              <div class="col-sm-6">
              <input type="text" name="firstName" class="form-control" id="firstName" placeholder="First Name">
              </div>
              </div>
           
              <div class="form-group">
              <label for="lastName" class="col-sm-2 control-label">Last Name:</label>
              <div class="col-sm-6">
              <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last Name">
              </div>
              </div>
               
              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Gender:</label>
              <div class="col-sm-6">
              <label class="radio-inline">
              <input type="radio" name="gender" id="gender1" value="male">Male
              </label>
              <label class="radio-inline">
              <input type="radio" name="gender" id="gender2" value="female">Female
              </label>
               
              </div>
              </div>
               
              <div class="form-group">
              <label for="dob" class="col-sm-2 control-label">DOB:</label>
              <div class="col-sm-6">
              <input type="date" name="dob" class="form-control datepicker" id="dob" placeholder=" Date of Birth">
              </div>
              </div>

              <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Email:</label>
              <div class="col-sm-6">
              <input type="email" name="email" class="form-control" id="email" placeholder="Email">
              </div>
              </div>
               
              <div class="form-group">
              <label for="userName" class="col-sm-2 control-label">User Name:</label>
              <div class="col-sm-6">
              <input type="text" name="userName" class="form-control" id="userName" placeholder="User Name">
              </div>
              </div>
               
              <div class="form-group">
              <label for="password" class="col-sm-2 control-label">Password:</label>
              <div class="col-sm-6">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password">
              </div>
              </div>
               
              <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary" id="submit">Register</button>
              </div>
              </div>
           
          </form>
           
          </div><!-- end for class "row" -->
          </div><!-- end for class "container" -->
             <footer>
       
       <div class="container">
     
  <h4 style="text-align: center; background-color: lightgrey; width: 100%;"> &copy; Studio Ghibli</h4>
       </div>
   </footer>
	</div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      </body>
</html>