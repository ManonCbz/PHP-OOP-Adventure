<?php


class personnage
{
    private $x = 0;
    private $y = 0;

    public function __construct()
    {

    }

    public function moveTop()
    {
        if($this->checkMoveY()) {
            $this->y -= 1;
        }
    }

    public function moveLeft()
    {
        if ($this->checkMoveX()) {
            $this->x -= 1;
        }
    }

    public function moveRight()
    {
        $this->x += 1;
    }

    public function moveBottom()
    {
        $this->y += 1;
    }

    public function getPosition()
    {
        return [
            "x" => $this->x,
            "y" => $this->y
        ];
    }

    private function checkMoveX()
    {
        return ($this->x>0);
    }

    private function checkMoveY()
    {
        return ($this->y>0);
    }


}