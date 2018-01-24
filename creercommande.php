<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Limportant</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";
    $con = mysqli_connect($servername,$username,$password,$dbname);
    if (!$con)
    {
        die('Could not connect: ' . mysqli_connect_error());
    }

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $address2 = $_POST["address2"];
    $coutry = $_POST["country"];
    $paymentMethod = $_POST["paymentMethod"];
    $cc_name = $_POST["cc-name"];
    $cc_exp = $_POST["cc-exp"];
    $sql = "INSERT INTO myClients (client_firstname, client_lastname, client_gender, client_address, client_address2, client_country, client_paymentMethod, client_ccnumber, client_ccexp) VALUES 
    ('$firstname', '$lastname','$gender','$address','$address2','$coutry','$paymentMethod','$cc_name','$cc_exp')";

    if(!mysqli_query($con,$sql)){
      echo "Error: ".$sql."<br>".mysqli_error($con);
    }

    mysqli_close($con);
    ?>

  </head>

  <body>

    <!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5">Reussi</h1>
      <?php echo '<p class="text-muted">'.$_POST["gender"].$_POST["lastname"].'</p>'; ?>
      <?php echo '<p class="text-success">You are our client now.</p>'; ?>
      <form action = "choix.php" method = "post">
        <input class="btn btn-primary" type="submit" value="Back">
      </form>
    </main>
  

</body></html>