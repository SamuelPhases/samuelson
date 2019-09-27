<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>Register with Background Color - Modern Admin - Clean Bootstrap 4 Dashboard HTML
    Template + Bitcoin Dashboard</title>
  <link rel="apple-touch-icon" href="<?php echo base_url() ?>assets/admin/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/admin/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/admin/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/admin/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/admin/vendors/css/forms/icheck/custom.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/admin/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/admin/css/core/menu/menu-types/vertical-menu-modern.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/admin/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/admin/css/pages/login-register.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/admin//css/style.css">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu-modern 1-column  bg-cyan bg-lighten-2 menu-expanded blank-page blank-page"
data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                <div class="card-header border-0 pb-0">
                  <div class="card-title text-center">
                    <img src="<?php echo base_url() ?>assets/admin/images/logo/logo-dark.png" alt="branding logo">
                  </div>
                </div>
                <div class="card-content">
                  <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                    <span>Using Email</span>
                  </p>
                  <?php
                  if($this->session->flashdata('error') != ''){
                  ?>
                  <div class="alert bg-danger alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">
                    <span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                    <?php echo $this->session->flashdata('error'); ?>
                  </div>
                <?php  }?>
                  <div class="card-body pt-0">
                    <form class="form-horizontal" action="<?php echo base_url() ?>auth/reg_user" method="POST">
                      <fieldset class="form-group position-relative has-icon-left mb-1">
                        <input
                          required
                          type="text"
                          class="form-control form-control-lg input-lg"
                          placeholder="Your Full Name"
                          name="name"
                          autofocus
                        />
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left mb-1">
                        <input
                          required
                          type="email"
                          class="form-control form-control-lg input-lg"
                          placeholder="Your Email Address"
                          name="email"
                        />
                        <div class="form-control-position">
                          <i class="ft-mail"></i>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left mb-1">
                        <input
                          type="text"
                          class="form-control form-control-lg input-lg"
                          placeholder="Your Phone Number"
                          name="phone"
                          required
                        />
                        <div class="form-control-position">
                          <i class="ft-phone"></i>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative mb-1">
                        <select
                          class="form-control form-control-lg input-lg"
                          name="country"
                          required
                          id="country"
                          onchange="return get_state(this.value)"
                        >
                          <option>Select Country</option>
                          <?php  
                          $countries = $this->db->get('countries')->result_array();
                          foreach ($countries as $country):
                          ?>
                          <option value="<?php echo $country['id']; ?>"><?php echo $country['name']; ?></option>
                          <?php  
                          endforeach;
                          ?>
                        </select>
                      </fieldset>
                      <fieldset class="form-group position-relative mb-1">
                        <select
                          class="form-control form-control-lg input-lg"
                          name="state"
                          id="state"
                          required
                        >
                          <option>Select State</option>
                        </select>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left mb-1">
                        <input
                          type="password"
                          class="form-control form-control-lg input-lg"
                          placeholder="Enter Password"
                          name="password"
                          required
                        />
                        <div class="form-control-position">
                          <i class="la la-key"></i>
                        </div>
                      </fieldset>
                      <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-user"></i> Register</button>
                    </form>
                  </div>
                  <div class="card-body pt-0">
                    <a href="<?php echo base_url() ?>auth/login" class="btn btn-outline-danger btn-block"><i class="ft-unlock"></i> Login</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <!-- BEGIN VENDOR JS-->
  <script src="<?php echo base_url() ?>assets/admin/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="<?php echo base_url() ?>assets/admin/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="<?php echo base_url() ?>assets/admin/js/core/app-menu.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>assets/admin/js/core/app.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="<?php echo base_url() ?>assets/admin/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->

  <script>
    function get_state(country) {
        $.ajax({
            url: '<?php echo base_url();?>auth/get_state/' + country ,
            success: function(response)
            {
              $('div select#state').html(response);
            },
        });
    }
  </script>
</body>
</html>