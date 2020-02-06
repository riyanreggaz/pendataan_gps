<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Data GPS</title>
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
       <?php $this->load->view('menu'); ?>
    <div class="col-sm-9">
      <h4><small>TAMBAH DATA GPS</small></h4>
      <hr>
      <div class="row" style="margin-top: 20px;">
<form method="post" action=""  enctype="multipart/form-data">
  
<div class="col-md-6">

    <label><b>Brand GPS</b></label>
    <input type="text" placeholder="Masukkan Brand GPS" name="Brand_GPS" required>

    <label><b>Model GPS</b></label>
    <input type="text" placeholder="Masukkan Model GPS" name="Model_GPS" required>

    <label ><b>GPS Name</b></label>
    <input type="text" placeholder="Masukkan Nama GPS" name="GPS_Name" required>
    
    <label ><b>Sold To</b></label>
    <input type="text" placeholder="Dijual ke.." name="Sold_To" required>

</div>  <div class="col-md-6">
    
    <label><b>Waranty</b></label>
    <input type="text" placeholder="Masukkan Garansi dalam bulan" name="Waranty_month" onkeypress="return wajibAngka(event);" required>

    <label><b>Buy Date</b></label>
    <input type="date" placeholder="Tanggal beli" name="Buy_Date" required>

    <label ><b>Sold Date</b></label>
    <input type="date" placeholder="Tanggal jual" name="Sold_Date" required>
    
    <label ><b>Photo</b></label>
    <input type="file" placeholder="Photo" name="Photo" required>     
</div>

  
  </div>
  
    <label ><b>Description</b></label>
<textarea name="Description"></textarea>
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
