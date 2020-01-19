<?php

declare(strict_types=1);

namespace JsonApi\Components;

/**
 * Class DataObject
 * @package JsonApi\Components
 */
class DataObject
{
    /**
     * @var array
     */
    private $data;

    /**
     * DataObject constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }
}