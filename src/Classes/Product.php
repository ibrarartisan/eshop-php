<?php

namespace App\Classes;

use App\Interfaces\ProductInterface;

class Product implements ProductInterface
{

    private string$_name;
    private string $_articleName;
    private float $_price;
    private array $_gallery;
    private string $_type;
    private array $_graduatedPrices;
    private array $_categories;

    public function __construct(/* Request $request */)
    {
        // Can be used to get Request etc...
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->_name;
    }

    /**
     * @param string $name
     * @return Product
     */
    public function setName(string $name): Product
    {
        $this->_name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getArticleName(): string
    {
        return $this->_articleName;
    }

    /**
     * @param string $articleName
     * @return Product
     */
    public function setArticleName(string $articleName): Product
    {
        $this->_articleName = $articleName;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->_price;
    }

    /**
     * @param float $price
     * @return Product
     */
    public function setPrice(float $price): Product
    {
        $this->_price = $price;
        return $this;
    }

    /**
     * @return array
     */
    public function getGallery(): array
    {
        return $this->_gallery;
    }

    /**
     * @param array $gallery
     * @return Product
     */
    public function setGallery(array $gallery): Product
    {
        $this->_gallery = $gallery;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->_type;
    }

    /**
     * @param string $type
     * @return Product
     */
    public function setType(string $type): Product
    {
        $this->_type = $type;
        return $this;
    }

    /**
     * @return array
     */
    public function getGraduatedPrices(): array
    {
        return $this->_graduatedPrices;
    }

    /**
     * @param array $graduatedPrices
     * @return Product
     */
    public function setGraduatedPrices(array $graduatedPrices): Product
    {
        $this->_graduatedPrices = $graduatedPrices;
        return $this;
    }

    /**
     * @return array
     */
    public function getCategories(): array
    {
        return $this->_categories;
    }

    /**
     * @param array $categories
     * @return Product
     */
    public function setCategories(array $categories): Product
    {
        $this->_categories = $categories;
        return $this;
    }



    /**
     * @return bool
     */
    public function mustImplementThisMethod(): bool
    {
        // TODO: Implement mustImplementThisMethod() method.
        return true;
    }
}