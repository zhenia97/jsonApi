<?php

declare(strict_types=1);

namespace JsonApi;

use JsonApi\Components\DataObject;
use JsonApi\Components\MetaObject;

/**
 * Class JsonApi
 * @package JsonApi
 */
class JsonApi
{
    /**
     * @var DataObject
     */
    private $dataObject;

    /**
     * @var MetaObject|null
     */
    private $metaObject;

    /**
     * JsonApi constructor.
     * @param DataObject $dataObject
     * @param MetaObject|null $metaObject
     */
    public function __construct(DataObject $dataObject, MetaObject $metaObject = null)
    {
        $this->dataObject = $dataObject;
        $this->metaObject = $metaObject;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'data' => $this->dataObject->getData(),
            'meta' => $this->dataObject !== null ? $this->dataObject->getData() : [],
        ];
    }
}