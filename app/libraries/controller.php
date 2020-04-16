<?php
/* 
 * Base Controller
 * Loads the models and views
 */
 class Controller
 {
    // Load model
    public function model($model)
    {
        // Require model file
        require_once '../app/models/'.$model.'.php';

        // instantiate model
        return new $model();
    }

    // Load view
    public function view($view, $data = [])
    {
        // Check if view file exits
        if(file_exists('../app/views/'.$view.'.php')){
            require_once '../app/views/'.$view.'.php';
        }else{
            // View doesnot exists
            die('View does not exists');
        }
    }
 }