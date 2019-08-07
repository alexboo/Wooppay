<?php

namespace Alexboo\Wooppay\Request;


class BaseRequest
{
    public function __construct(array $data = [])
    {
        /**
         * Set data to object
         */
        if (!empty($data)) {
            foreach ($data as $property => $value) {
                //if (property_exists($this, $property)) {
                    $this->{$property} = $value;
                //}
            }
        }
    }
}