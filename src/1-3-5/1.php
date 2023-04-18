<?php

interface PriceInterface
{
    public function getPrice(): int;
    public function setPrice(int $price): void;
}

interface QuantityInterface
{
    public function getQuantity(): int;
    public function setQuantity(int $quantity): void;
}

interface DateCreateInterface
{
    public function getDateCreate(): DateTime;
    public function setDateCreate(DateTime $datetime): void;
}

trait Price
{
    private int $price;

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }
}

trait Quantity
{
    private int $quantity;

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }
}

trait DateCreate
{
    private DateTime $dateCreate;

    public function getDateCreate(): DateTime
    {
        return $this->dateCreate;
    }

    public function setDateCreate(DateTime $datetime): void
    {
        $this->dateCreate = $datetime;
    }
}

class Packet1 implements PriceInterface, QuantityInterface
{
    use Price;
    use Quantity;
}

class Packet2 implements QuantityInterface, DateCreateInterface
{
    use Quantity;
    use DateCreate;
}
