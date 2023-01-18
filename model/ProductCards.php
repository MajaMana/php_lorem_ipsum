<?php

namespace model\Item;
class ProductCard
{
    private String $name;
    private String $image;
    private int $price;
    private String $link;
    private String $icon;

    /**
     * @param String $name
     * @param String $image
     * @param string $link
     * @param string $icon
     * @param int $price
     */
    public function __construct(string $name, string $image, int $price, string $link = "https://www.maxserv.com/", string $icon = "gg-arrow-right-o")
    {
        $this->name = $name;
        $this->image = $image;
        $this->link = $link;
        $this->icon = $icon;
        $this->price = $price;
    }

    /**
     * @return String
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return String
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return String
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @return String
     */
    public function getIcon(): string
    {
        return $this->icon;
    }



}