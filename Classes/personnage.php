<?php


class personnage
{
    protected $x = 0;
    protected $y = 0;
    protected $actionsList = [];
    protected $nom;
    protected $life;
    const TYPE = "Dragon Rouge";
    const MIN_POSITION = 0;

    public function __construct()
    {
        $this->setNom("Alda");
        $this->setLife(100);
    }

    public function setLife($life)
    {
        $this->life=$life;
    }

    public function getLife()
    {
        return $this->life;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getNom()
    {
        return $this->nom;
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

    protected function addAction()
    {
        $this->actionsList[] = $this->nom.' se déplace en x : '.$this->x.' / y : '.$this->y;
    }

    private function checkMoveX()
    {
        return ($this->x>self::MIN_POSITION);
    }

    private function checkMoveY()
    {
        return ($this->y>self::MIN_POSITION);
    }


}