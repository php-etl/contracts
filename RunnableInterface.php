<?php

namespace Kiboko\Component\ETL\Contracts;

interface RunnableInterface
{
    public function run(): int;
}
