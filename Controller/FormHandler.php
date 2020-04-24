<?php
namespace Controller;

class FormHandler{
    
    public static function store($formData)
    {
        unset($formData['method']);
        print_r($formData);
    }
}