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
    <header>Registration form</header>
    <fieldset>
      <section>
        <label class="input"> <i class="icon-append fa fa-user"></i>
          <input type="text" name="username" placeholder="Username">
          <b class="tooltip tooltip-bottom-right">Needed to enter the website</b> </label>
      </section>
      <section>
        <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
          <input type="email" name="email" placeholder="Email address">
          <b class="tooltip tooltip-bottom-right">Needed to verify your account</b> </label>
      </section>
      <section>
        <label class="input"> <i class="icon-append fa fa-lock"></i>
          <input type="password" name="password" placeholder="Password" id="password">
          <b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
      </section>
      <section>
        <label class="input"> <i class="icon-append fa fa-lock"></i>
          <input type="password" name="passwordConfirm" placeholder="Confirm password">
          <b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
      </section>
    </fieldset>
    <fieldset>
      <div class="row">
        <section class="col col-6">
          <label class="input">
            <input type="text" name="firstname" placeholder="First name">
          </label>
        </section>
        <section class="col col-6">
          <label class="input">
            <input type="text" name="lastname" placeholder="Last name">
          </label>
        </section>
      </div>
      <section>
        <label class="select">
          <select name="gender">
            <option value="0" selected disabled>Gender</option>
            <option value="1">Male</option>
            <option value="2">Female</option>
            <option value="3">Other</option>
          </select>
          <i></i> </label>
      </section>
      <section>
        <label class="checkbox">
          <input type="checkbox" name="subscription" id="subscription">
          <i></i>I want to receive news and  special offers</label>
        <label class="checkbox">
          <input type="checkbox" name="terms" id="terms">
          <i></i>I agree with the Terms and Conditions</label>
      </section>
    </fieldset>
    <footer>
      <button type="submit" class="button">Submit</button>
    </footer>
  </form>
</div>
<script type="text/javascript">
			$(function()
			{
				// Validation		
				$("#sky-form").validate(
				{					
					// Rules for form validation
					rules:
					{
						username:
						{
							required: true
						},
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
						},
						passwordConfirm:
						{
							required: true,
							minlength: 3,
							maxlength: 20,
							equalTo: '#password'
						},
						firstname:
						{
							required: true
						},
						lastname:
						{
							required: true
						},
						gender:
						{
							required: true
						},
						terms:
						{
							required: true
						}
					},
					
					// Messages for form validation
					messages:
					{
						login:
						{
							required: 'Please enter your login'
						},
						email:
						{
							required: 'Please enter your email address',
							email: 'Please enter a VALID email address'
						},
						password:
						{
							required: 'Please enter your password'
						},
						passwordConfirm:
						{
							required: 'Please enter your password one more time',
							equalTo: 'Please enter the same password as above'
						},
						firstname:
						{
							required: 'Please select your first name'
						},
						lastname:
						{
							required: 'Please select your last name'
						},
						gender:
						{
							required: 'Please select your gender'
						},
						terms:
						{
							required: 'You must agree with Terms and Conditions'
						}
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