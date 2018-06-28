<?php

if (!function_exists('is_cli')) {
    /**
     * Determine if the script is running in the console.
     * @return bool
     */
    function is_cli()
    {
        return in_array(PHP_SAPI, ['cli', 'phpdbg']);
    }
}
