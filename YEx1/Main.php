<?php
/**
 * Created by PhpStorm.
 * User: hoa
 * Date: 29/01/2019
 * Time: 14:01
 */
include "ArrayList.php";
$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);

echo $listInteger->get(1);
//echo $listInteger->get(-1);
