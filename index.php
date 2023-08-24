<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>forms</title>
  </head>
  
  <body>
    <h1>HTML FORM</h1>
    <div class ="container">
    <form action="connect.php" method="post">
            <div>
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter your Name" >
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your Email" >
            </div>
            <wbr>
            <div>
            <p><h4><label>Gender</label></h4></p>
                <p><input id="male" type="radio" name="gender" value="male" > <label for="male">Male</label></p>
                <p><input id="female" type="radio" name="gender" value="female"  > <label for="female">Female</label></p>
                <p><input id="others" type="radio" name="gender" value="others"  > <label for="others">Others</label></p>
            </div>
            <wbr>
            <div>
                <label>Mobile</label>
                <input type="text" name="mobile" placeholder="Enter your mobile" >
            </div>
            <wbr>
            <div>
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" >
            </div>
            <wbr>
            <div class="btn">
                <button type="submit">Submit Data</button>
            </div>
            
    </form>
  </body> 

</html> 
