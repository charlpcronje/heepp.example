<?php 
/*
Molded by core 
2019-06-12 00:40:28
*/





class ProjectItem implements \IteratorAggregate {



            public function getIterator() {
                return new \ArrayIterator($this);
            }
        
            public function __get($property) {
                return $this->$property;
            }
        
            public function __set($property,$value = null) {
                $this->$property = $value;
            }
        


}


