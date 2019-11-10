<?php
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['mail'];
  $tel=$_POST['no'];
  $exp=$_POST['exp'];
  $lan=$_POST['lang'];
  $plan=$_POST['plang'];
  $add=$_POST['add'];
  $pincode=$_POST['pincode'];


  if(isset($_POST['submit']))
  {
    echo "Thank you for applying<br><br>";

    echo "Your name is".$fname." ".$lname."<br><br>";
    echo "<table border='1'><th>Email</th>
                            <th>Mobile</th>
                            <th>Experience</th>
                            <th>Languages</th>
                            <th>Programming languages</th>
                            <th>Address</th>";
    echo "<tr><td>".$email."</td>"."<td>".$tel."</td>"."<td>".$exp."</td>"."<td>".$lan."</td>"."<td>".$plan."</td>"."<td>".$add."</td></tr>";
    echo "</table>";

  }
  ?>
