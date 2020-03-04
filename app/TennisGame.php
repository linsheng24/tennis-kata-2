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
    if ($this->p1_score == 0 && $this->p2_score == 0) {
      return 'Love-All';
    }

    if ($this->p1_score == 1 && $this->p2_score == 0) {
      return 'Fifteen-Love';
    }
    
    if ($this->p1_score == 2 && $this->p2_score == 0) {
      return 'Thirty-Love';
    }

  }

}
