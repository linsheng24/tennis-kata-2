<?php
namespace App;

class TennisGame
{
 
  private $p1_score = 0;
  private $p2_score = 0;

  public function firstPlayerScore()
  {
    $this->p1_score++;
  }
  
  public function secondPlayerScore()
  {
    $this->p2_score++;
  }

  public function score()
  {

    $scoreLookup = [
      0 => 'Love',
      1 => 'Fifteen',
      2 => 'Thirty',
      3 => 'Forty'
    ];

    if ($this->p1_score == 3 && $this->p2_score == 3) {
      return 'Deuce';
    }
    
    if ($this->p1_score == 4 && $this->p2_score == 4) {
      return 'Deuce';
    }

    if ($this->p1_score == $this->p2_score) {
      return $scoreLookup[$this->p1_score] . '-All';
    }

    return $scoreLookup[$this->p1_score] . '-' . $scoreLookup[$this->p2_score];

  }

}
