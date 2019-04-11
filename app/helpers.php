<?php
if (! function_exists('gen_url')) {
    function gen_url($str)
    {
        return  implode("-", explode(" ", strtolower($str)));
    }
}
