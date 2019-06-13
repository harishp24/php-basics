<?php
class Operations { 
      
    static $count; 
      
    public static function getCount() { 
        return self::$count++; 
    } 
}

Operations::$count = 1; 
  
for($i = 0; $i < 5; ++$i) { 
    echo 'The next value is: '.  
    Operations::getCount() . "\n"; 
}