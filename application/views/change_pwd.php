<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Profile</title>
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
       <?php $this->load->view('menu2'); ?>
    <div class="col-sm-9">
      <h4><small>TAMBAH DATA USER</small></h4>
      <hr>
      <div class="row" style="margin-top: 20px;">
<form method="post" action=""  enctype="multipart/form-data">
  

    <label><b>password baru</b></label>
    <input type="text" placeholder="Masukkan password baru" name="pass1">

   <label><b>Ketik ulang</b></label>
    <input type="text" placeholder="ketik ulang" name="pass2">

    <label><b>Password lama</b></label>
    <input type="text" placeholder="password lama" name="pass3">  
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
</body>
</html>
