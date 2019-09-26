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
          <div class="col-7">
            <div class="card profile-card-with-cover">
              <div class="card-content">
                <div class="profile-card-with-cover-content text-center">
                  <div class="card-body">
                    <h4 class="card-title mb-3">
                      <i class="la la-ticket"></i> Help Tickets
                    </h4>
                    <div class="card-text">
                      <p>
                        You have no tickets at the moment. Only create one when you
                        have an issue.
                      </p>
                    </div>
                    <table class="table table-responsive">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Created</th>
                          <th>Status</th>
                          <th>View</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Test Ticket</td>
                          <td>Tuesday, August 27, 2019</td>
                          <td>
                            <span class="label label-success"
                              >Closed</span
                            >
                            <span class="label label-info"
                              >Open</span
                            >
                          </td>
                          <td>
                            <button
                              class="btn btn-info btn-sm"
                            >
                              View Reply
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
          <div class="col-5">
            <div class="card profile-card-with-cover">
              <div class="card-content">
                <div class="profile-card-with-cover-content text-center">
                  <div class="card-body">
                    <h4 class="card-title mb-3">
                      <i class="la la-ticket"></i> Open a new ticket
                    </h4>
                    <div class="alert alert-secondary">
                      <span
                        >Use this for issues not included in our
                        <a href="">frequently asked questions page.</a
                        ></span
                      >
                    </div>
                    <form>
                      <div class="form-group">
                        <input
                          type="file"
                          formControlName="image"
                          class="form-control"
                        />
                      </div>
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control"
                          formControlName="title"
                          placeholder="Ticket title"
                        />
                      </div>

                      <div class="form-group">
                        <textarea
                          rows="5"
                          cols="5"
                          class="form-control"
                          placeholder=" Ticket message"
                          formControlName="issue"
                        ></textarea>
                      </div>

                      <div class="form-group">
                        <button
                          type="submit"
                          class="btn btn-default center-block"
                        >
                          Create Ticket
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
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/script.php'; ?>
</body>
</html>