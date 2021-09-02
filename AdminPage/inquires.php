<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Admin Console Panel  | IGS Society </title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   
<body>

  <div class="sidebar">
    <div class="logo-details">
      <i class=''></i>
      <a href="../AdminPage/index.php"><div class="logo_name">IGS Society</div></a>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="index.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="userProfile.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">User</span>
       </a>
       <span class="tooltip">User</span>
     </li>
     <li>
       <a href="addEvent.php">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Events</span>
       </a>
       <span class="tooltip">Events</span>
     </li>
     <li>
      <a href="inquires.php">
        <i class='bx bx-chat' ></i>
        <span class="links_name">Inquires</span>
      </a>
      <span class="tooltip">Inquires</span>
    </li>
     <li>
       <a href="eventParticipants.php">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Event Participants</span>
       </a>
       <span class="tooltip">Event Participants</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img class="adminlogo" src="../ShareDesign/images/SmallLogo.png" alt="profileImg">
           <div class="name_job">
             <div class="name">IGS Society</div>
             <div class="job">Admin Panel</div>
           </div>
         </div>
         <div>
             <a href="../Home/home.php"><i class='bx bx-log-out' id="log_out"></i></a>
         </div>
     </li>
    </ul>
  </div>

  <section class="home-section">
      <div class="text">Inquires</div>
      <?php
      if(isset($_SESSION['status']))
      {
        echo "<h4>".$_SESSION['status']."</h4>";
        unset($_SESSION['status']);
      }
      ?>
      <form action="hi.php" method="POST">
      <table class ="content-table">

      <thead>
      <tr>
        <th><button type="submit" name="delete" class="btn">Delete</button></th>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
      </tr>
      </thead>
      <?php
      $con=mysqli_connect("localhost","root","","my_contact_db");

      $query=mysqli_query($con,"select * from data");

      while($row=mysqli_fetch_array($query)){

      ?>
      <tbody>
      <tr>
        <td class="text-center"><input type="checkbox" class="input "name="delete_id[]" value="<?php echo $row['id']?>"/></td>
        <td><?=$row['name'];?></td>
        <td><?=$row['email'];?></td>
        <td><?=$row['subject'];?></td>
        <td><?=$row['msg'];?></td>
      </tr>
      </tbody>
      <?php } ?>
      </table>
      </form>
  </section>
  <script src="script.js"></script>   
</body>
</html>
