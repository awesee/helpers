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

if (!function_exists('dump')) {
    /**
     * Format print
     * dump($arg, 1, '', 0, true);
     * @param mixed ...$args
     */
    function dump(...$args)
    {
        $delimiters = is_cli() ? ['', PHP_EOL] : ['<pre>', '</pre>'];
        $i = func_num_args() - 1;
        foreach ($args as $k => $arg) {
            if ($k == $i && is_bool($arg) && $arg) {
                exit();
            }
            echo $delimiters[0];
            if (empty($arg) || is_bool($arg)) {
                $arg = json_encode($arg);
            }
            print_r($arg);
            echo $delimiters[1];
        }
    }
}
