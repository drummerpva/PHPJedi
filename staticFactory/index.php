<?php
final class StaticFactory{
    public static function make($type){
        if($type == "number"){
            return new FormatNumber();
        }
        if($type == "string"){
            return new FormatString();
        }
    }
}
interface FormatterInterface{
    public function format($n);
}
class FormatNumber implements FormatterInterface{
    public function format($n){
        echo "Formatando número: ".$n;
    }
}
class FormatString implements FormatterInterface{
    public function format($n){
        echo "Formatando String: ".$n;
    }
}

$formatter = StaticFactory::make("string");
$formatter->format("Testando!");