<?php


class personnage
{
    protected $x = 0;
    protected $y = 0;
    protected $actionsList = [];
    protected $nom;

    // propriété nom et on va définir un setter et un getter hérité par la classe dragon

    public function __construct()
    {

    }

    public function moveTop()
    {
        if($this->checkMoveY()) {
            $this->y -= 1;
            $this->addAction();
        }
    }

    public function moveLeft()
    {
        if ($this->checkMoveX()) {
            $this->x -= 1;
            $this->addAction();
        }
    }

    public function moveRight()
    {
        $this->x += 1;
        $this->addAction();
    }

    public function moveBottom()
    {
        $this->y += 1;
        $this->addAction();
    }

    public function getPosition()
    {
        return [
            "x" => $this->x,
            "y" => $this->y
        ];
    }

    public function getActions(){
        return $this->actionsList;
    }

    private function addAction()
    {
        $this->actionsList[] = "Votre personnage se déplace en x : ".$this->x." / y : ".$this->y;
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