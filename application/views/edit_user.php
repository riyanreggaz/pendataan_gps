<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Data USER</title>
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
 * {
  box-sizing: border-box;
}
.container {
  padding: 16px;
  background-color: white;
}
input[type=text], input[type=password], input[type=date], input[type=email], input[type=file],textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus, input[type=email]:focus, input[type=date]:focus, input[type=file]:focus {
  background-color: #ddd;
  outline: none;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.btnsubmit {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 205px;
  border: none;
  cursor: pointer;
  width: 60%;
  opacity: 0.9;
}

.btnsubmit:hover {
  opacity: 1;
}
a {
  color: dodgerblue;
}

  </style>
</head>
<body>
       <?php $this->load->view('menu1'); ?>
    <div class="col-sm-9">
      <h4><small>EDIT DATA USER</small></h4>
      <hr>
      <div class="row" style="margin-top: 20px;">
<form method="post" action=""  enctype="multipart/form-data">
  
<div class="col-md-6">

    <label><b>Username</b></label>
    <input type="text" placeholder="Masukkan Username" name="username" value="<?=$username;?>">

   <label ><b>Nama</b></label>
    <input type="text" placeholder="Masukkan Nama User" name="nama" value="<?=$nama;?>">

    <label ><b>Photo</b></label>
    <input type="file" placeholder="photo" name="photo" >  
     <?php
      if (isset($photo)) {
     echo '<p class="help-block">Kosongkan jika tidak mengubah gambar</p>';
   
      echo '<input type="hidden" name="old_pict" value="'.$photo.'">';
      echo '<img src="'.base_url().'foto_user/'.$photo.'" width="30%">';
    }
      else {
echo "";
      }
      ?>   


</div>  <div class="col-md-6">
    
    <label><b>Password</b></label>
    <input type="text" placeholder="Masukkan Password" name="password" value="<?=$password;?>">

    <label ><b>Email</b></label>
    <input type="email" placeholder="Masukkan Email" name="email" value="<?=$email;?>">

</div>

  
  </div>
  
<input type="submit" class="btnsubmit" name="submit" value="Submit">
    </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<footer class="container-fluid">
   <p style="text-align: center;">Created By @Riyan-Aditiya</p>
</footer>
<script type="text/javascript">
 function wajibAngka(evt) {
 var charCode = (evt.which) ? evt.which : event.keyCode
 if (charCode > 31 && (charCode < 48 || charCode > 57))
 return false;
 }
</script>
</body>
</html>
