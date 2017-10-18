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
  <div class="wrapper">

<?php foreach ($posts as $post):?>
    <div class="box">
      <div class="author"><?php echo $post['author'] ;?></div>
      <div class="content"><?php echo $post['content'];?></div>
      <div class="date"><?php echo $post['date'];?></div>
      <div class="Fullname"><?php echo 'By: '. $post['Fullname']['name'];?></div>
      <div class="like"><?php echo $post['like'];?></div>
    </div>
<?php endforeach; ?>


  </div>

</body>
</html>
