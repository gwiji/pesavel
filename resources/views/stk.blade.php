
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laravel - Mpesa :: C2B STK Simulation</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body>
    <form class="form-signin" method="post" action="/stk_push">
      {{ csrf_field()}}
      <div class="text-center">
      <h4 class="font-weight-normal">C2B STK Push Simulation</h4>
      </div>
      <br>
      <label>MSISDN</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">+2547</div>
        </div>
      <input type="text" name="tel" id="inputEmail" class="form-control" placeholder="Telephone No." required autofocus>
      </div>
      <br>
      <label>Pay Bill</label>
      <input type="text" name="shortcode" id="inputPassword" class="form-control" value="174379" disabled="disabled" required>
      <br>
      <label>Account Reference i.e Account No.</label>
      <input type="text" name="ref" id="inputPassword" class="form-control" value="" placeholder="Account No." required>
      <br>
      <label>Amount</label>
      <input type="text" name="amount" id="inputPassword" class="form-control" placeholder="Transaction Amount" required>
      <br>
      <label>Callback URL</label>
      <input type="text" name="url" id="inputPassword" class="form-control" value="http://pesavel.itscoming.co.ke/ValidationURL" disabled="disabled" required>
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      <div class="text-center">
      <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
      </div>
    </form>
  </body>
</html>
