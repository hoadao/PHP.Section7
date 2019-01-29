<?php
/**
 * Created by PhpStorm.
 * User: hoa
 * Date: 29/01/2019
 * Time: 14:52
 */
include 'LinkList.php';
$list = new LinkList();
$list->insertFirst(1);
$list->insertFirst(2);
$list->insertLast(3);
$data = $list->readList();
echo implode ('-' , $data);