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

}
