<?php

namespace Kiboko\Component\ETL\Contracts;

interface ExtractingInterface
{
    public function extract(ExtractorInterface $extractor): ExtractingInterface;
}
