<?php


class personnage
{
    use personnageUtils;

    protected $x = 0;
    protected $y = 0;
    protected $actionsList = [];
    protected $nom;
    protected $life;
    const TYPE = "Dragon Rouge";
    const MIN_POSITION = 0;
    const MAX_POSITION = 10;
    protected static $numInstances = 0;

    public function __construct()
    {
        $this->setNom("Ada");
        $this->setLife(100);
        self::$numInstances++;
    }

    public static function getNumInstances()
    {
        return self::$numInstances;
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
            $this->setY($this->y - 1);
            $this->addAction();
        }
    }

    public function moveLeft()
    {
        if ($this->checkMoveX()) {
            $this->setX($this->x - 1);
            $this->addAction();
        }
    }

    public function moveRight()
    {
        if($this->checkMoveX()) {
            $this->setX($this->x + 1);
            $this->addAction();
        }
    }

    public function moveBottom()
    {
        if($this->checkMoveY()) {
            $this->setY($this->y + 1);
            $this->addAction();
        }
    }

    public function getPosition()
    {
        return [
            "x" => $this->x,
            "y" => $this->y
        ];
    }

    public function getActions()
    {
        return $this->actionsList;
    }

    protected function addAction()
    {
        $this->actionsList[] = $this->nom.' se déplace en x : '.$this->x.' / y : '.$this->y;
    }

    private function checkMoveX()
    {
        return ($this->x>=self::MIN_POSITION and $this->x<=self::MAX_POSITION);
    }

    private function checkMoveY()
    {
        return ($this->y>=self::MIN_POSITION and $this->y<=self::MAX_POSITION);
    }

    protected function setX($value)
    {
        if ($value >= self::MIN_POSITION and $value <= self::MAX_POSITION)
        {
            $this->x = $value;
        }
    }

    protected function setY($value)
    {
        if($value >= self::MIN_POSITION and $value <= self::MAX_POSITION)
        {
            $this->y = $value;
        }
    }
}