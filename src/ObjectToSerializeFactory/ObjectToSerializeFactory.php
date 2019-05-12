<?php

namespace PhpBenchmarks\BenchmarkJsonSerializationBigOverload\ObjectToSerializeFactory;

use PhpBenchmarks\BenchmarkJsonSerializationBigOverload\ObjectToSerialize\ObjectToSerialize;
use PhpBenchmarks\BenchmarkJsonSerializationBigOverload\ObjectToSerialize\ObjectToSerializeInterface;

class ObjectToSerializeFactory implements ObjectToSerializeFactoryInterface
{
    /** @return ObjectToSerializeInterface */
    public function create()
    {
        return new ObjectToSerialize();
    }
}
