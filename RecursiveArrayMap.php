<?php
// Array Map Recursive, multidimensional array

$rMap = new RecursiveArrayMap();
$b = $rMap->map([1, 2, 3, [1, 2, 3, [1, 2, 3]]], function ($e) {
    return $e**2;
});

print_r($b);


class RecursiveArrayMap
{

    public function map($params, $callback)
    {
        foreach ($params as  &$param) {
		     $param = is_array($param) ? $this->map($param, $callback): $callback($param);
        }
        return $params;
    }
}
