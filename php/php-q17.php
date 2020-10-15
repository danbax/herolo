<?php
/**
Suppose that you have to implement a class named Dragonball. This class must have an
attribute named ballCount (which starts from 0) and a method iFoundaBall.
When iFoundaBall is called, ballCount is increased by one. If the value of ballCount is equal to
seven, then the message You can ask your wish is printed, and ballCount is reset to 0. How
would you implement this class
**/

/** Confession: just implemented this function yesterday in another job interview */

class DragonBall{
    private $ballCount,$maxBallCount;

    function __construct() {
        $this->maxBallCount=7;
        $this->ballCount = 0;
    }

    /** increase the ball count by 1, if there is 7 balls print on the screen `You can ask your wish` */
    public function iFoundBall(){
        $this->ballCount++;

        if($this->ballCount == $this->maxBallCount){
            echo "You can ask your wish";
            $this->ballCount=0;
        }
    }
}

/** execute */
$balls = new DragonBall();
for($i=0;$i<8;$i++){
    echo 'found ball number '.$i.'<br>';
    $balls->iFoundBall();
}
