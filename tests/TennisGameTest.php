<?php
namespace Tests;

use App\TennisGame;
use PHPUnit\Framework\TestCase;

class TennisGameTest extends TestCase
{
  protected function setUp():void
  {
    parent::setUp();
    $this->game = new TennisGame();
  }

  protected function tearDown():void
  {
    $this->game = null;
  }

  /**
   * @test
   */
  public function test_love_all()
  {
    //Arrange
    $expected = 'Love-All';
    
    //Act
    $actual = $this->game->score();
    
    //Assert
    $this->assertEquals($expected, $actual);
  }
  
  /**
   * @test
   */
  public function test_fifteen_love()
  {
    //Arrange
    $this->game->firstPlayerScore();

    $expected = 'Fifteen-Love';
    //Act
    $actual = $this->game->score();
    
    //Assert
    $this->assertEquals($expected, $actual);
  }
  
  /**
   * @test
   */
  public function test_thirty_love()
  {
    //Arrange
    for($i=0;$i<2;$i++) {
      $this->game->firstPlayerScore();
    }

    $expected = 'Thirty-Love';
    //Act
    $actual = $this->game->score();
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

  /**
   * @test
   */
  public function test_thirty_fifteen()
  {
    //Arrange
    for($i=0;$i<2;$i++) {
      $this->game->firstPlayerScore();
    }

    for($i=0;$i<1;$i++) {
      $this->game->secondPlayerScore();
    }

    $expected = 'Thirty-Fifteen';
    //Act
    $actual = $this->game->score();
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

  /**
   * @test
   */
  public function test_thirty_all()
  {
    //Arrange
    for($i=0;$i<2;$i++) {
      $this->game->firstPlayerScore();
    }

    for($i=0;$i<2;$i++) {
      $this->game->secondPlayerScore();
    }

    $expected = 'Thirty-All';
    //Act
    $actual = $this->game->score();
    
    //Assert
    $this->assertEquals($expected, $actual);
  }
  
  /**
   * @test
   */
  public function test_3vs3_deuce()
  {
    //Arrange
    for($i=0;$i<3;$i++) {
      $this->game->firstPlayerScore();
    }

    for($i=0;$i<3;$i++) {
      $this->game->secondPlayerScore();
    }

    $expected = 'Deuce';
    //Act
    $actual = $this->game->score();
    
    //Assert
    $this->assertEquals($expected, $actual);
  }



}
