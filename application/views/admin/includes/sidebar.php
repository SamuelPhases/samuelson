<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item <?php echo $page_name == 'dashboard' ? 'active' : '' ?>">
          <a href="<?php echo base_url() ?>">
            <i class="la la-home"></i>
            <span class="menu-title" data-i18n="">Dashboard</span>
          </a>
        </li>
        <li class="nav-item <?php echo $page_name == 'profile' ? 'active' : '' ?>">
          <a href="<?php echo base_url() ?>welcome/profile">
            <i class="la la-user"></i>
            <span class="menu-title" data-i18n="">My Profile</span>
          </a>
        </li>
        <li class="navigation-header">
          <span data-i18n="nav.category.layouts">Investment</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
        </li>
        <li class="nav-item <?php echo $page_name == 'investment_packages' ? 'active' : '' ?>">
          <a href="<?php echo base_url() ?>welcome/investment_packages">
            <i class="la la-briefcase"></i>
            <span class="menu-title" data-i18n="">Investment Packages</span>
          </a>
        </li>
        <li class="nav-item <?php echo $page_name == 'myinvestments' ? 'active' : '' ?>">
          <a href="<?php echo base_url() ?>welcome/myinvestments">
            <i class="la la-bar-chart"></i>
            <span class="menu-title" data-i18n="">My Investments</span>
          </a>
        </li>
        <li class="navigation-header">
          <span data-i18n="nav.category.layouts">Admin</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
        </li>
        <li class="nav-item <?php echo $page_name == 'users' ? 'active' : '' ?>">
          <a href="<?php echo base_url() ?>welcome/users">
            <i class="la la-users"></i>
            <span class="menu-title" data-i18n="">All Users</span>
          </a>
        </li>
        <li class="nav-item <?php echo $page_name == 'alltickets' ? 'active' : '' ?>">
          <a href="<?php echo base_url() ?>welcome/alltickets">
            <i class="la la-ticket"></i>
            <span class="menu-title" data-i18n="">All Tickets</span>
          </a>
        </li>
        <li class="nav-item <?php echo $page_name == 'allinvestment' ? 'active' : '' ?>">
          <a href="<?php echo base_url() ?>welcome/allinvestment">
            <i class="la la-briefcase"></i>
            <span class="menu-title" data-i18n="">All Investments</span>
          </a>
        </li>
        <li class="navigation-header">
          <span data-i18n="nav.category.layouts">Support</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
        </li>
        <li class="nav-item <?php echo $page_name == 'tickets' ? 'active' : '' ?>">
          <a href="<?php echo base_url() ?>welcome/tickets">
            <i class="la la-ticket"></i>
            <span class="menu-title" data-i18n="">Help Ticket</span>
          </a>
        </li>
      </ul>
    </div>
  </div>