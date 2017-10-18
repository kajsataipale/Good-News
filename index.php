<?php
//
require __DIR__.'/functions.php';
require __DIR__.'/data.php';
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
  <h1>Welcome to da blogg</h1>
</header>
 <!-- Here's where I echo out all my information on the page,
 to do so I have used a foreach loop.  -->

<?php foreach ($posts as $post):?>
    <div class="box">
      <img src="images/<?php echo $post['Fullname']['id'] ?>.jpg">
      <div class="author"><?php echo $post['author'] ;?></div>
      <div class="content"><?php echo $post['content'];?></div>
      <div class="footerinbox">
      <div class="date"><?php echo $post['date'];?></div>
      <div class="Fullname"><?php echo 'Author: '. $post['Fullname']['name'];?></div>
      </div>
      <img class="logo" src="images/like.png" alt="likelogo">
      <div class="like"><?php echo $post['like'];?></div>
    </div>
<?php endforeach; ?>
<!-- The end of the foreach loop -->


  </div>


</body>
</html>
