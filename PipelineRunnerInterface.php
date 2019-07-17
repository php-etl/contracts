<?php

namespace Kiboko\Component\ETL\Contracts;

interface PipelineRunnerInterface
{
    public function run(\Iterator $source, \Generator $async): \Iterator;
}
