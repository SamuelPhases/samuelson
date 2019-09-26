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
                    <div id="users-contacts_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                      <div class="row">
                        <div class="col-sm-12">
                          <table id="users-contacts"
                            class="table table-white-space row-grouping display no-wrap icheck table-middle dataTable"
                            role="grid" aria-describedby="users-contacts_info">
                            <thead>
                              <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="users-contacts" rowspan="1" colspan="1"
                                  aria-label="Name: activate to sort column ascending" style="width: 150px;">Name</th>
                                <th class="sorting" tabindex="0" aria-controls="users-contacts" rowspan="1" colspan="1"
                                  aria-label="Email: activate to sort column ascending" style="width: 160px;">Email</th>
                                <th class="sorting" tabindex="0" aria-controls="users-contacts" rowspan="1" colspan="1"
                                  aria-label="Phone: activate to sort column ascending" style="width: 88px;">Phone</th>
                                <th class="sorting" tabindex="0" aria-controls="users-contacts" rowspan="1" colspan="1"
                                  aria-label="Country: activate to sort column ascending" style="width: 58px;">Country</th>
                                <th class="sorting" tabindex="0" aria-controls="users-contacts" rowspan="1" colspan="1"
                                  aria-label="State: activate to sort column ascending" style="width: 58px;">State</th>
                                <th class="sorting" tabindex="0" aria-controls="users-contacts" rowspan="1" colspan="1"
                                  aria-label="Actions: activate to sort column ascending" style="width: 61px;">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr role="row" *ngFor="let user of users">
                                <td>
                                  <div class="media">
                                    <div class="media-left pr-1">
                                      <span class="avatar avatar-sm avatar-online rounded-circle">
                                        <img src="<?php echo base_url() ?>assets/admin/images/portrait/small/avatar-s-19.png"
                                          alt="avatar"><i></i></span>
                                    </div>
                                    <div class="media-body media-middle">
                                      <a href="#" class="media-heading">John Doe</a>
                                    </div>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="mailto:hello@samuelson.com" target="_blank">hello@samuelson.com</a>
                                </td>
                                <td><a href="tel:+1 5555 555 5555" target="_blank">+1 5555 555 5555</a></td>
                                <td class="text-center">
                                  United States
                                </td>
                                <td class="text-center">
                                  Huston, Texas
                                </td>
                                <td>
                                  <span class="dropdown">
                                    <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                      aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right">
                                      <i class="ft-settings"></i>
                                      </button>
                                    <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                      <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit</a>
                                      <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Delete</a>
                                    </span>
                                  </span>
                                </td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr>
                                <th rowspan="1" colspan="1">Name</th>
                                <th rowspan="1" colspan="1">Email</th>
                                <th rowspan="1" colspan="1">Phone</th>
                                <th rowspan="1" colspan="1">Country</th>
                                <th rowspan="1" colspan="1">State</th>
                                <th rowspan="1" colspan="1">Actions</th>
                              </tr>
                            </tfoot>
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