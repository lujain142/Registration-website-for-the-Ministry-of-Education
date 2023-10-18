>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

<br><br><br><br>
    
  <?php
  $conn= mysqli_connect("localhost","root","","prog");
$sql ="SELECT * FROM ordrs";
$admin = mysqli_query($conn, $sql);
if(mysqli_num_rows($admin) > 0){
    echo '
    <div class="container">
    <table  class="table table-bordered" id="dataTable" width="60%" cellspacing="0">
    <thead class="thead-light">
      <tr>
      <th scope="col"> ID</th>
        <th scope="col">Job Id</th>
        <th scope="col">Full Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Gander</th>
        <th scope="col">Prgram Name</th>
        <th scope="col"> Target Group</th>
        <th scope="col">Specialisation</th>
        <th scope="col">pxecuting_party</th>
        <th scope="col"> Place of pxecuting</th>
        <th scope="col">Day  Program</th>
        <th scope="col">Date Start</th>
        <th scope="col"> Date Done</th>
        <th scope="col"> Traning Method</th>
        <th scope="col"> Details </th>
        <th scope="col">قبول / رفض </th>
      </tr>
    </thead>
    <tbody>';
    while($row = mysqli_fetch_assoc($admin)){
            echo '<tr>
             <td>'.$row['id'].'</td>
              <td>'.$row['job_id'].'</td>
              <td>'.$row['full_name'].'</td>
              <td>'.$row['u_email'].'</td>
              <td>'.$row['u_phone'].'</td>
              <td>'.$row['gander'].'</td>
              <td>'.$row['prgram_name'].'</td>
              <td>'.$row['target_group'].'</td>
              <td>'.$row['specialisation'].'</td>
              <td>'.$row['pxecuting_party'].'</td>
              <td>'.$row['place_of_pxecuting'].'</td>
              <td>'.$row['day_program'].'</td>
              <td>'.$row['date_start'].'</td>
              <td>'.$row['date_done'].'</td>
              <td>'.$row['traning_method'].'</td>
              <td>'.$row['details'].'</td>
             
                                              
           ';

            ?>
''
<td>
<a href="accept.php "class="btn btn-sm btn-success">قبول</a>
    <a onclick="if(!confirm('هب انت متاكد الرفض')) return false;"
    <a href="cancel.php"class="btn btn-sm btn-danger">رفض</a>
</td>

<?php
            echo '</tr>';
}//endwhile
    echo "</tbody>
    </table></div>";
}else{
  echo "<div class='container'><div class='alert alert-warning'> Not found Cashiers for now!</div></div>";
}


?>
</body>
</html>
