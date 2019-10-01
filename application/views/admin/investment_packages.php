<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$user_id = $this->session->userdata('login_id');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <?php include 'includes/head.php'; ?>
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  <!-- fixed-top-->
  <?php include 'includes/navbar.php'; ?>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <?php include 'includes/sidebar.php'; ?>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        
          <div class="row">
            
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title text-center">OakTradex Packages</h4>
                  <!-- Alert -->
                  <?php
                  if($this->session->flashdata('pursuccess') != ''){
                  ?>
                  <div class="alert alert-icon-left alert-success alert-dismissible mb-2" role="alert">
                    <span class="alert-icon"><i class="la la-thumbs-o-up"></i></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                    <strong><?php echo $this->session->flashdata('pursuccess'); ?></strong>
                  </div>
                  <?php } ?>
                  <!-- -->
                </div>
                <div class="card-content collapse show">
                  <div class="card-body pt-0">
                    <div class="row">
                      <?php  
                      $packages = $this->db->get('packages')->result_array();
                      foreach ($packages as $package):

                        $this->db->where('USER_ID', $user_id);
                        $this->db->where('PACKAGE_ID', $package['ID']);
                        $this->db->from('purchase');
                        $purchase = $this->db->get();
                        $user_purchase = $purchase->num_rows();
                        $remaining_purchase = 100 - $user_purchase;

                      ?>
                      <div class="col border-left-blue-grey border-left-lighten-5 border-right-blue-grey border-right-lighten-5 text-center">
                        <h3 class="text-bold-600 info lighten-2 mb-0">
                          <?php echo $package['NAME'] ?>
                        </h3>
                        <h6 class="text-bold-600"><?php echo $package['ROI'] ?>% daily except sundays</h6>
                        <h4 class="font-large-2 text-bold-400">
                          $<?php echo number_format($package['PRICE']) ?>
                        </h4>
                        <p class="blue-grey lighten-2 mb-0">
                          You have <b><?php echo $remaining_purchase; ?></b> Gold Packs left
                        </p>
                        <?php 
                        if ($remaining_purchase <= 0) {
                        ?>
                        <button type="button" class="btn mt-1 btn-default" disabled>Exceed Purchase</button>
                      <?php } else{ ?>
                        <a class="btn mt-1 btn-primary" href="<?php echo base_url() ?>user/usersactivities/purchase/<?php echo $user_id ?>/<?php echo $package['ID'] ?>">
                             <i class="la la-check-circle"></i> Purchase Pack
                        </a>
                      <?php } ?>
                      </div>
                      <?php  
                      endforeach;
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>  

      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/script.php'; ?>
</body>
</html>