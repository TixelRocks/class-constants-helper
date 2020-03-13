<?php

if (! function_exists('constants')) {
    /*
     * @return bool
     */
    function constants($class, $prefix = '')
    {
        $reflection = new ReflectionClass($class);

        return array_filter($reflection->getConstants(), function($key) use ($prefix)  {
            return preg_match('/^'.preg_quote($prefix).'/', $key);
        }, ARRAY_FILTER_USE_KEY);
    }
}