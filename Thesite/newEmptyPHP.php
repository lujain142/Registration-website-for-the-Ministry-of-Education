<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 $sql = mysqli_query($conn,"SELECT id FROM ordrs  where email = '$email'");


$mail->Username   = 'lujain456700@gmail.com';                     //SMTP username
$mail->Password   = 'eqwq mpqj xanp kvfj';                               //SMTP password   
  <table class="table">
    <thead>
      <tr>
        <th>job_id</th>
        <th>full_name</th>
        <th>Email</th>
        <th>u_phone</th>
        <th>gander</th>
        <th>prgram_name</th>
        <th>target_group</th>
        <th>specialisation</th>
        <th>pxecuting_party</th>
        <th>place_of_pxecuting</th>
        <th>day_program</th>
        <th>date_start</th>
        <th>date_done</th>
        <th>traning_method</th>
        <th>details</th>
        <th>قبول\ رفض</th>
      </tr>
    </thead>
    <tbody>
        <?php
        foreach ($rows as $row){
            echo '<tr>';
            echo '<td>'.$row['job_id'].'</td>';
            echo '<td>'.$row['full_name'].'</td>';
            echo '<td>'.$row['u_email'].'</td>';
            echo '<td>'.$row['u_phone'].'</td>';
            echo '<td>'.$row['u_phone'].'</td>';
            echo '<td>'.$row['gander'].'</td>';
            echo '<td>'.$row['prgram_name'].'</td>';
            echo '<td>'.$row['target_group'].'</td>';
            echo '<td>'.$row['specialisation'].'</td>';
            echo '<td>'.$row['pxecuting_party'].'</td>';
            echo '<td>'.$row['place_of_pxecuting'].'</td>';
            echo '<td>'.$row['day_program'].'</td>';
            echo '<td>'.$row['date_start'].'</td>';
            echo '<td>'.$row['date_done'].'</td>';
            echo '<td>'.$row['traning_method'].'</td>';
            echo '<td>'.$row['details'].'</td>';
            echo '<td>
                <button type="button" class="btn btn-success">قبول</button> 
            </td>';
              echo '<td>
                   <button type="button" class="btn btn-danger">رفض</button></td>
            </td>';
            echo '</th>';
        }
        ?>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td><button type="button" class="btn btn-success">قبول</button> 
            <button type="button" class="btn btn-danger">رفض</button></td>
      </tr>

    </tbody>
  </table>
    
    
  
  
  <style>
     bg-primary {
  color: #fff;
  background-color: #008080;
    border-radius: 3px;
    font-family:Calibri;
        }
        body{
        background:honeydew;
    }
       .bg-primary {
  color: #fff;
  background-color: #008080;
    border-radius: 3px;
    font-size:30px;
    font-family:Calibri;
    }
    table{
       color: #fff;
  background-color: #008080;
    border-radius: 3px;
    font-family:Calibri; 
    }
</style>
  
