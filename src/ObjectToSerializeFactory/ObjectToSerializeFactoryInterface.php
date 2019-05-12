<?php

namespace PhpBenchmarks\BenchmarkJsonSerializationBigOverload\ObjectToSerializeFactory;

use PhpBenchmarks\BenchmarkJsonSerializationBigOverload\ObjectToSerialize\ObjectToSerializeInterface;

interface ObjectToSerializeFactoryInterface
{
    /** @return ObjectToSerializeInterface */
    public function create();
}
