<?php

namespace Navigation5\JetBrains;

class FindUsagesSample
{
    public function makeUseOfFunction()
    {
        $target = new FindUsages();
        $target->adjust(5, 3);
        $target->adjust(3, 9);
    }
}
