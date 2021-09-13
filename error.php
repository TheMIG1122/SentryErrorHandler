<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Error - Page</title>
    <style>
        #main {
            height: 100vh;
        }
    </style>
</head>
<body>
<div class="d-flex justify-content-center align-items-center" id="main">
    <h1 class="mr-3 pr-3 align-top border-right inline-block align-content-center"><?php echo $_GET['error']?></h1>
    <div class="inline-block align-middle">
    	<h2 class="font-weight-normal lead" id="desc"><?php echo $_GET['msg']?>.</h2>
        <p>Return to <a href="index.php" class="btn-sm btn-primary">Home</a></p>
    </div>
</div>

</body>
</html>