<?php


class dragon extends personnage
{
    private function addAction()
    {
        $this->actionsList[] = "Le dragon vole en x : $this->x"." / y : $this->y";
    }

    public function testAction()
    {
        $this->addAction();
    }

}