<?php
    include 'Includes/require_session.php';
    include 'Includes/header.html';
    include 'Includes/nav.html';
    include 'Includes/sidenav.html';
    include 'subwebsites/home.html';
    include 'Includes/footer.html';
?>


<body>
      <div class="slider">
    <ul class="slides">
      <li>
        <img src="./img/back5.jpg" > <!-- random image -->
        <div class="caption center-align">
          <h1 class="darken blue-text blue-lighten-4">Welcome to Online Printing!</h1>
          <h5 class="darken blue-text blue-lighten-4">a website where you send it we print it.</h5>
        </div>
      </li>
       <li>
        <img src="./img/back1.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3 class="darken blue-text blue-lighten-4">We do the printing for you!</h3>
          <h5 class="darken blue-text blue-lighten-4">to give you time to do other stuff.</h5>
        </div>
      </li>
       <li>
        <img src="./img/back2.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3 class="darken blue-text blue-lighten-4">We accept the following file formats:</h3>
          <h5 class="darken blue-text blue-lighten-4">.docx, .pdf, .png, .jpeg</h5>
        </div>
      </li>
       <li>
        <img src="./img/back3.jpg" style="width:100%; padding-left: 80%; padding-top: 40%"> <!-- random image -->
        <div class="caption center-align">
          <h3 class="light black-text black-lighten-4">What are you waiting for?</h3>
          <a class="waves-effect waves-light btn" href="upload.php">start uploading</a>
        </div>
      </li>              

    </ul>
  </div>
  
<script>
$(document).ready(function(){
    $('.slider').slider();
  });            
        </script>
</body>