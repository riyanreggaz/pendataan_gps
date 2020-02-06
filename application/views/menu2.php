    <?php if ($this->session->userdata['level']=='1') {?>       
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?=base_url('main/utama');?>">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?= base_url('main/logout');?>"><span class="glyphicon glyphicon-log-out"></span>LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
 
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>MENU</h4>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="<?=base_url('main/utama');?>">Manage GPS</a></li>
        <li class="active"><a href="<?=base_url('main/manage_user');?>">Manage User</a></li>
      </ul><br>
    </div>
<?php }else{?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?=base_url('main/utama');?>">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?= base_url('main/logout');?>"><span class="glyphicon glyphicon-log-out"></span>LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
 
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>MENU</h4>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="<?=base_url('main/utama');?>">Manage GPS</a></li>
        <li><a href="<?= base_url('main/profile');?>">Edit Profile</a></li>
        <li class="active"><a href="<?= base_url('main/change_pwd');?>">Change Password</a></li>
      </ul><br>
    </div>
<?php }
?>