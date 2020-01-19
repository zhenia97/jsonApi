<?php

declare(strict_types=1);

namespace JsonApi\Components;

/**
 * Class ErrorObject
 * @package JsonApi\Components
 */
class ErrorObject
{
    /**
     * @var array
     */
    private $data;

    /**
     * ErrorObject constructor.
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