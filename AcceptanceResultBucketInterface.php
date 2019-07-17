<?php

namespace Kiboko\Component\ETL\Contracts;

interface AcceptanceResultBucketInterface extends ResultBucketInterface
{
    public function walkAcceptance(): iterable;
}
