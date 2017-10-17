<?php
declare (strict_types=1);


// $day= date("D, d M Y H:i:s O", strtotime($date));

function sortByDate ($a, $b)
{
return (int)$a['date'] > (int) $b['date'];

$a ['date'];
$b ['date'];
}

usort($posts , 'sortByDate');

foreach ($posts as $post) {
  echo $post ['date'].'<br>';}

// while($row = mysql_fetch_array($result)) {
//     extract($row);
//
//     $rssfeed .= '<item>';
//     $rssfeed .= '<title>' . $title . '</title>';
//     $rssfeed .= '<description>' . $description . '</description>';
//     $rssfeed .= '<link>' . $link . '</link>';
//     $rssfeed .= '<pubDate>' . date("D, d M Y H:i:s O", strtotime($date)) . '</pubDate>';
//     $rssfeed .= '</item>';
