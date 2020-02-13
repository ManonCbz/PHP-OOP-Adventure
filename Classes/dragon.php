<?php


class dragon extends personnage
{

    const TYPE = "Dragon Bleu";

    public function __construct()               // -> Ecrase le constructeur du personnage
    {
        parent::__construct();
        echo self::TYPE;                       // Afficher constante dans la classe et classe parent
        echo parent::TYPE;
        $this->setNom("Dragon");
        $this->setLife(500);
    }

    public function testAction()
    {
        $this->addAction();
    }

}