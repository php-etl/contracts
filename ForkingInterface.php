<?php

namespace Kiboko\Component\ETL\Contracts;

interface ForkingInterface
{
    public function fork(callable... $builders): ForkingInterface;
}
