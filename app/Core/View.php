<?php 

class View {
    public static function load($view_name, $view_data = []) {
        $file = VIEWS . $view_name . '.php';
        if (file_exists($file)) {
            // Extract data array to variables in the view scope
            extract($view_data);

            ob_start();
            require_once($file);
            ob_end_flush();
        } else {
            echo "This view: " . $view_name . " does not exist.";
        }
    }
}