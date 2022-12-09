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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dycalendarjs@1.2.1/css/dycalendar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <title>Calender</title>
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
          <a href="/calender.php">
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
      <h1>Calender</h1>
    </div>

    <div class="c-body">
<div class="container">

  <div class="dycalendar" id="dycalendar"></div> 
  
  <div class="toggle-btn">
    <span class="circle"></span>
  </div>
  </div> 
</div>      
  <script src="https://cdn.jsdelivr.net/npm/dycalendarjs@1.2.1/js/dycalendar.js"></script>
  <script >
    /*codingmaker_*/
let container = document.querySelector(".container");
let toggleBtn = document.querySelector('.toggle-btn');

dycalendar.draw({
   target:'#dycalendar', 
   dayformat: 'full', 
   type: 'month', 
   monthformat: 'full', 
   highlighttoday: true, 
   prevnextbutton: 'show'
});  

toggleBtn.onclick = () =>{
 container.classList.toggle('dark');
 document.body.classList.toggle('background-dark');
};

  </script>
  </body>
</html>
