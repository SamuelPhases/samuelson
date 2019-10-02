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
            <!-- Alert -->
            <?php
            if($this->session->flashdata('popsuccess') != ''){
            ?>
            <div class="alert alert-icon-left alert-success alert-dismissible mb-2" role="alert">
              <span class="alert-icon"><i class="la la-thumbs-o-up"></i></span>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
              <strong><?php echo $this->session->flashdata('popsuccess'); ?></strong>
            </div>
            <?php } elseif ($this->session->flashdata('poperror') != '') {
              ?>
            <div class="alert alert-icon-left alert-danger alert-dismissible mb-2" role="alert">
              <span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
              <strong><?php echo $this->session->flashdata('poperror'); ?></strong>
            </div>
          <?php } ?>
            <!-- -->
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
              <?php  
              $btcAddress = $this->db->get_where('system_settings', array('ID'=>1))->row()->BTC_ADDRESS;
              $ethAddress = $this->db->get_where('system_settings', array('ID'=>1))->row()->ETH_ADDRESS;

              $all_purchase = $purchase->result_array();
              foreach ($all_purchase as $row):
                $package_name = $this->db->get_where('packages', array('ID'=>$row['PACKAGE_ID']))->row()->NAME;
                $package_price = $this->db->get_where('packages', array('ID'=>$row['PACKAGE_ID']))->row()->PRICE;
                $package_roi = $this->db->get_where('packages', array('ID'=>$row['PACKAGE_ID']))->row()->ROI;
              ?>
              <div class="col-md-6 col-sm-12">
                <div class="card">
                  <?php  
                  if($row['STATUS']=='INACTIVE'){
                  ?>

                  <div class="card-header">
                    <h4 class="card-title danger text-bold-600">Not Activated</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                      <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-plus"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-content collapse" style="">
                    <div class="card-body">
                      <h4 class="font-large-2 text-bold-400">$<?php echo number_format($package_price); ?></h4>
                      <p class="blue-grey lighten-2 mb-0"><?php echo $package_name; ?></p>
                        <?php 
                        if($row['POP'] == 0){
                        ?>
                        <div>
                        <p class="blue-grey lighten-2">
                          Your plan is inactive, make payment worth of $<?php echo number_format($package_price); ?>
                          <br />
                          BTC to this address
                          <br />
                          <code>
                            <?php echo $btcAddress; ?>
                          </code>
                          <br />
                          or
                          <br />
                          ETH
                          <br />
                          <code>
                            <?php echo $ethAddress; ?>
                          </code>
                          <br />
                          and click on the button below to upload payment proof to
                          activate this plan
                        </p>
                            <form method="POST" enctype="multipart/form-data" action="<?php echo base_url() ?>user/usersactivities/activate">
                              <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                              <input type="hidden" name="purchase_id" value="<?php echo $row['ID']; ?>">
                                <input type="file" class="btn btn-default mt-10" name="pop" />
                                <button type="submit" class="btn btn-info mt-2">Activate Plan</button>
                            </form>
                        </div>
                        <?php
                        } else{
                          echo '
                          <div class="alert alert-secondary mb-2" role="alert">
                            <strong>Awaiting Activation</strong>
                          </div>
                          ';
                        }
                        ?>
                    </div>
                  </div>

                <?php } else{ ?>

                  <div class="card-header">
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
                      <h4 class="font-large-2 text-bold-400">$<?php echo number_format($package_price); ?></h4>
                      <p class="blue-grey lighten-2 mb-0"><?php echo $package_name; ?></p>
                    </div>
                  </div>

                <?php } ?>
                </div>
              </div>
              <?php  
              endforeach;
              ?>
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