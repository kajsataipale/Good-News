<?php
//
require __DIR__.'/data.php';
require __DIR__.'/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Good News</title>
</head>
<body>
  <!-- My wrapper that goes around the whole content on the page -->
  <div class="wrapper">
    <header>
      <h1><?php echo $welcome ?></h1>
    </header>
    <!-- Here's where I echo out all my information on the page,
    to do so I have used a foreach loop.  -->

    <?php foreach ($posts as $post):?>
      <div class="box">

        <div class="headerinpost">
          <img class="profilepic" src="images/<?php echo $post['author']['id'] ?>.jpg">
          <div class="author"><?php echo $post['alias'] ;?></div>
          <div class="title"> <?php echo $post ['title'].' :';?></div>
        </div>
        <div class="content"><?php echo $post['content'];?></div>

        <div class="footerinbox">
          <div class="date"><?php echo $post['date'];?></div>
          <div class="Fullname"><?php echo 'Author: '. $post['author']['name'];?></div>
        </div>

        <div class="footer2">


          <img type="button" onclick="clickCounter()" class="logo" src="images/like.png" alt="likelogo">
          <div  class="like" id="result"  > <?php echo $post['like'];?></div>
        </div>
    <!-- Code from bootstrap -->
        <div class="col-md-12">
          <ul class="social-network social-circle">
            <li><a href="#" class="icoFacebook" title="Facebook"><img src="images/facebook.png" class="social facebook"></i></a></li>
            <li><a href="#" class="icoTwitter" title="Twitter"><img src="images/twitter.png" class="social twitter"></i></a></li>
            <li><a href="#" class="icoGoogle" title="Google +"><img src="images/google.png" class="social google"></i></a></li>
            <li><a href="#" class="icoLinkedin" title="Linkedin"><img src="images/in.png" class="social linkedin"></i></a></li>
          </ul>
        </div>
      </div>
  <!-- End of bootstrap code -->
    <?php endforeach; ?>
    <!-- The end of the foreach loop -->

    <footer>
      &copy Kajsa Taipale <?php echo  $day; ?>
    </footer>

  </div>

<!-- Here's my javascript code for making the first like "button" work -->

  <script  type="text/javascript" >


  var element = document.getElementById("result");
  localStorage.clickcount=95;
  function clickCounter(){
    if (localStorage.clickcount) {
      localStorage.clickcount = Number(localStorage.clickcount) + 1;
    } else {
      localStorage.clickcount = 1;
    }
    element.innerHTML = localStorage.clickcount;
  }

  window.onload = function() {
    element.innerHTML = localStorage.clickcount;
  }

  </script>



</body>
</html>
