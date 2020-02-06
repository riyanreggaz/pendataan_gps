<!DOCTYPE html>
<html>
<style>
input[type=text],[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 60%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 30px 110px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.log {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 500px;
  margin-left: 30%;
  margin-top: 10%;
}
.alert-danger {
    color: #721c24;
background-color:#f8d7da;
border-color:#f5c6cb;
}
.alert {
    position: relative;
    padding: 0.75rem 9.25rem;
    margin-bottom: 1rem;
    border: 1px solid 
    transparent;
        border-top-color: transparent;
        border-right-color: transparent;
        border-bottom-color: transparent;
        border-left-color: transparent;
    border-radius: .25rem;
    text-align: center;
}
</style>
<body style="background-color: bisque;">

<div class="log">
<?php
            if($this->session->flashdata('alert')) {
               echo '<div class="alert alert-danger alert-message">';
               echo $this->session->flashdata('alert');
               echo '</div>';
            }
            if($this->session->flashdata('success')) {
               echo '<div class="alert alert-success alert-message">';
               echo $this->session->flashdata('success');
               echo '</div>';
            }
            
            ?>
        
	<h3 style="font-size: 20px;margin-left: 36%;">FORM LOGIN</h3>
  <form method="post"  action="">
    <label for="fname">Username</label>
    <input type="text" name="username" placeholder="Masukkan Username">
    <label for="lname">Password</label>
    <input type="password" name="password" placeholder="Masukkan Password">
    <input type="submit" name="submit" value="Submit">
   
  </form>
</div>

</body>
</html>
