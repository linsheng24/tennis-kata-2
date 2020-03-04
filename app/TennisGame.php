<?php
namespace App;

class TennisGame
{
 
  private $p1_score = 0;
  private $p2_score = 0;

  public function score()
  {
    if ($this->p1_score == 0 && $this->p2_score == 0) {
      return 'Love-All';
    }
  }

}
