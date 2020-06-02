<?php

function binarySearch($needle, $haystack, $start, $end) {
    $median = floor(($start + $end)/2);
    if ($start > $end) {
        return -1;
    }
    if ($needle === $haystack[$median]) {
        return $median;
    } else if ($needle < $haystack[$median]) {
        return binarySearch($needle, $haystack, $start, $median - 1);
    } else {
        return binarySearch($needle, $haystack, $median + 1, $end);
    }

}