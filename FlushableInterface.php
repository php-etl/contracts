<?php

namespace Kiboko\Component\ETL\Contracts;

interface FlushableInterface
{
    public function flush(): ResultBucketInterface;
}
