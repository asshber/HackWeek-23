<?php
session_start();
if($_SESSION['success']!='1')
{
    header('location: index.html');
    return;
}
?>
<!doctype html>
<html lang="en">
<head>
<title>Try Your Luck with Bash</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="stylesheet.css">
<body>
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">
<h2 class="heading-section">Login #07</h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-md-12 col-lg-10">
<div class="wrap d-md-flex">
<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
<div class="text w-100">
<h2>Learn bash with asshber</h2>
<p>Try Your Luck!</p>
<?php
if(isset($_POST['command']))
{
    echo '<a class="btn btn-white btn-outline-white">'. exec($_POST['command']) . '</a>';
}
else
{
    echo '<a class="btn btn-white btn-outline-white"> Output Here</a>';
}
?>
</div>
</div>
<div class="login-wrap p-4 p-lg-5">
<div class="d-flex">
<div class="w-100">
<h3 class="mb-4">Enter Your Command</h3>
</div>
<div class="w-100">
</div>
</div>
<form action="./dashboard.php" class="signin-form" method="post">
<div class="form-group mb-3">
<label class="label" for="name">Command</label>
<input type="text" class="form-control" placeholder="id" name="command" required>
</div>
<div class="form-group">
<button type="submit" class="form-control btn btn-primary submit px-3">Run</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"78e9f566eda48995","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>
</html>
