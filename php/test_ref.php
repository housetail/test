<?php
class A{
        protected static $static_var='foo'; 

        public function getStatic(){ 
           $class=new ReflectionClass($this); 
           return $class->getStaticPropertyValue('\0*\0static_var'); 
        } 

        public function getStatic2(){ 
            $class=new ReflectionClass($this); 
            $staticProps=$class->getStaticProperties(); 
			var_dump($staticProps);
            return $staticProps['static_var']; 
        } 

        public function __construct(){ 
              //echo $this->getStatic2(); 
              echo $this->getStatic(); 
        } 
} 

class B extends A{ 
        protected static $static_var='foo2'; 

}

$obj = new B();

