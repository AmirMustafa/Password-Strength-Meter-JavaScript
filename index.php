<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PasswordStrenth</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        input{
            padding: 5px;
            margin-top: 10px;
        }
  
    </style>
</head>
<body>
   
    <div class="container">
        <h1 class="text-center">Password Strength Meter</h1><br><br>
        <div class="row" style="width: 40%; margin-left: 32%">
            <form action="">
            	<input type="password"  class="strength form-control" placeholder="New Password"  id = "user_pass1"  name = "user_pass1"   onkeyup="checkpass1();" required/>	<!-- We call password strength function w.r.t id eg. line 38 -->
            
			<!-- <input type="password" class="form-control" placeholder="Confirm Password"> -->
            </form>
            
            
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
                   
                    
                    

<script src="dist/jquery.passwordstrength.js"></script>
<script>
    $('#user_pass1').passwordStrength();//here we call password textbox ID
</script>
        