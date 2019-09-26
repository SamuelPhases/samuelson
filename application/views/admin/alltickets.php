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
        
          <section class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <!-- Task List table -->
                    <div class="table-responsive">
                      <div
                        id="users-contacts_wrapper"
                        class="dataTables_wrapper container-fluid dt-bootstrap4"
                      >
                        <div class="row">
                          <div class="col-sm-12">
                            <table
                              id="users-contacts"
                              class="table table-white-space row-grouping display no-wrap icheck table-middle dataTable"
                              role="grid"
                              aria-describedby="users-contacts_info">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Title</th>
                                  <th>Issue</th>
                                  <th>Created</th>
                                  <th>Status</th>
                                  <th>Upload</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>JOHN DOE</td>
                                  <td>hello@samuelsonokoi.com</td>
                                  <td>Test Ticket</td>
                                  <td>This is a test ticket</td>
                                  <td>
                                    Tuesday, August 27, 2019
                                    <span>
                                      - replied by John and close at
                                      Tuesday, August 27, 2019</span>
                                  </td>
                                  <td>
                                    <span
                                      class="label label-success">Closed
                                    </span>
                                    <span
                                      class="label label-info">Open
                                    </span>
                                  </td>
                                  <td>
                                    <a href="" target="_blank"
                                      >View uploaded file</a
                                    >
                                  </td>
                                  <td>
                                    <button
                                      class="btn btn-info btn-sm"
                                    >
                                      Reply and Close
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
          </section>
          
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/script.php'; ?>
</body>
</html>