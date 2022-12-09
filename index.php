<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "classroombooking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['clbooking'])){
  $club_name = $_POST['club_name'];
  $e_mail = $_POST['e_mail'];
  $phone = $_POST['phone'];
  $a_student = $_POST['a_student']; 
  $check_in = $_POST['check_in']; 
  $select_room = $_POST['select_room']; 
  $comment = $_POST['comment']; 

  $tableName = 'clbooking';
    $sql = "INSERT INTO $tableName (club_name, e_mail, phone, a_student, check_in, select_room, comment) VALUES
    ('$club_name', '$e_mail', '$phone', '$a_student', '$check_in','$select_room', '$comment')";

    if ($conn->query($sql) === TRUE) {
      echo "Thank you.Your booking has been successful";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
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
    <title>Home</title>
    <link rel="stylesheet" href="style.css" />
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
      <ul>
        <li>
          <a href="#">
            <div class="logo">
              <img src="image/logo.png" /> <br />
              <span class="nav-item"> Class Room Booking</span>
            </div>
          </a>
        </li>
        <li>
          <a href="index.php">
            <i class="fas fa-chart-line"></i>
            <span class="nav-item">Dashbord</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-house-user"></i>
            <span class="nav-item"> Home </span>
          </a>
          <div class="dropdown_menu">
            <ul>
              <li>
                <a href="lab room.php">
                  <i class="fas fa-house"></i>
                  <span class="nav-item">lab room</span>
                </a>
              </li>
              <li>
                <a href="class room.php">
                  <i class="fas fa-house"></i>
                  <span class="nav-item">class room</span>
                </a>
              </li>
              <li>
                <a href="conference room.php">
                  <i class="fas fa-house"></i>
                  <span class="nav-item">conference room</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="calender.php">
            <i class="fas fa-calendar-days"></i>
            <span class="nav-item"> Calender </span>
          </a>
        </li>
        <li>
          <a href="feedback.php">
            <i class="fas fa-comments"></i>
            <span class="nav-item"> Feedback</span>
          </a>
        </li>
        <li>
          <a href="logout.php">
            <i class="fas fa-comments"></i>
            <span class="nav-item"> Log Out</span>
          </a>
        </li>
      </ul>
    </nav>
    <div class="nav-head">
      <h1>Class Room Booking</h1>
    </div>

    
    <form action="" method="post">
      <div class="elem-group">
        <label for="name">Club Name</label>
        <input type="text" id="name" name="club_name" placeholder="club name" required>
      </div>
      <div class="elem-group">
        <label for="email">University E-mail</label>
        <input type="email" id="email" name="e_mail" placeholder="***35-2701@diu.edu.bd" required>
      </div>
      <div class="elem-group">
        <label for="phone">Your Phone</label>
        <input type="tel" id="phone" name="phone" placeholder="498-348-3872" required>
      </div>
     
      <div class="elem-group inlined">
        <label for="adult">Attent Student</label>
        <input type="number" id="adult" name="a_student" placeholder="" min="1" required>
      </div>
     
      <div class="elem-group inlined">
        <label for="checkin-date"> Date</label>
        <input type="date" id="checkin-date" name="check_in" required>
      </div> <br> 
     
      <div class="elem-group">
        <label for="room-selection">Select Room </label>
        <select id="room-selection" name="select_room" required>
            <option value="">Choose a Room...</option>
            <option value="lab-room">Lab Room </option>
            <option value="class-room">Class Room</option>
            <option value="conference-room">Conference-Room</option>
        </select>
      </div>
      <hr>
      <div class="elem-group">
        <label for="message">Anything Else?</label>
        <textarea id="message" name="comment" placeholder="Tell us anything else that might be important." required></textarea>
      </div>
      <br>
      <button name="clbooking" type="submit">Book The Rooms</button>
    </form>


  </body>
</html>
