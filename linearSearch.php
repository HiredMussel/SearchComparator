<?php

function linearSearch($needle, $haystack) {
    for($i = 0; $i < count($haystack); $i++) {
            if ($haystack[$i] === $needle) {
                return $i;
            }
        }
    return -1;
}
