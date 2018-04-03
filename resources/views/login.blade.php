<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>{{config('app.name')}}</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

<!-- Template Styles -->
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/Simple-Line-Icons-Webfont/simple-line-icons.css"/>
<link rel="stylesheet" href="css/et-line-font/et-line-font.css">

<!-- Responsive Devices Styles -->
<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />

<!-- forms -->
<link rel="stylesheet" href="js/form/css/demo.css" type="text/css" media="all">
<link rel="stylesheet" href="js/form/css/sky-forms.css" type="text/css" media="all">
</head>
<body class="bg-cyan">
<div class="body body-s">
  <form action="" id="sky-form" class="sky-form">
    <header>Login form</header>
    <fieldset>
      <section>
        <div class="row">
          <label class="label col col-4">E-mail</label>
          <div class="col col-8">
            <label class="input"> <i class="icon-append fa fa-user"></i>
              <input type="email" name="email">
            </label>
          </div>
        </div>
      </section>
      <section>
        <div class="row">
          <label class="label col col-4">Password</label>
          <div class="col col-8">
            <label class="input"> <i class="icon-append fa fa-lock"></i>
              <input type="password" name="password">
            </label>
            <div class="note"><a href="#sky-form2" class="modal-opener">Forgot password?</a></div>
          </div>
        </div>
      </section>
      <section>
        <div class="row">
          <div class="col col-4"></div>
          <div class="col col-8">
            <label class="checkbox">
              <input type="checkbox" name="remember" checked>
              <i></i>Keep me logged in</label>
          </div>
        </div>
      </section>
    </fieldset>
    <footer>
      <button type="submit" class="button">Log in</button>
      <a href="#" class="button button-secondary">Register</a> </footer>
  </form>
</div>
<form action="demo-login-process.php" id="sky-form2" class="sky-form sky-form-modal">
  <header>Password recovery</header>
  <fieldset>
    <section>
      <label class="label">E-mail</label>
      <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
        <input type="email" name="email" id="email">
      </label>
    </section>
  </fieldset>
  <footer>
    <button type="submit" name="submit" class="button">Submit</button>
    <a href="#" class="button button-secondary modal-closer">Close</a> </footer>
  <div class="message"> <i class="fa fa-check"></i>
    <p>Your request successfully sent!<br>
      <a href="#" class="modal-closer">Close window</a></p>
  </div>
</form>

<!-- jQuery first, then Tether, then Bootstrap JS. --> 
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 

<!-- form --> 
<script type="text/javascript" src="js/form/jquery.form.min.js"></script> 
<script type="text/javascript" src="js/form/jquery.validate.min.js"></script> 
<script type="text/javascript" src="js/form/jquery.modal.js"></script> 
<script type="text/javascript">
			$(function()
			{
				// Validation for login form
				$("#sky-form").validate(
				{					
					// Rules for form validation
					rules:
					{
						email:
						{
							required: true,
							email: true
						},
						password:
						{
							required: true,
							minlength: 3,
							maxlength: 20
						}
					},
										
					// Messages for form validation
					messages:
					{
						email:
						{
							required: 'Please enter your email address',
							email: 'Please enter a VALID email address'
						},
						password:
						{
							required: 'Please enter your password'
						}
					},					
					
					// Do not change code below
					errorPlacement: function(error, element)
					{
						error.insertAfter(element.parent());
					}
				});
				
				
				// Validation for recovery form
				$("#sky-form2").validate(
				{					
					// Rules for form validation
					rules:
					{
						email:
						{
							required: true,
							email: true
						}
					},
										
					// Messages for form validation
					messages:
					{
						email:
						{
							required: 'Please enter your email address',
							email: 'Please enter a VALID email address'
						}
					},
										
					// Ajax form submition					
					submitHandler: function(form)
					{
						$(form).ajaxSubmit(
						{
							beforeSend: function()
							{
								$('#sky-form button[type="submit"]').attr('disabled', true);
							},
							success: function()
							{
								$("#sky-form2").addClass('submited');
							}
						});
					},				
					
					// Do not change code below
					errorPlacement: function(error, element)
					{
						error.insertAfter(element.parent());
					}
				});
			});			
		</script>
</body>
</html>