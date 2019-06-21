<?php

class Session {
    public static function exists($name) {
        return (isset($_SESSION[$name])) ? true : false;
    }

    public static function put($name, $value) {
        $_SESSION[$name] = $value;
        return self::get($name);
    }

    public static function get($name) {
        return $_SESSION[$name];
    }

    public static function delete($name) {
        if (self::exists($name)) {
            unset($_SESSION[$name]);
        }
    }

    public static function destroy() {
        session_unset();
        session_destroy();
    }

    public static function getSession($name, $string = '') {
        if (self::exists($name)) {
           return self::get($name);
        } 
        else {
            self::put($name, $string);
        }
    }
}