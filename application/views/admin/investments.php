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
  <div class="content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">

        <div class="row">
          <div class="col-1"></div>
          <div class="col-10">
            <div class="card">
              <div class="card-header text-center">
                <h4 class="card-title">Investment History</h4>
                <a class="heading-elements-toggle">
                  <i class="la la-ellipsis-v font-medium-3"></i>
                </a>
              </div>

              <?php  
              $this->db->where('USER_ID', $user_id);
              $this->db->from('purchase');
              $purchase = $this->db->get();
              
              $user_purchase = $purchase->num_rows();

              if (!$user_purchase) {
              ?>
              <div class="card-body text-center">
                <h4 class="card-title success">No Investment Package Found</h4>
                <p class="card-text">
                  You have no investments at the moment, click the button below to
                  select a package
                </p>
                <a href="<?php echo base_url() ?>user/investment_packages" class="btn btn-primary">
                  Purchase a package
                </a>
              </div>
              <?php } ?>
            </div>
          </div>
          <div class="col-1"></div>
        </div>

        <?php  
        if ($user_purchase > 0) {
        ?>

        <div class="row">
          <div class="col-1"></div>
          <div class="col-10">
            
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title danger text-bold-600">Not Activated</h4>
                    <h4 class="card-title success text-bold-600">Activated</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                      <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-plus"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-content collapse" style="">
                    <div class="card-body">
                      <h4 class="font-large-2 text-bold-400">$50.00</h4>
                      <p class="blue-grey lighten-2 mb-0">Silver Pack</p>
                      <div *ngIf="activate">
                        <p class="blue-grey lighten-2" *ngIf="!inv.active">
                          Your plan is inactive, make payment worth of $50.00
                          <br />
                          BTC to this address
                          <br />
                          <code>
                            1NgnzXujTZbtnc796888787887fDPFWZzm33
                          </code>
                          <br />
                          or
                          <br />
                          ETH
                          <br />
                          <code>
                            1NgnzXujTZbtnc796888787887fDPFWZzm33
                          </code>
                          <br />
                          and click on the button below to upload payment proof to
                          activate this plan
                        </p>
                        <input
                          type="file"
                          class="btn btn-default mt-10"
                          value="Activate Plan"/>
                      </div>
                      <button class="btn btn-info mt-2">Activate Plan</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-1"></div>
        </div>

      <?php } ?>
      
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/script.php'; ?>
</body>
</html>