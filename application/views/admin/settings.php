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
            <div class="card profile-card-with-cover">
              <div class="card-content">
                <div class="profile-card-with-cover-content text-center">
                  <div class="card-body">
                    <ul class="nav nav-tabs nav-underline no-hover-bg">
                      <li class="nav-item">
                        <a
                          class="nav-link active"
                          id="base-tab31"
                          data-toggle="tab"
                          aria-controls="tab31"
                          href="#tab31"
                          aria-expanded="true"
                          ><i class="ft-briefcase"></i> Add Investment Package</a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          id="base-tab32"
                          data-toggle="tab"
                          aria-controls="tab32"
                          href="#tab32"
                          aria-expanded="false"
                          ><i class="la la-btc"></i> Set Wallet Address
                        </a>
                      </li>
                    </ul>
                    <div class="tab-content px-1 pt-1">
                      <div
                        role="tabpanel"
                        class="tab-pane active"
                        id="tab31"
                        aria-expanded="true"
                        aria-labelledby="base-tab31"
                      >
                        <div class="panel">
                          <!-- Alert -->
                          <?php
                          if($this->session->flashdata('success') != ''){
                          ?>
                          <div class="alert alert-icon-left alert-success alert-dismissible mb-2" role="alert">
                            <span class="alert-icon"><i class="la la-thumbs-o-up"></i></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                            <strong><?php echo $this->session->flashdata('success'); ?></strong>
                          </div>
                          <?php } ?>
                          <!-- -->
                          <form class="mt-3" method="POST" action="<?php echo base_url() ?>user/admin/newpackage">
                            <div class="form-group">
                              <input
                                type="text"
                                name="name"
                                placeholder="Package name"
                                class="form-control"
                              />
                            </div>
                            <div class="form-group">
                              <input
                                type="number"
                                name="price"
                                placeholder="Package price"
                                class="form-control"
                              />
                            </div>
                            <div class="form-group">
                              <input
                                type="number"
                                name="roi"
                                placeholder="Package roi"
                                class="form-control"
                              />
                            </div>
                            <button
                              type="submit"
                              class="btn btn-info"
                            >
                              Add Package
                            </button>
                          </form>
                        </div>
                      </div>
                      <div class="tab-pane" id="tab32" aria-labelledby="base-tab32">
                        <div class="panel">
                          <!-- Alert -->
                          <?php
                          if($this->session->flashdata('btcsuccess') != ''){
                          ?>
                          <div class="alert alert-icon-left alert-success alert-dismissible mb-2" role="alert">
                            <span class="alert-icon"><i class="la la-thumbs-o-up"></i></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                            <strong><?php echo $this->session->flashdata('btcsuccess'); ?></strong>
                          </div>
                          <?php } ?>
                          <!-- -->
                          <form class="mt-3" method="POST" action="<?php echo base_url() ?>user/admin/addBtc">
                            <div class="form-group">
                              <input type="text" name="btcAccount" placeholder="Set Application bitcoin wallet address" class="form-control" value="<?php echo $this->db->get_where('system_settings',array('ID'=>1))->row()->BTC_ADDRESS ?>"/>
                              <button type="submit" class="btn btn-info mt-1">
                                Save Bitcoin Address
                              </button>
                            </div>
                          </form>
                        </div>

                        <div class="panel">
                          <!-- Alert -->
                          <?php
                          if($this->session->flashdata('ethsuccess') != ''){
                          ?>
                          <div class="alert alert-icon-left alert-success alert-dismissible mb-2" role="alert">
                            <span class="alert-icon"><i class="la la-thumbs-o-up"></i></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                            <strong><?php echo $this->session->flashdata('ethsuccess'); ?></strong>
                          </div>
                          <?php } ?>
                          <!-- -->
                          <form class="mt-3" method="POST" action="<?php echo base_url() ?>user/admin/addEth">
                            <div class="form-group">
                              <input type="text" name="etherAccount" placeholder="Set Application etherium wallet address" class="form-control" value="<?php echo $this->db->get_where('system_settings',array('ID'=>1))->row()->ETH_ADDRESS ?>"/>
                              <button type="submit" class="btn btn-info mt-1">
                                Save Etherium Address
                              </button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
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