
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laravel - Mpesa :: Register URL</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="">
    <form class="form-signin" method="post" action="/registerurl">
      {{ csrf_field()}}
      <center><h3 class="font-weight-normal">Register URL</h3></center>
      <br>
      <label>Paybill No.</label>
      <input type="text" name="shortcode" id="shortcode" class="form-control" disabled="disabled" value="174379" required autofocus>
      <br>
      <label>Response Type</label>
      <select name="response" class="form-control">
        <option value="Complete">Complete</option>
        <option value="Cancel">Cancel</option>
      </select>
      <br>
      <label>Validation Url</label>
      <input type="text" name="validation" id="validation" class="form-control" placeholder="Validation URL" value="http://pesavel.itscoming.co.ke/ValidationURL" required autofocus>
      <br>
      <label>Confirmation Url</label>
      <input type="text" name="confirmation" id="confirmation" class="form-control" value="http://pesavel.itscoming.co.ke/ConfirmationURL" placeholder="Confirmation URL" required>
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      <center><p class="mt-5 mb-3 text-muted">&copy; 2018</p></center>
    </form>
  </body>
</html>
