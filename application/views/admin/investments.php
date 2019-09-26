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
            <div class="col-1"></div>
            <div class="col-10">
              <div class="card">
                <div class="card-header text-center">
                  <h4 class="card-title">Investment History</h4>
                  <a class="heading-elements-toggle">
                    <i class="la la-ellipsis-v font-medium-3"></i>
                  </a>
                </div>
                <div class="card-content">
                  <div class="card-body text-center">
                    <h4 class="card-title success">No Investment Package Found</h4>
                    <p class="card-text">
                      You have no investments at the moment, click the button below to
                      select a package
                    </p>
                    <a class="btn btn-primary">
                      Purchase a package
                    </a>
                  </div>

                  <div class="card">
                    <div
                      class="card-content collapse show">
                      <div class="card-header">
                        <h4 class="card-title text-center">1</h4>
                      </div>
                      <div class="card-body pt-0">
                        <div class="row">
                          <div
                            class="col-md-6 col-12 border-right-blue-grey border-right-lighten-5 text-center"
                          >
                            <h6 class="danger text-bold-600">
                              Not Activated
                            </h6>
                            <h6 class="success text-bold-600">
                              Activated
                            </h6>
                            <h4 class="font-large-2 text-bold-400">
                              $50.00
                            </h4>
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
                            <button
                              class="btn btn-info mt-2"
                            >
                              Activate Plan
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-1"></div>
          </div>
          
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/script.php'; ?>
</body>
</html>