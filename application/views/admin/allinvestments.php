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
                      <tr>
                        <td>JOHN DOE</td>
                        <td>hello@samuelsonokoi.com</td>
                        <td class="success">
                          Silver Pack [Activated]
                        </td>
                        <td>$50.00</td>
                        <td>
                          <span>
                            $0.00
                          </span>
                        </td>
                        <td>Monday, September 23, 2019</td>
                        <td>
                          <a
                            href=""
                            target="_blank"
                          >
                            View POP
                          </a>
                          <span class="text-semibold">
                            Not uploaded
                          </span>
                        </td>
                        <td>
                          <button
                            class="btn btn-sm round btn-outline-info"
                          >
                            Activate Plan
                          </button>
                        </td>
                      </tr>
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