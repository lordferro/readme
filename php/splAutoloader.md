// spl_autoload_register(
//     function ($class) {
//         $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';
//         include $path;
//         var_dump($path);
//     }
// );




spl_autoload_register(
    function ($class) {
$path = explode("\\", $class)[1].".php";

        require_once "$path";
    }
);