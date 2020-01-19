<?php

declare(strict_types=1);

namespace JsonApi\Components;

/**
 * Class MetaObject
 * @package JsonApi\Components
 */
class MetaObject
{
    /**
     * @var array
     */
    private $data;

    /**
     * MetaObject constructor.
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