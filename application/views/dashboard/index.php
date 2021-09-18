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
            <div class="d-flex flex-column bd-highlight mb-3">
            <?php foreach($user as $us): ?>
              <div class="p-2 centered">
                <img src='<?=base_url('uploads/photos/'.$us->photo) ?>' class='img-thumbnail photo'/>
              </div>
              <div class="p-2 bd-highlight">
                <label class='lobster'>Name :</label>
                <label><?php echo $us->name; ?></label>
              </div>
              <div class="p-2 bd-highlight">
                <label class='lobster'>Email :</label>
                <label><?php echo $us->email; ?></label>
              </div>
              <div class="p-2 bd-highlight">
                <label><?php echo $this->session->userdata('status') ?></label>
              </div>
              <?php endforeach; ?>
              <a href="<?= site_url('Landing/process_logout') ?>" class="btn btn-outline-danger">Logout</a>
            </div>
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