<?php


trait personnageUtils
{

    private function generateRandomX()
    {
        return mt_rand(self::MIN_POSITION, self::MAX_POSITION);
    }

    private function generateRandomY()
    {
        return mt_rand(self::MIN_POSITION, self::MAX_POSITION);
    }

    public function placeRandom()
    {
        $this->setX($this->generateRandomX());
        $this->setY($this->generateRandomY());
    }


}