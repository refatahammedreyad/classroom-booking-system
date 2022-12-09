<?php
$host = "127.0.0.1"; //IP of your database
$userName = "root"; //Username for database login
$userPass = ""; //Password associated with the username
$database = "classroombooking"; //Your database name

$connectQuery = mysqli_connect($host,$userName,$userPass,$database);

if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}else{
    $selectQuery = "SELECT * FROM `clbooking` ORDER BY `id` DESC";
    $result = mysqli_query($connectQuery,$selectQuery);
    if(mysqli_num_rows($result) > 0){
    }else{
        $msg = "No Record found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Dashbord</title>
    <link rel="stylesheet" href="cd.css" />
    <link
      rel="stylesheet"
      href="https://fontawesome.com/search?q=facebook&o=r"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />

</head>
<body>
    <nav>
        <ul >
          <li>
            <a href="#">
              <div class="logo">
                <img src="img2/logo.png" /> <br />
                <span class="nav-item"> Admin Panel</span>
              </div>
            </a>
          </li>
          <li>
            <a href="class_dashbord.php">
              <i class="fas fa-chart-line"></i>
              <span class="nav-item">Dashbord</span>
            </a>
          </li>      
          <li>
            <a href="logout.php">
                <i class="fas fa-power-off"></i>
                <span class="nav-item"> log out</span>
            </a>
          </li>
        </ul>
      </nav>
      
      <div class="nav-head">
        <h1>Data</h1>
        <div class="profil-img">
            <img src="img2/logo.png" alt="">
            <h2>Admin....</h2>
        </div>
      </div>
      
      <table>
        <tr>
           <th>Club Name</th>
           <th>E-mail</th>
           <th>Phone</th>
           <th>Attent Student</th>
           <th>Date</th>
           <th>Select Room</th>
           <th>Comment</th>
       
        </tr>
        <?php
          while($row = mysqli_fetch_assoc($result)){?>
        <tr>
        <td> <?php echo $row['club_name']; ?></td>
            <td> <?php echo $row['e_mail']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['a_student']; ?></td>
            <td><?php echo $row['check_in']; ?></td>
            <td><?php echo $row['select_room']; ?></td>
            <td><?php echo $row['comment']; ?></td>
         </tr>
         <?php }?> 
      </table>
</body>
</html>