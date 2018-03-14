<?php

/*
 *
 * (c) Kajsa Taipale.
 *
 */

declare(strict_types=1);

// My array with all the information that I want on my page.
// every array has an aditional array whitin it.
// So that I can link an id to an author.

$welcome='Welcome to da blog';
$day=date('Y-m-d ');

$posts = [
  ['alias' => 'Batman',
  'title'=> 'Let\'s all be heroes',
  'author' => ['id'=>'001',
  'name' => 'Bruce Wayne'],
  'content' =>'Hero can be anyone.
  Even a man knowing something as
  simple and reassuring as putting a coat around a young boy
  shoulders to let him
  know the world hadn\'t ended.',
  'date' =>'2011-07-20',
  'like' => 17
],
  ['alias' => 'Albert',
  'title'=> 'What is education?',
  'author' => ['id'=> '002',
  'name' => 'Albert Einstein'],
  'content' =>'Education is what
  remains after one has forgotten everything he learned in school',
  'date' => '1910-12-18',
  'like' => 93
],

  ['alias'=> 'Leonardo',
  'title'=> 'I love my mother',
  'author' => ['id' => '003',
  'name' => 'Leonardo DiCaprio'],
  'content'=>'My mother is a walking miracle.',
  'date' =>'2009-07-16',
  'like' => 75
],

  ['alias'=> 'Bane',
  'title'=> 'You know nothing Batman',
  'author' => ['id' => '004',
  'name' => 'Tom Hardy'],
  'content' =>'Ooh, you think darkness is your ally?
  You merely adopted the dark, I was born in it. Molded by it.
  I didn\'t see the light until I was already a man.
  By then there was nothing to be but blinded.',
  'date' =>'2012-07-23',
  'like' => 103
],

  ['alias' => 'Barney',
  'title'=> 'Broooo',
  'author' => ['id' => '005',
  'name' => 'Barney Stinson'],
  'content' =>'It\'s going to be legen...wait for it...and I hope you\'re
  not lactose-intolerant cause the second half of that word is...dairy!',
  'date' =>'2013-02-18',
  'like' => 95
],

  ['alias'=>'Batman',
  'title'=> 'Live love learn',
  'author' => ['id'=>'001',
  'name' => 'Bruce Wayne'],
  'content' =>'No guns, no killing.',
  'date' =>'2012-09-20',
  'like' => 12
],

  ['alias'=> 'Albert',
  'title'=> 'The thing about learning',
  'author' => ['id'=> '002',
  'name' => 'Albet Einstein'],
  'content' =>'The only thing that interferes with my learning is my education.',
  'date' =>'1930-10-18',
  'like' => 53
],

  ['alias'=>'Leonardo',
  'title'=> 'No homo',
  'author' => ['id' => '003',
  'name' => 'Leonardo DiCaprio'],
  'content'=>'If I want to go to a party with a few male friends, it doesn\'t
  mean I\'m gay.',
  'date' =>'2010-07-16',
  'like' => 36
],


  ['alias'=>'Bane',
  'title'=> 'I hate Batman',
  'author' => ['id' => '004',
  'name' => 'Tom Hardy'],
  'content' =>'Do you feel in charge?',
  'date' =>'1970-07-21',
  'like' => 98
],

  ['alias'=>'Barney',
  'title'=> 'I\'m awsome',
  'author' => ['id' => '005',
   'name' => 'Barney Stinson'],
  'content' =>'When I\'m sad, I stop being sad, and be awesome instead! True Story..',
  'date' =>'1993-02-18',
  'like' => 104
],

];
