<?php
// static data, method
class Test01{
    public const U_THAILAND = "SAU";


    public static $data = "100";
    public $info = "200";
    
    public static function showWow(){

        // $this->info = "888";
        self::$data = "999";
        echo "Wow.....<br>";
    }

    public function showHi(){
        echo self::U_THAILAND . "<br>";
        $this->info = "888";
        self::$data = "999";
        self::showWow();
        echo "Hi.....<br>";        
    }
}

Test01::$data = "100";
echo Test01::$data . "<br>";

Test01::showWow();