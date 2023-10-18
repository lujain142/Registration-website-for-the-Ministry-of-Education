 <?php
        $conn= new mysqli("localhost","root","","prog");
        
 
if($_SERVER['REQUEST_METHOD']=='POST'){
  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $password = md5($_POST['password']);
  $login = mysqli_query($conn,"SELECT id FROM users WHERE username='$username' and `password`='$password'");
  if(mysqli_num_rows($login)==1){
    $id = mysqli_fetch_assoc($login)['id'];
  
                    header("Location:requests.php");

  }else{
    echo '<div class="alert alert-danger" role="alert"> User Name Or Password Is Wrong!</div>';
  }
}
        ?>




<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html dir="rtl">
    <head>
        <title>تسجيل الدخول</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<style>
        textarea {
  resize: none;
}
        .bg-primary {
  color: #fff;
  background-color: #008080;
    border-radius: 3px;
    font-size:30px;
    font-family:Calibri;
    }
    body{
        background:honeydew;
    }
        .form-group {
  margin-bottom: 15px;
  font-family:Calibri;
        } 
  .form-group-sm .form-control {
  height: 30px;
  padding: 5px 10px; 
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.form-group-sm select.form-control {
  height: 30px;
  line-height: 30px;
}
.form-group-sm textarea.form-control,
.form-group-sm select[multiple].form-control {
  height: auto;
}
.form-group-sm .form-control-static {
  height: 30px;
  min-height: 32px;
  padding: 6px 10px;
  font-size: 12px;
  line-height: 1.5;
}
.form-group-lg .form-control {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px;
}
.form-group-lg select.form-control {
  height: 46px;
  line-height: 46px;
}
.form-group-lg textarea.form-control,
.form-group-lg select[multiple].form-control {
  height: auto;
}
.form-group-lg .form-control-static {
  height: 46px;
  min-height: 38px;
  padding: 11px 16px;
  font-size: 18px;
  line-height: 1.3333333;
}




.btn-default {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
  font-family:Calibri;
}
.btn-default:focus,
.btn-default.focus {
  color: #333;
  background-color: #e6e6e6;
  border-color: #8c8c8c;
}
.btn-default:hover {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  color: #333;
  background-color: #e6e6e6;
  background-image: none;
  border-color: #adadad;
}
.btn-default:active:hover,
.btn-default.active:hover,
.open > .dropdown-toggle.btn-default:hover,
.btn-default:active:focus,
.btn-default.active:focus,
.open > .dropdown-toggle.btn-default:focus,
.btn-default:active.focus,
.btn-default.active.focus,
.open > .dropdown-toggle.btn-default.focus {
  color: #333;
  background-color: #d4d4d4;
  border-color: #8c8c8c;
}
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled.focus,
.btn-default[disabled].focus,
fieldset[disabled] .btn-default.focus {
  background-color: #fff;
  border-color: #ccc;
}
.btn-default .badge {
  color: #fff;
  background-color: #333;
}
    </style>

    <body>
        <div class="container">
            <h1 class="bg-primary" align="center">تسجيل المشرف</h1><form action="requests.php" method="post">
                
  <div class="form-group">
    <label for="username">البريد الالكتروني:</label>
    <input type="text" class="form-control" id="user_name" name="user_name">
  </div>
                
    <div class="form-group">
    <label for="pa">كلمة المرور:</label>
    <input type="text" class="form-control" id="password" name="password">
  </div>
  <center><button type="submit" class="btn btn-default">تسجيل الدخول</button></center>
</form>
        </div>
       
    </body>
</html>

