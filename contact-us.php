<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>

<?php
    $errName = "";

?>

</head>
<body>
<header role="banner">
<nav class="navbar navbar-custom" id = "nav-menu"></nav>
</header>

<div class="container">
	<div class="row">
		<div class="col-sm-12 text-center">
			<h1 id="contact-us-heading"> Contact Us</h1>
		</div>
	</div>

	<div class="row">

	</div>
</div>

<form class="form-horizontal" role="form" method="post" action="index.php">
    <div class="form-group form-margin">
        <label for="first-name" class="col-sm-3 control-label">First Name</label>
        <div class="col-sm-2">
            <input type="text" class="form-control input-margin" id="first-name" name="first-name" placeholder="First Name" value="<?php echo htmlspecialchars($_POST['first-name']); ?>">
            <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>


        <label for="last-name" class="col-sm-3 control-label">Last Name</label>
        <div class="col-sm-2">
            <input type="text" class="form-control input-margin" id="last-name" name="last-name" placeholder="Last Name" value="<?php echo htmlspecialchars($_POST['last-name']); ?>">
            <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>


    </div>

    <div class="form-group">
      <label for="email" class="col-sm-3 input-margin control-label">Email</label>
        <div class="col-sm-2">
            <input type="email" class="form-control input-margin" id="email" name="email" placeholder="example@example.com" value="">
        </div>

        <label for="inquiry" class="col-sm-3 control-label input-margin">Reason for Inquiry</label>
      <div class="col-sm-2">
         <select class="form-control input-margin" id="inquiry-reason" name = "inquiry" style="height: 30px; width: 200px;">
             <option> General</option>
             <option> Apply To Volunteer</option>
             <option>Apply To Teach</option>
             <option>Other</option>

         </select>
      </div>
    </div>



    <div class="form-group">
        <label for="message" class="col-sm-3 control-label">Message</label>
        <div class="col-sm-7">
            <textarea class="form-control" rows="4" name="message"></textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-12 text-center">
            <input id="submit" name="submit" type="submit" value="Submit" class="btn btn-custom text-center">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <! Will be used to display an alert to the user>
        </div>
    </div>
</form>


<?php
$errName = "";

$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email'];
$message = $_POST['message'];
$inquiryType = $_POST['inquiry'];

$from = 'Brightline Inquiry Form';
$to = 'shamyleg@gmail.com';
$subject = 'Inquiry Form Submission';
$body = "From: $firstName\n Email: $email\n Message:\n $message";


if (!$_POST['first-name'] || (!$_POST['last-name'])) {
    $errName = 'Please fill all the fields';
}

if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errEmail = 'Please enter a valid email address';
}

if (!$errName && !$errEmail) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
?>


<script src="script.js"></script>

</body>
</html>