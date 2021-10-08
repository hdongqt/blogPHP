<?php
// require_once "./mvc/Controllers/SinhVienController.php";
class App{
    protected $controller = "Home";
    protected $action = "index";
    protected $params = [];
    function __construct(){
         $arr = $this->urlProcess(); 
         if(!empty($arr)){
             if(file_exists("./mvc/Controllers/".$arr[0].".php")){
               $this->controller = $arr[0];
               unset($arr[0]);
             }
         }
         require_once "./mvc/Controllers/".$this->controller.".php";
         $this->controller = new $this->controller; //
 
        //xu ly actions
         if(isset($arr[1])){
             if(method_exists($this->controller, $arr[1]) ){
                $this->action = $arr[1];
            }
           unset($arr[1]);
         }
    
         //xu ly params
         $this->params = $arr?array_values($arr):[];

       call_user_func_array([$this->controller,$this->action],$this->params);
    }

    // process Url content
    function urlProcess(){
        if(isset($_GET['url'])){
            $u =$_GET['url'];
         return explode("/",filter_var(trim($u,"/")));
        }
    }
}

?>