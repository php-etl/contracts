<?php

namespace Kiboko\Component\ETL\Contracts;

interface TransformerInterface
{
    /**
     * Transforms the data from one format to another.
     */
    public function transform(): \Generator;
}
