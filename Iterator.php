<?php
class sample implements Iterator
{
    private $_items = array(1,2,3,4,5,6,7);
 
    public function __construct() {
                  ;//void
    }
    public function rewind() { reset($this->_items); }
    public function current() { return current($this->_items); }
    public function key() { return key($this->_items); }
    public function next() { return next($this->_items); }
    public function valid() { return ( $this->current() !== false ); }
}
 
$sa = new sample();
foreach($sa as $key => $val){
    print $key . "=>" .$val."\n";
}


// vim600:ts=4 st=4 foldmethod=marker foldmarker=<<<,>>>
// vim600:syn=php commentstring=//%s
