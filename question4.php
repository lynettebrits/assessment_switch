<?php
class Maths
{
    /**
     * @param float $price
     * @param float $percentage
     * @return mixed
     */
    public function increasePrice(float $price, float $percentage): float
    {
        return $price + ($price * $percentage / 100);
    }
}

class WidgetMath extends Maths
{
    public function increasePrice(float $price, float $percentage): float
    {
        return $price + ($price * $percentage / 100);
    }
}

class Widget
{
    /** @var float  */
    public $price;

    /** @var float */
    public $newPrice;

    /** @var WidgetMath */
    private $math;

    public function __construct(float $priceValue)
    {
        $this->math = new WidgetMath();

        $this->price = $this->setPrice($priceValue);
        $this->newPrice = $this->setNewPrice();
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice(float $price)
    {
        return $price;
    }

    /**
     * @return float
     */
    public function getNewPrice(): float
    {
        return $this->newPrice;
    }

    /**
     * @return float\
     */
    public function setNewPrice()
    {
        return $this->math->increasePrice($this->getPrice(), 10);
    }
}

class DoodadMath extends Maths
{

    public function increasePrice(float $price, float $percentage): float
    {
        return $price + ($price * $percentage / 100);
    }
}

class Doodad
{
    /** @var float  */
    public $price;

    /** @var float */
    public $newPrice;

    /** @var DoodadMath */
    private $math;

    public function __construct(float $priceValue)
    {
        $this->math = new DoodadMath();

        $this->price = $this->setPrice($priceValue);
        $this->newPrice = $this->setNewPrice();
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice(float $price)
    {
        return $price;
    }

    /**
     * @return float
     */
    public function getNewPrice(): float
    {
        return $this->newPrice;
    }

    /**
     * @return float\
     */
    public function setNewPrice()
    {
        return $this->math->increasePrice($this->getPrice(), 10);
    }
}

$doodad = new Doodad(50);
echo "<pre>";
print_r($doodad->newPrice);
echo "</pre>";

$widget = new Widget(60.33);
echo "<pre>";
print_r($widget);
echo "</pre>";

