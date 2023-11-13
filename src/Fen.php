<?php declare(strict_types=1);
namespace AramHamo;

Class Fen{
  public static $SampleFenArray = [
    'r','n','b','q','k','b','n','r',
    'p','p','p','p','p','p','p','p',
    '','','','','','','','',
    '','','','','','','','',
    '','','','','','','','',
    '','','','','','','','',
    'P','P','P','P','P','P','P','P',
    'R','N','B','Q','K','B','N','R'
  ];
  public static function Generate(Array $board):String{
    $empty_squares = 0;
    $line_counter = 0;
    $previous_square = null;

    $fen = "";
    foreach($board as $square){
      if($line_counter == 8 ){
        if($empty_squares !== 0){
          $fen .= $empty_squares; 
        }
        $fen .= "/";
        $line_counter = 0;
        $empty_squares = 0;
      }
    
      if($square == ''){
        $empty_squares++;
      }else{
        if($previous_square == '' && $square !== ''){
          if($empty_squares !== 0){
            $fen .= $empty_squares;
          }
          $empty_squares = 0;
        }
        $fen .= $square;
      }
      $line_counter++;
      $previous_square = $square;
    
    }
    return $fen;
  }
}
