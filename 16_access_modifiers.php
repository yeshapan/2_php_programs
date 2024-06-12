/*
*public - the property or method can be accessed from everywhere. This is default
*protected - the property or method can be accessed within the class and by classes derived from that class
*private - the property or method can ONLY be accessed within the class
*/

<?php
//in this example we will initialize three properties within class. if we try to set any other than public, error will occur
    class car{
        public $brand;
        protected $model;
        private $color;
    }
    
    $object= new car();
    $object->brand='audi';
    $object->model='s500';  //error
    $object->color='white'; //error
?>
  

<?php
class myclass{
    private function priv_fn(){
        echo "inside private function";
    }
    public function public_fn(){
        return $this->priv_fn();
      //$this is a reserved keyword in PHP that refers to the calling object
    }
}

$object= new myclass();
echo $object->public_fn();
?>
