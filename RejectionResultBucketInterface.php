<?php

namespace Kiboko\Component\ETL\Contracts;

interface RejectionResultBucketInterface extends ResultBucketInterface
{
    public function walkRejection(): iterable;
}
