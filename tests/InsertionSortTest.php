<?php
/**
 * Created by PhpStorm.
 * User: pufan
 * Date: 2019/6/22
 * Time: 下午2:40
 */

use Algorithms\Sort\InsertionSort;
use PHPUnit\Framework\TestCase;
require __DIR__ . '/../vendor/autoload.php';

class InsertionSortTest extends TestCase
{
    /**
     * @dataProvider ascSortProvider
     */
    public function testAscSort($inputData,  $expected)
    {
        $sort = new InsertionSort($inputData);
        $outputData = $sort->run('asc');
        $this->assertTrue(arrays_are_similar($outputData, $expected));
    }

    /**
     * @dataProvider descSortProvider
     */
    public function testDescSort($inputData,  $expected)
    {
        $sort = new InsertionSort($inputData);
        $outputData = $sort->run('desc');
        $this->assertTrue(arrays_are_similar($outputData, $expected));
    }

    public function ascSortProvider()
    {
        return [
            [[], []],
            [[0], [0]],
            [[1], [1]],
            [[1,2], [1,2]],
            [[2,1], [1,2]],
            [[3,2,1], [1,2,3]],
            [[5,2,4,6,1,3], [1,2,3,4,5,6]],
        ];
    }

    public function descSortProvider()
    {
        return [
            [[], []],
            [[0], [0]],
            [[1], [1]],
            [[1,2], [2,1]],
            [[2,1], [2,1]],
            [[3,2,1], [3,2,1]],
            [[5,2,4,6,1,3], [6,5,4,3,2,1]],
        ];
    }

}
