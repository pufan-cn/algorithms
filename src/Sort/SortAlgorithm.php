<?php
/**
 * Created by PhpStorm.
 * User: pufan
 * Date: 2019/6/22
 * Time: 下午1:33
 */
namespace Algorithms\Sort;

abstract class SortAlgorithm
{
    protected $data;
    function __construct(array $data)
    {
        $this->data = $data;
    }

    abstract function run($sortBy);
}