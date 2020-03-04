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

  public function score()
  {

    $scoreLookup = [
      0 => 'Love',
      1 => 'Fifteen',
      2 => 'Thirty',
      3 => 'Forty'
    ];

    if ($this->p1_score == 0 && $this->p2_score == 0) {
      return 'Love-All';
    }

    if ($this->p2_score == 0) {
      return $scoreLookup[$this->p1_score] . '-Love';
    }

  }

}
