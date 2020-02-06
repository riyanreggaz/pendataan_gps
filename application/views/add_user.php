<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Data USER</title>
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
input[type=text], input[type=password], input[type=date], input[type=file],textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus, input[type=date]:focus, input[type=file]:focus {
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
      <h4><small>TAMBAH DATA USER</small></h4>
      <hr>
      <div class="row" style="margin-top: 20px;">
<form method="post" action=""  enctype="multipart/form-data">
  
<div class="col-md-6">

    <label><b>Username</b></label>
    <input type="text" placeholder="Masukkan Username" name="username" required>

   <label ><b>Nama</b></label>
    <input type="text" placeholder="Masukkan Nama User" name="nama" required>

    <label ><b>Photo</b></label>
    <input type="file" placeholder="Photo" name="photo" required>     



</div>  <div class="col-md-6">
    
    <label><b>Password</b></label>
    <input type="password" placeholder="Masukkan Password" name="password" required>

    <label ><b>Email</b></label>
    <input type="text" placeholder="Masukkan Email" name="email" required>

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
