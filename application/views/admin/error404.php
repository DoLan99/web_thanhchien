<html lang="en" class=" "><head>
    <?php $this->load->view('admin/Header'); ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- page content -->
        <div class="col-md-12">
          <div class="col-middle">
            <div class="text-center text-center">
              <h1 class="error-number">404</h1>
              <h2>Sorry but we couldn't find this page</h2>
              <p>This page you are looking for does not exist <a href="#">Report this?</a>
              </p>
              <a href="<?php echo admin_url(); ?>"><button class="btn btn-warning" type="button">Go to admin!</button></a>

            </div>
          </div>
        </div>
        <!-- /page content -->
      </div>
    </div>

    <?php $this->load->view('admin/FileJs'); ?>
  

</body></html>