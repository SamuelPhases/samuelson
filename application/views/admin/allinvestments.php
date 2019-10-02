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
              <!-- Alert -->
              <?php
              if($this->session->flashdata('activesuccess') != ''){
              ?>
              <div class="alert alert-icon-left alert-success alert-dismissible mb-2" role="alert">
                <span class="alert-icon"><i class="la la-thumbs-o-up"></i></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <strong><?php echo $this->session->flashdata('activesuccess'); ?></strong>
              </div>
              <?php } ?>
              <div class="card-header">
                <h4 class="card-title">All User Investments</h4>
              </div>
              <div class="card-content">
                <div class="table-responsive">
                  <table class="table table-de mb-0">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>email</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th>Profit</th>
                        <th>Date</th>
                        <th>Payment Proof</th>
                        <th>Cancel</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php  
                      // $this->db->where('STATUS', 'INACTIVE');
                      $this->db->where('POP', 1);
                      $this->db->from('purchase');
                      $purchase = $this->db->get()->result_array();
                      foreach($purchase as $row):
                        $user_name = $this->db->get_where('users', array('ID'=>$row['USER_ID']))->row()->FULL_NAME;
                        $email = $this->db->get_where('users', array('ID'=>$row['USER_ID']))->row()->EMAIL;
                        $package = $this->db->get_where('packages', array('ID'=>$row['PACKAGE_ID']))->row()->NAME;
                        $price = $this->db->get_where('packages', array('ID'=>$row['PACKAGE_ID']))->row()->PRICE;
                      ?>
                      <tr>
                        <td><?php echo $user_name; ?></td>
                        <td><?php echo $email; ?></td>
                        <td class="<?php echo $row['STATUS']=='INACTIVE' ? 'danger' : 'success'; ?>">
                          <?php echo $package; ?> [<?php echo $row['STATUS']=='INACTIVE' ? 'NOT ACTIVATED' : 'ACTIVATED'; ?>]
                        </td>
                        <td>$<?php echo number_format($price); ?></td>
                        <td>
                          <span>
                            $0.00
                          </span>
                        </td>
                        <td>
                          <?php
                        echo date("d",strtotime($row['PURCHASE_DATE'])).' '. date("F",strtotime($row['PURCHASE_DATE'])).','. date("Y",strtotime($row['PURCHASE_DATE']))
                        ?> 
                        </td>
                        <td>
                          <a href="<?php echo base_url() ?>uploads/pop/<?php echo $row['ID'].'.png'; ?>" target="_blank">
                            View POP
                          </a>
                          <span class="text-semibold">
                            Not uploaded
                          </span>
                        </td>
                        <td>
                          <a href="<?php echo base_url() ?>user/admin/activate_plan/<?php echo $row['ID']; ?>" class="btn btn-sm round btn-outline-info">
                            Activate Plan
                          </a>
                        </td>
                      </tr>
                      <?php  
                      endforeach;
                      ?>
                    </tbody>
                  </table>
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