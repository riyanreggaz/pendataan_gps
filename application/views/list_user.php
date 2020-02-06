<!DOCTYPE html>
<html lang="en">
<head>
  <title>Manage User</title>
     <?php $this->load->view('top'); ?>
  <style>
    .row.content {height: 1500px}
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
     @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    .navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}
  </style>
</head>
<body>
    <?php $this->load->view('menu1'); ?>
    <div class="col-sm-9">
      <h4><small>DATA USER</small></h4>
      <hr>
      <div class="row" style="margin-top: 20px;">
                        <div class="col-md-12">
                            <div class="box-widget">
                                <div>
                        <a href="<?php echo site_url('main/tambah_user')?>" class="btn btn-success"><i class="icon-plus"> Tambah</i></a>
                    </div>
                    <br>
                                <table class="table table-bordered data-tbl-boxy responsive">
                                    <thead style="background: beige;">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Photo</th>
                                            <th width="15%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; foreach($data->result() as $user) :
                                ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $user->nama; ?></td>
                                             <td><?= $user->email; ?></td>
                                            <td><img  src="<?php echo base_url('foto_user/'.$user->photo) ?>" style="max-width: 60px"></td>
                                                 <td  style="width: 200px;">
                                                <a class="btn btn-warning" href="<?= base_url(); ?>main/edit_user/<?= $user->id; ?>">Edit</i></a>
                                                <a class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ?')" href="<?= base_url(); ?>main/hapus_user/<?= $user->id; ?>">Delete</a></td>
                                        </tr>
                                        
                                    <?php endforeach; ?>
                                    </tbody> 
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<footer class="container-fluid">
  <p style="text-align: center;">Created By @Riyan-Aditiya</p>
</footer>

</body>
</html>
