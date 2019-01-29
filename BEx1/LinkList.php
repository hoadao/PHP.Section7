<?php
/**
 * Created by PhpStorm.
 * User: hoa
 * Date: 29/01/2019
 * Time: 14:32
 */
include_once ('Node.php');
class LinkList
{
    /* Link to the first node in the list */
    private $firstNode;

    /* Link to the last node in the list */
    private $lastNode;

    /* Total nodes in the list */
    private $count;

    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }
    public function insertFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;
        if($this->lastNode == NULL)
            $this->lastNode = $link;

        $this->count++;
    }
    public function insertLast($data)
    {
        if($this->firstNode != NULL)
        {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            $this->count++;
        }
        else
        {
            $this->insertFirst($data);
        }

    }
    public function totalNodes()
    {
        return $this->count;
    }
    public function readList(){
        $listData = array();
        $current = $this->firstNode;
        while($current != NULL){
            array_push($listData,$current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}