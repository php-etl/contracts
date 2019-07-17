<?php

namespace Kiboko\Component\ETL\Contracts;

interface WalkableInterface
{
    public function walk(): \Iterator;
}
