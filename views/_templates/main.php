<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/md/css/mdb.min.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/md/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/md/css/style.css">
    <script src="<?php echo ROOT_PATH; ?>assets/js/entoka.js"></script>
    <script src="<?php echo ROOT_PATH; ?>assets/md/js/jquery-3.2.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?php echo ROOT_PATH; ?>assets/md/js/popper.min.js"></script>
    <title>Template</title>
  </head>
  <body>
    

    <div class="container-fluid">
      <?php Messages::display(); ?>
      <?php require($view); ?>
      
      <!-- footer start -->
      <!-- footer end -->
      <?php require('./views/footer.html'); ?>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo ROOT_PATH; ?>assets/md/js/bootstrap.min.js"></script>
    <script src="<?php echo ROOT_PATH; ?>assets/md/js/mdb.min.js"></script>
  </body>
</html>