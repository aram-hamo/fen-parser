<?php

$board = [
  'r','n','b','q','k','b','n','r',
  'p','p','p','p','p','p','p','p',
  '','','','','','','','',
  '','','','','','','','',
  '','','','','','','','',
  '','','','','','','','',
  'P','P','P','P','P','P','P','P',
  'R','N','B','Q','K','B','N','R'
];

$empty_squares = 0;
$line_counter = 0;
$previous_square = null;

foreach($board as $square){
  if($line_counter == 8 ){
    if($empty_squares !== 0){
      echo $empty_squares; }
    echo '/';
    $line_counter = 0;
    $empty_squares = 0;
  }

  if($square == ''){
    $empty_squares++;
  }else{
    if($previous_square == '' && $square !== ''){
      if($empty_squares !== 0){
        echo $empty_squares;
      }
      $empty_squares = 0;
    }
    echo $square;
  }
  $line_counter++;
  $previous_square = $square;

}

echo "\n";
