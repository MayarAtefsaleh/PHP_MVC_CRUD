<?php
/**
* front end controller
*/


class App{
    
    protected $controller= "HomeController";
    protected $action = "index";
    protected $params = [];


   public function __construct()
        {
           $this->prepareURL();
           $this->render();
        }

 
     /**
    *  de bt extract controller and method mn al url w m4 bs kda l2a dna lw katba values  >> index/home/20/30 bt5ly al numbers dol in the first : string [0] > 20 , [1] > 30
     */
        private function prepareURL() {

             $url = $_SERVER['REQUEST_URI'];
        if(!empty($url)){
            $url = trim($url,"/");
            $url= explode("/",$url);
              
             $url = array_filter($url);
            
            $this->controller=isset($url[0]) ? ucwords($url[0])."Controller":"HomeController";
            
            $this->action = isset($url[1]) ? $url[1]:"index";

            unset($url[0],$url[1]);

            $this->params = !empty($url) ? array_values($url):[];


            // var_dump($this->params);
        }
        }


         /**
     * render controller and method and send parameters 
     * @return function 
     */

    private function render()
    {
        
        // chaeck if controller is exist
          if(class_exists($this->controller))
        {
            $controller = new $this->controller;
            // check if methos is exist
            if(method_exists($controller,$this->action))
            {
                call_user_func_array([$controller,$this->action],$this->params);
            }
            else 
            {
                echo "Method : " . $this->action ." does not Exist";
                // new View('error');
            }
        }
        else 
        {
            echo "Class : ".$this->controller." Not Found";
            // new View('error');
        }  
        
    }
}
        