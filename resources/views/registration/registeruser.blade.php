<!<!DOCTYPE html>
<html lang="en">
    <title>Register-Bernady Land Slawu</title>

    <link href="img/logo-bernady.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/login.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Register</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
            <form class="user" action="/register" method="POST">  
                @csrf      
            <div class="form-group" >
                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                placeholder="Email Address"  name="email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                placeholder="Password" name="password">
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                placeholder="Username" name="name">
            </div>
                <button type="submit" name="register" class="btn btn-primary btn-user btn-block">Register</button>
            </form>
            <hr>
            <div class="text-center">
                <a class="small" href="/login">Already have an account? Login!</a>
            </div>
			</div>
			<!-- <div class="for-pwd-htm">
				<div class="group">
					<label for="user" class="label">Username or Email</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Reset Password">
				</div>
				<div class="hr"></div>
			</div> -->
		</div>
</div>
	</div>
</div>

</body>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){  
            $('#show_password').on('click', function(){  
                var passwordField = $('#password');  
                var passwordFieldType = passwordField.attr('type');
                if(passwordField.val() != '')
                {
                    if(passwordFieldType == 'password')  
                    {  
                        passwordField.attr('type', 'text');  
                        $(this).text('Hide Password');  
                    }  
                    else  
                    {  
                        passwordField.attr('type', 'password');  
                        $(this).text('Show Password');  
                    }
                }
                else
                {
                    alert("Please Enter Password");
                }
            });  
        }); 
    </script>
</body>

</html>