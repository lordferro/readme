<?php


spl_autoload_register(
    function ($class) {
        $path = explode("\\", $class)[1] . ".php";

        require_once "$path";
    }
);

// use App;

$fields = [
    new App\Text('textField'),
    new App\Checkbox('checkboxField'),
    new App\Radio('radioField'),
];

foreach($fields as $field) {
    echo $field->render() . '<br/>';
}