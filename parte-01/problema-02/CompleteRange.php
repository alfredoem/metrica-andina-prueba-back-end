<?php

class CompleteRange
{
    /**
     * @param array $incArrayNumbers
     * @return array
     */
    public function build($incArrayNumbers = [])
    {
        $low = array_shift($incArrayNumbers);
        $high = array_pop($incArrayNumbers);

        return range($low, $high);
    }
}