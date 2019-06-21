<?php

class Redirect {
    public static function to($location = null){

        if(isset($location)){
            header('Location: '. $location);
        }
    }
}