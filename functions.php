<?php
declare (strict_types=1);


// This function sort all the blogg posts after time.
// so that the first blog post is at the bottom of the page and the last at the begining.

function sortByDate (array $posts,array $posts1): bool
{
return ($posts)['date'] < ($posts1)['date'];

}

usort($posts,'sortByDate');
