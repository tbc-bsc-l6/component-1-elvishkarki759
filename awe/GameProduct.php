<?php


namespace awe;


class GameProduct extends ShopProduct
{
    private $gamepegi;

    public function __construct(
        string $id,
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $gamepegi
    )
    {
        parent::__construct(
            $id,
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->gamepegi = $gamepegi;
    }

    public function getGamePegi()
    {
        return $this->gamepegi;
    }
}