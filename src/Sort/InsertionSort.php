<?php
/**
 * Created by PhpStorm.
 * User: pufan
 * Date: 2019/6/22
 * Time: 下午1:31
 */
namespace Algorithms\Sort;

class InsertionSort extends SortAlgorithm
{
    public function run($sortBy = 'asc') {
        $data = $this->data;
        $length = count($data);
        if ($length < 2) {
            return $data;
        }
        if ($sortBy === 'asc') {
            for ($j = 1; $j < $length; $j++) {
                $key = $data[$j];
                for ($i = $j - 1; $i >= 0 && $data[$i] > $key; $i--) {
                    $data[$i+1] = $data[$i];
                }
                $data[$i+1] = $key;
            }
        } else {
            for ($j = 1; $j < $length; $j++) {
                $key = $data[$j];
                for ($i = $j - 1; $i >= 0 && $data[$i] < $key; $i--) {
                    $data[$i+1] = $data[$i];
                }
                $data[$i+1] = $key;
            }
        }

        return $data;
    }
}