<?php

class Httpstatuses
{
    public static function statuses($class = "*")
    {
        $class_files = glob("codes/$class.json");
        
        foreach($class_files as $class_file)
        {
            $class = json_decode(file_get_contents($class_file), true);
            $classes[$class['class']['class']] = $class;
        }
        
        return $classes;
    }
    
    public static function status($code)
    {
        $class = substr($code, 0, 1);
        $class_file = file_get_contents("codes/$class.json");
        
        if(!$class_file)
            return false;
        
        $code_list = json_decode($class_file, true);
        
        return $code_list['codes'][$code] ?: false;
    }

    public static function group($code)
    {
        $class_file = file_get_contents("codes/$code.json");

        if(!$class_file)
            return false;

        $code_list = json_decode($class_file, true);

        return array('desc' => $code_list['class']['title'], 'class' => $code_list['class']['class']) + $code_list['codes'] ?: false;
    }
}