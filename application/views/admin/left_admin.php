<?php
$status = $this->uri->segment(2);
$masteractive = "";

if ($this->uri->segment(2) == "users") {
    $useractive = "active";
} else {
    $masteractive = "active";
}
$admin_url = base_url('admin');
?>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>/admin_assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="<?php echo $admin_url; ?>/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
          
        </li>
        <li><a href="<?php echo $admin_url; ?>/user"><i class="fa fa-book"></i> <span>User</span></a></li>
        <li><a href="<?php echo $admin_url; ?>/product_category"><i class="fa fa-book"></i><span>Category</span></a></li>
        <li><a href="<?php echo $admin_url; ?>/brand/listing"><i class="fa fa-book"></i> <span>Brand</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
