<?php
declare (strict_types=1);


// This function sort all the blogg posts after time.

// $day= date("D, d M Y H:i:s O", strtotime($date));

function sortByDate ($posts, $posts1)
{
return ($posts)['date'] < ($posts1)['date'];

}

usort($posts,'sortByDate');
