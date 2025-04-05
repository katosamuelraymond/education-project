<?php
class app {

    protected $controller = '_404';
    protected $method = 'index';
    public static $page = '_404';

    public function __construct() {
        $arr = $this->getURL();

        // Use __DIR__ for absolute paths
        $filename = __DIR__ . "/../controllers/" . ucfirst($arr[0]) . ".php";

        if (file_exists($filename)) {
            require $filename;
            $this->controller = $arr[0];
            self::$page = $arr[0];
        } else {
            // Corrected syntax for require
            require __DIR__ . "/../controllers/" . $this->controller . ".php";
        }

        $mycontroller = new $this->controller();
        $mymethod = $arr[1] ?? $this->method;

        if (!empty($arr[1])) {
            if (method_exists($mycontroller, strtolower($mymethod))) {
                $this->method = strtolower($mymethod);
                unset($arr[1]);
            }
        }
        echo "<pre>";
print_r($arr);
echo "</pre>";

        $arr = array_values($arr);
        call_user_func_array([$mycontroller, $this->method], $arr);
    }

    private function getURL() {
        $url = $_GET['url'] ?? "home";
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode("/", $url);
        return $url;
    }
}