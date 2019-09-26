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
                          <form
                            class="mt-3"
                          >
                            <div class="form-group">
                              <input
                                type="text"
                                formControlName="name"
                                placeholder="Package name"
                                class="form-control"
                              />
                            </div>
                            <div class="form-group">
                              <input
                                type="number"
                                formControlName="price"
                                placeholder="Package price"
                                class="form-control"
                              />
                            </div>
                            <div class="form-group">
                              <input
                                type="number"
                                formControlName="roi"
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
                          <form
                            class="mt-3"
                          >
                            <div class="form-group">
                              <input
                                type="text"
                                formControlName="btcAccount"
                                placeholder="Set Application bitcoin wallet address"
                                class="form-control"
                                value=""
                              />
                              <button
                                type="submit"
                                class="btn btn-info mt-1"
                              >
                                Save Bitcoin Address
                              </button>
                            </div>
                          </form>
                        </div>

                        <div class="panel">
                          <form
                            class="mt-3"
                          >
                            <div class="form-group">
                              <input
                                type="text"
                                formControlName="etherAccount"
                                placeholder="Set Application etherium wallet address"
                                class="form-control"
                                value=""
                              />
                              <button
                                type="submit"
                                class="btn btn-info mt-1"
                              >
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