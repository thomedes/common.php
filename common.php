<?php

function nvl($value, $default) {
    return is_null($value) ? $default : $value;
}

function anvl($key, $array, $default) {
    return (array_key_exists($key, $array)
            ? nvl($array[$key], $default)
            : $default);
}
