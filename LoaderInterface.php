<?php

namespace Kiboko\Component\ETL\Contracts;

interface LoaderInterface
{
    /**
     * Loads data in the given sink.
     */
    public function load(): \Generator;
}
