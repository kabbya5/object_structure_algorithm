<?php 
class Node {
    public $data;
    public $next;

    public function __construct($data){
        $this->data = $data;
        $this->next = null;
    }
}

class linkedList {
    public $head;

    public function __construct(){
        $this->head = null;
    }
    public function isEmpty(){
        return $this->head === null;
    }
    public function insert($data){
        $newNode = new Node($data);
        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    public function display(){
        $current  = $this->head;
        while($current !== null){
            echo $current->data . ' ';
            $current = $current->next;
        }
    }

}

$list = new LinkedList();
$list->insert(3);
$list->insert(7);
$list->insert(1);

$list->display();