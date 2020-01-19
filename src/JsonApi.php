<?php

declare(strict_types=1);

namespace JsonApi;

use JsonApi\Components\DataObject;
use JsonApi\Components\ErrorObject;
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
     * @var ErrorObject|null
     */
    private $errorObject;

    /**
     * JsonApi constructor.
     * @param DataObject $dataObject
     * @param MetaObject|null $metaObject
     * @param ErrorObject|null $errorObject
     */
    public function __construct(DataObject $dataObject, MetaObject $metaObject = null, ErrorObject $errorObject = null)
    {
        $this->dataObject = $dataObject;
        $this->metaObject = $metaObject;
        $this->errorObject = $errorObject;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $jsonApi = [
            'data' => $this->dataObject->getData(),
        ];

        if ($this->metaObject !== null) {
            $jsonApi['meta'] = $this->dataObject->getData();
        }

        if ($this->errorObject !== null) {
            $jsonApi['errors'] = $this->errorObject->getData();
        }

        return $jsonApi;
    }
}