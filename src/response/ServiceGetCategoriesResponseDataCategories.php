<?php

namespace Alexboo\Wooppay\Response;


class ServiceGetCategoriesResponseDataCategories
{
    /**
     * @var int $id;
     */
    public $id;

    /**
     * @var string $name
     */
    public $name;

    /**
     * @var int $tag_id
     */
    public $tag_id;

    /**
     * @var int $parent_id
     */
    public $parent_id;

    /**
     * @var string $picture
     */
    public $picture;

    /**
     * @var string[] $synonyms
     */
    public $synonyms;

    /**
     * @var ServiceGetCategoriesResponseDataServices[]
     */
    public $services;
}