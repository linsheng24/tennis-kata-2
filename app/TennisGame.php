<?php
namespace App;

class TennisGame
{
  public function getGameScore($p1_score, $p2_score)
  {
    if ($p1_score == 0 && $p2_score == 0) {
      return 'Love-All';
    }
    // if ($p1_score == 1 && $p2_score == 0) {
    //   return 'Fifteen-Love';
    // }
    // if ($p1_score == 0 && $p2_score == 1) {
    //   return 'Love-Fifteen';
    // }

    if ($p1_score + $p2_score == 1) {
      return $this->getTextFromScore($p1_score).'-'.$this->getTextFromScore($p2_score);
    }

  }
  
  private function getTextFromScore($score)
  {
    switch ($score) {
      case 0:
        $result = 'Love';
        break;
      case 1:
        $result = 'Fifteen';
        break;
    }
    return $result;
  }
}
