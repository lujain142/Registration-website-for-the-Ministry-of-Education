<?php
    $conn= mysqli_connect("localhost","root","","prog");
    if(!$conn) {
        die ("Connect Failed ");
    }
 
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
 $jop_id=$_POST['jop_id'];
$full_name=$_POST['full_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$phon=$_POST['phon'];
$prgram_name=$_POST['prgram_name'];
$target_group=$_POST['target_group'];
$program_name=$_POST['program_name'];
$gander=$_POST['gander'];
$day_program=$_POST['day_program'];
$d1=$_POST['d1'];
$d2=$_POST['d2'];
$pxecuting_party=$_POST['pxecuting_party'];
$pxecuting=$_POST['pxecuting'];
$traning_method=$_POST['traning_method'];
$details=$_POST['details'];

$sql = mysqli_query($conn, "INSERT INTO ordrs SET `job_id` = '$jop_id' 
, `full_name` = '$full_name' ,
`u_email` = '$email',
`password` = '$password', 
`u_phone` ='$phon',
`gander`= '$gander',
`prgram_name`='$prgram_name',
`target_group`='$target_group', 
`specialisation` = '$program_name',
`pxecuting_party`= '$pxecuting_party',
 `place_of_pxecuting`='$pxecuting', 
 `day_program`='$day_program',
  `date_start`='$d1',
   `date_done` = '$d2',
 `traning_method` = '$traning_method', 
 `details` = '$details'");

if($sql){
  
    header("Location:prograam.php");
}else {
    echo 'لم يتم التسجيل ';


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
        <title>إدارة التدريب والابتعاث</title>
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
        <a href="admin.php"><input align="right" type="image" src="img_568656.png" style="border: double;" height="30" width="30"/></a>
    <div class="container">
            <h1 class="bg-primary" align="center">نموذج رفع طلب عرض برنامج</h1>
            <form  method="post">
                        
                <div class="form-group">
    <label for="id">الرقم الوظيفي:</label>
    <input type="text" class="form-control" id="id" name="jop_id" required>
  </div>
                
  <div class="form-group">
    <label for="fullname">اسم المدرب  :</label>
    <input type="text" class="form-control" id="full_name" name="full_name" required>
  </div>
               <div class="form-group">
    <label for="email">البريد الالكتروني:</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>  
    <div class="form-group">
    <label for="pas">كلمة المرور:</label>
    <input type="text" class="form-control" id="password" name="password">
  </div>
    <div class="form-group">
    <label for="phon">رقم الهاتف :</label>
    <input type="text" class="form-control" id="phone" name="phon">
  </div>              
     <div class="form-group">
    <label for="nam">اسم البرنامج :</label>
    <input type="text" class="form-control" id="name" name="prgram_name">
  </div>    
     <div class="form-group">
    <label for="target">الفئة المستهدفة:</label>
    <input type="text" class="form-control" id="target_group" name="target_group">
  </div>
    <div class="form-group">
    <label for="prog">التخصص:</label>
    <input type="text" class="form-control" id="program_name" name="program_name">
  </div>            
   <div class="form-group">
    <label for="gan">الجنس :</label>
    <select id="gander" name="gander" class="form-control">
        <option value="female">انثى</option>
        <option value="male">ذكر</option>
    </select>
  </div>
    <div class="form-group">
    <label for="daypro">عدد الايام :</label>
    <input type="number" class="form-control" id="day_program" name="day_program">
  </div>
   <div class="form-group">
    <label for="da1">تاريخ البداية :</label>
    <input type="date" class="form-control" id="d1" name="d1">
  </div>   
    <div class="form-group">
    <label for="da2">تاريخ النهاية :</label>
    <input type="date" class="form-control" id="d2" name="d2">
  </div>
     <div class="form-group">
    <label for="pxecu">مقر التنفيذ:</label>
    <input type="text" class="form-control" id="pxecuting_party" name="pxecuting_party">
  </div>                
    <div class="form-group">
    <label for="pb">اسم مقر التنفيذ:</label>
    <input type="text" class="form-control" id="pxecuting" name="pxecuting">
  </div>    
   <div class="form-group">
    <label for="trnung">حالة التدريب :</label>
    <select class="form-control" id="traning_method" name="traning_method">
        <option value="attendance">حضوري</option>
        <option value="online">عن بعد</option>
    </select>

  </div>    
    <div class="form-group">
    <label for="detai">محتوى البرنامج :</label>
      <textarea class="form-control" id="details" name="details"></textarea>

  </div>    
                                                                       
                <center><button type="submit" class="btn btn-default">تسجيل</button></center>
</form>
        </div>
   
    </body>
    
</html>