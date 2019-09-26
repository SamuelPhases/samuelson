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
                <div class="card-profile-image text-center mt-3">
                  <img
                    src="<?php echo base_url() ?>assets/admin/images/portrait/small/avatar-s-19.png"
                    class="rounded-circle img-border box-shadow-1"
                    alt="-OakTradex"
                    height="150px"
                    width="150px"
                  />
                  <fieldset class="form-group mt-2">
                    <div class="custom-file col-4 col-offset-4">
                      <input
                        type="file"
                        class="custom-file-input"
                        id="inputGroupFile01"
                      />
                      <label class="custom-file-label" for="inputGroupFile01"
                        >Change Photo</label
                      >
                    </div>
                  </fieldset>
                </div>
                <div class="profile-card-with-cover-content text-center">
                  <div class="profile-details mt-2">
                    <h3 class="card-title">john doe</h3>
                    <ul class="list-inline clearfix mt-2">
                      <li class="mr-3">
                        <h2 class="block">
                          $2,500.00
                        </h2>
                        Total Amount Deposited
                      </li>
                      <li class="mr-3">
                        <h2 class="block">
                          $2,500.00
                        </h2>
                        Total Amount Withdrawn
                      </li>
                      <li>
                        <h2 class="block">
                          $2,500.00
                        </h2>
                        Total Amount Available
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title mb-3">
                      <i class="ft-user"></i> Personal Info
                    </h4>
                    <div class="card-text">
                      <dl class="row">
                        <dt class="col-sm-3 text-right">Refferal Link</dt>
                        <dd class="col-sm-9 text-left">
                          https://oaktradex/auth/sign-up/55
                        </dd>
                      </dl>
                      <dl class="row">
                        <dt class="col-sm-3 text-right">Full Name</dt>
                        <dd class="col-sm-9 text-left">
                          John Doe
                        </dd>
                      </dl>
                      <dl class="row">
                        <dt class="col-sm-3 text-right">Email</dt>
                        <dd class="col-sm-9 text-left">
                          hello@samuelsonokoi.com
                        </dd>
                      </dl>
                      <dl class="row">
                        <dt class="col-sm-3 text-right">Phone Number</dt>
                        <dd class="col-sm-9 text-left">
                          +1 5555 555 5555
                        </dd>
                      </dl>
                      <dl class="row">
                        <dt class="col-sm-3 text-right">Country</dt>
                        <dd class="col-sm-9 text-left">
                          United States
                        </dd>
                      </dl>
                      <dl class="row">
                        <dt class="col-sm-3 text-right">State</dt>
                        <dd class="col-sm-9 text-left">
                          Huston, Texas
                        </dd>
                      </dl>
                      <dl class="row">
                        <dt class="col-sm-3 text-right">Refferer</dt>
                        <dd class="col-sm-9 text-left">
                          aoktradex
                        </dd>
                      </dl>
                      <dl class="row">
                        <dt class="col-sm-3 text-right">Wallet Address</dt>
                        <dd
                          class="col-sm-9 text-left">
                          <p>
                            You have no wallet address set at the moment, please use
                            the set wallet address tab below to add one.
                          </p>
                        </dd>
                      </dl>
                    </div>
                  </div>

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
                          ><i class="ft-users"></i> Refferers</a
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
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          id="base-tab33"
                          data-toggle="tab"
                          aria-controls="tab33"
                          href="#tab33"
                          aria-expanded="false"
                          ><i class="ft-lock"></i> Change Password</a
                        >
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
                        <div class="card-text mt-3">
                          <p>You have no refferers at the moment</p>
                        </div>
                      </div>
                      <div class="tab-pane" id="tab32" aria-labelledby="base-tab32">
                        <form
                          [formGroup]="addressForm"
                          (ngSubmit)="saveAddress()"
                          class="mt-3"
                        >
                          <div class="form-group">
                            <input
                              type="text"
                              formControlName="address"
                              placeholder="Set your bitcoin wallet address"
                              class="form-control"
                              value="{{ user?.btcAddress }}"
                            />
                            <button
                              [disabled]="addressForm.invalid"
                              type="submit"
                              class="btn btn-info mt-1"
                            >
                              Save
                            </button>
                          </div>
                        </form>
                      </div>
                      <div class="tab-pane" id="tab33" aria-labelledby="base-tab33">
                        <form
                          [formGroup]="updatePasswordForm"
                          (ngSubmit)="updatePassword()"
                          class="mt-3"
                        >
                          <div class="row">
                            <div class="form-group col-6">
                              <input
                                type="password"
                                formControlName="newPassword"
                                placeholder="Enter new password"
                                class="form-control"
                              />
                            </div>
                            <div class="form-group col-6">
                              <input
                                type="password"
                                formControlName="confirmPassword"
                                placeholder="Confirm new password"
                                class="form-control"
                              />
                            </div>
                          </div>
                          <button
                            [disabled]="updatePasswordForm.invalid"
                            type="submit"
                            class="btn btn-info"
                          >
                            Change Password
                          </button>
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
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/script.php'; ?>
</body>
</html>