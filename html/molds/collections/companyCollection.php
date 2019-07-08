<?php 
/*
Molded by core 
2019-06-12 00:40:38
*/





class companyCollection extends \core\extension\database\Model  {



            public function __construct($name = null) {
                $name = str_replace("Collection","","companyCollection");
                             parent::__construct("company");
            }
        


}


