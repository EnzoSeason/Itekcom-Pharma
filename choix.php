<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Limportant</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <h2>Limportant</h2>
        <p class="lead">client information</p>
      </div>

      <div class="row">
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form action="creercommande.php" method="post">
            <div class="row">
              
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" name="firstname" placeholder="" value="">
              </div>
              
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" name="lastname" placeholder="" value="">
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="gender">Gender</label>
                <select class="custom-select d-block w-100" name="gender">
                  <option value="">Choose...</option>
                  <option>Mr.</option>
                  <option>Mrs.</option>
                  <option>Miss.</option>
                </select>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" placeholder="you@example.com">
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" placeholder="30 rue d’Armaillé, 75017 Paris">
            </div>

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" name="address2" placeholder="les bureaux « La Matrice »(2eme Etage)">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" name="country">
                  <option value="">Choose...</option>
                  <option>France</option>
                  <option>China</option>
                </select>
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="paymentMethod">Payment</label>
                <select class="custom-select d-block w-100" name="paymentMethod">
                  <option value="">Choose...</option>
                  <option>Credit card</option>
                  <option>Debit card</option>
                </select>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Card number</label>
                <input type="text" class="form-control" name="cc-name" >
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Expiration</label>
                <input type="text" class="form-control" name="cc-exp">
              </div>
            </div>
            <hr class="mb-4">
            <input class="btn btn-primary btn-lg btn-block" type="submit" value="Save your information">
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017-2018 Limportant</p>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  

</body></html>