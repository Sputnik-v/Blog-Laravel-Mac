<?php

if (!function_exists('testing')) {
    function testing(string $bool): string
    {
        return $bool . " tree";
    }
}
