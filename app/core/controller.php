<?php
class Controller {
    public function view($view, $data = []) {
        // Extract data to be used in the view
        extract($data);

        // Use __DIR__ to construct the absolute path to the view file
        $filename = __DIR__ . "/../views/" . $view . ".view.php";

        if (file_exists($filename)) {
            require $filename;
        } else {
            // Display an error message if the view file is not found
            echo "Could not find view file: " . $filename;
        }
    }
}