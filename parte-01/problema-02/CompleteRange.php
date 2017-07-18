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

$CompleteRange = new CompleteRange;
echo json_encode($CompleteRange->build([55, 58, 60]));