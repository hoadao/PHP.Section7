<?php
/**
 * Created by PhpStorm.
 * User: hoa
 * Date: 29/01/2019
 * Time: 15:38
 */

class MyList
{
    public $arrayList;
    public function __construct($arr = "")
    {
        if (is_array($arr) == true)
            $this->arrayList = $arr;
        else
            $this->arrayList = array();
    }
    public function add($obj)
    {
        array_push($this->arrayList, $obj);
    }
    public function isEmpty()
    {
        if (count($this->arrayList) == 0) {
            return true;
        }
        return false;
    }
    public function remove($index)
    {
        if ($this->isInteger($index)) {
            $newArrayList = array();
            for ($i = 0; $i < $this->size(); $i++)
                if ($index != $i) $newArrayList[] = $this->get($i);
            $this->arrayList = $newArrayList;
        } else {
            die("ERROR in ArrayList.remove <br> Integer value required");
        }
    }
    public function size()
    {
        return count($this->arrayList);
    }
    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }

    public function isInteger($toCheck) {
        return preg_match("/^[0-9]+$/", $toCheck);
    }
}