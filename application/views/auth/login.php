<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link href=" <?= base_url('assets/styles/global.css'); ?>" rel="stylesheet" />
  <title class='lobster'>Login</title>
</head>

<body>
  <main class="container-fluid vh-100 bg-light">
    <div class='row justify-content-center d-flex align-items-center h-100'>
      <div class='col-xs-12 col-md-4'>
        <div class='card px-4 py-5 shadow-lg border-0'>
          <div class='card-body'>
            <?php if ($this->session->flashdata('msg')) { ?>
              <?= $this->session->flashdata('msg') ?>
            <?php } ?>
            <form action='<?= site_url('auth/process_login') ?>' method="POST">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label lobster">Email address</label>
                <input type="email" name='inputEmail' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label lobster">Password</label>
                <input type="password" name='inputPassword' class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label lobster" for="exampleCheck1">Check me out</label>
              </div>
              <div class="d-grid gap-2">
                <input type='submit' value='Login' class="btn btn-primary lobster py-2" />
                <div class='text-center lobster'>Or</div>
                <a href="<?= site_url('auth/register'); ?>" class="btn btn-outline-primary lobster py-2">Register</a>
              </div>
            </form>
            <label class="lobster mt-3">Lost your account ? <a href="<?= site_url('auth/forgot_password') ?>">Click Me !</a></label>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>