<?php

namespace Kiboko\Component\ETL\Contracts;

interface LoadingInterface
{
    public function load(LoaderInterface $loader): LoadingInterface;
}
