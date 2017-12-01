<?php

namespace Utils;

class Arrays
{
    /**
     * @var array $array
     */
    protected $array;

    /**
     * Given an array of integers and a desired sum,
     * return the first two occuring elements which could be added together to form the desired result.
     * @example Utils\Array::findPair(7, [1, 4, 5, 3, 6]) would return [4, 3] or [1, 6]
     *
     * @param  int   $sum  Desired sum
     * @return array|bool Array of mathing elements or FALSE
     * @throws \DomainException
     */
    public function findPair(int $sum) :array
    {
        if(!is_numeric($sum)){
            throw new \DomainException('Enter value is not number.');
        }
        $arr = $this->array;
        $results = [];
        $map = [];
        $size = sizeof($arr);
        for($x = 0; $x < $size; $x++) {
            $n = $arr[$x];
            if (!array_key_exists($n, $map)) $map[$n] = 0;
            $map[$n]++;
        }
        $size = sizeof($map);
        foreach($map as $n => $c) {
            $w = $sum - $n;
            if (!array_key_exists($w, $map)) continue;
            $map[$n]--;
            $map[$w]--;
            if ($map[$n] < 0 || $map[$w] < 0) {
                $map[$n]++;
                $map[$w]++;
                continue;
            }
            $results[] = [$n,$w];
        }
        return $results;
    }

    /**
     * Sort by custom function
     *
     * @param  callable $sorting Function providing an algorythm
     * @return array Sorted array
     * @throws \DomainException
     */
    public function sortBy(callable $sorting): array
    {
        if(!is_callable($sorting)){
            throw new \DomainException('Unknown sorting algorithm.');
        }

        $numbers = $this->array;
        $sorted = call_user_func($sorting,$numbers);

        return $sorted;
    }

    public function bubbleAlgorithm(array $array) :array
    {
        $numbers = $array;
        $bubble_sort = [];
        $array_size = count($numbers);
        for ( $i = 0; $i < $array_size; $i++ ) {
            for ($j = 0; $j < $array_size; $j++ ) {
                if ($numbers[$i] < $numbers[$j]) {
                    $temp = $numbers[$i];
                    $numbers[$i] = $numbers[$j];
                    $numbers[$j] = $temp;
                }
            }
        }
        for( $i = 0; $i < $array_size; $i++ ) {
            array_push($bubble_sort, $numbers[$i]);
        }
        return $bubble_sort;
    }

    /**
     * Sort by key length
     * @param array
     * @return array Sorted array
     */
    public function sortByKeyLength() :array
    {
        $array = $this->array;
        ksort($array);
        foreach ($array as $key => $val) {
            $array[$key] = $val;
        }
        return $array;
    }

}
