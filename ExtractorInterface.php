<?php

namespace Kiboko\Component\ETL\Contracts;

interface ExtractorInterface
{
    /**
     * Extract data from the given source.
     */
    public function extract(): iterable;
}
