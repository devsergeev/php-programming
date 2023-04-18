<?php

// Легко добавлять новый паккет, собирая его из уже существующих "кусочков" трейтов (не повторяйся)

// Возможно это "ложное дублирование", т.е. не истинное - короче, надо думать перед тем как такую конструкцию делать в
// реальном проекте. Тут же просто пример, пример как один кусок кода встраивается во множество классов

// Использование полей в трейте - это потенциальная возможность пересечения с полями класса (родительсокго класса)

// Имена трейта могут по семантике не подходить для класса (softDelete() delete_at = NOW(), а в Usere надо delete())
// тогда придется обернуть метод трейта в классе методом delete - вместо этой многословности проще сразу добавить метод

// public const DEFAULT_PRICE = 1; - Начиная с версии PHP 8.2.0, трейты могут также определять константы
// abstract public function getTotalPrice(); - так можно заставить класс реализовать метод

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

class Packet3 // implements ..., ...
{
    // use ...;
    // use ...;
    // ...
}

// class Packet4 и т.д.
