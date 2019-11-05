<?php
#render this page in the way you want to show it ti the authorized client - the context depends on your needs.
if (isset($authorized))
{
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="login_form.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Admin area</title>
</head>
<body>
<div class="card text-center">
  <div class="card-header">
    You have successfully logged in
  </div>
  <div class="card-body">
    <h5 class="card-title">INSERT_HEADER</h5>
    <p class="card-text">INSERT_TEXT</p>
  </div>
  <div class="card-footer text-muted">
    Message
  </div>
</div>
</body>
</html>
<?php
}
?>
