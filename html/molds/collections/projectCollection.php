<?php 
/*
Molded by core 
2019-06-12 00:40:28
*/





class projectCollection extends \core\extension\database\Model  {



            public function __construct($name = null) {
                $name = str_replace("Collection","","projectCollection");
                             parent::__construct("project");
            }
        


}


