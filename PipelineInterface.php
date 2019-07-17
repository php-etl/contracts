<?php

namespace Kiboko\Component\ETL\Contracts;

interface PipelineInterface extends
    ExtractingInterface,
    TransformingInterface,
    LoadingInterface
{
    public function feed(...$data): void;
}
