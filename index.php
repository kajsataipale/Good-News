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
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <title>Good News</title>
</head>
<body>
  <!-- My wrapper that goes around the whole content on the page -->
  <div class="wrapper">
    <header>
      <h1><?php echo $welcome ?></h1>
    </header>


<!-- Code from bootstrap -->
    <div class="col-md-12">
                <ul class="social-network social-circle">
                    <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
    </div>

    <!-- End of bootstrap code -->
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

      </div>
      <script  type="text/javascript" >


      var element = document.getElementById("result");

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
    <?php endforeach; ?>
    <!-- The end of the foreach loop -->

<footer>
  &copy Kajsa Taipale
</footer>

  </div>






</body>
</html>
