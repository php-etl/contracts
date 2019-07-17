<?php

namespace Kiboko\Component\ETL\Contracts;

interface TransformingInterface
{
    public function transform(TransformerInterface $transformer): TransformingInterface;
}
