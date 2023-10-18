
<?php
  $conn= mysqli_connect("localhost","root","","prog");


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require 'vendor/autoload.php';


$msg = $message = $email =  "";
$error =[];
$insert = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){

 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $message = mysqli_real_escape_string($conn, $_POST['message']);





if(empty($email)){
  $error['emailErr'] = 'Email Required';
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
  $error['emailErr'] = 'Your Email Invalid';
}




if(empty($message)){
$error['messageErr'] = 'Message Required';
}


if (count($error) == 0) {
$email = mysqli_real_escape_string($conn, $email);
$message = mysqli_real_escape_string($conn, $message);


 $sql = "INSERT INTO accept 
(`email`,`message`)VALUES ('$email','$message')";
$insert = mysqli_query($conn, $sql);
//echo '<div class="alert alert-succeess">   Success full Think You </div>';
echo '<p class = "text-center"> Think You </p>';
if($sql){
$last_id = mysqli_insert_id($conn);

}else{
echo '<div class="alert alert-warning"> Register error</div>' ;

}
}




        // This code is to send to the customer's email in the form
        if ($insert) {
          echo "<div style='display: none;'>";
          $mail = new PHPMailer(true);

          try {
              //Server settings
              $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
              $mail->isSMTP();                                            //Send using SMTP
              $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
              $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
              $mail->CharSet = "UTF-8";
             
              $mail->Username   = 'hasatraining.g@gmail.com';                     //SMTP username
              $mail->Password   = 'ohqa xxan bahu tvfo';                               //SMTP password  
              $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
              $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

              //Recipients
              $mail->setFrom('hasatraining.g@gmail.com', 'إدارة التدريب التربوي والابتعاث');
              $mail->addAddress($email);

              //Content
              $mail->isHTML(true);                                  //Set email format to HTML
              $mail->Subject = 'no reply';
              $mail->Body    = 'تم قبولك بنجاح <br>  الرساله : '.$message.'';

              $mail->send();
              echo  "<div class='alert alert-success'>Message has been sent</div>";
          } catch (Exception $e) {
              echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
          }
          echo "</div>";
          
      } else {
          $msg = "<div class='alert alert-danger'>Something wrong went.</div>";
      }
    }


?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<title>قبول </title>
</head>
<body>
<br><br><br><br><br>

<div class="content">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      

      <div class="row justify-content-center">
        <div class="col-md-6">
          
          <h3 class="heading mb-4"> إرسال رسالة وايميل الشخص المقبول  </h3>
         



        </div>
        <div class="col-md-6">
        <?php echo $msg; ?>
          <form class="mb-5" method="post" >
            <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                    <div class="text-danger"><?= isset($error['messageErr']) ? $error['messageErr'] : '' ?></div>

                  </div>
                </div> 
            <br>
            <div class="row">
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" name="email" id="email"  placeholder="email@example.com">
                <div class="text-danger"><?= isset($error['emailErr']) ? $error['emailErr'] : '' ?></div>

              </div>
            </div>
     
      
            <br>
           

           
            <br>
            <div class="row">
              <div class="col-12">
              <button type="submit" class="btn btn-primary" style="background-color: #b78d65;" >Send </button>
              <span class="submitting"></span>
              </div>
            </div>
          </form>

         
          <div id="form-message-warning mt-4"></div> 
          <div id="form-message-success">
            Your message was sent, thank you!
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

