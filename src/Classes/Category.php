<?php

namespace App\Classes;

class Category
{
    private string $_categoryName;
    private array $_categoryProducts;
    private string $_categorySlug;

    /**
     * @return string
     */
    public function getCategoryName(): string
    {
        return $this->_categoryName;
    }

    /**
     * @param string $categoryName
     * @return Category
     */
    public function setCategoryName(string $categoryName): Category
    {
        $this->_categoryName = $categoryName;
        return $this;
    }

    /**
     * @return array
     */
    public function getCategoryProducts(): array
    {
        return $this->_categoryProducts;
    }

    /**
     * @param array $categoryProducts
     * @return Category
     */
    public function setCategoryProducts(array $categoryProducts): Category
    {
        $this->_categoryProducts = $categoryProducts;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategorySlug(): string
    {
        return $this->_categorySlug;
    }

    /**
     * @param string $categorySlug
     * @return Category
     */
    public function setCategorySlug(string $categorySlug): Category
    {
        $this->_categorySlug = $categorySlug;
        return $this;
    }




}