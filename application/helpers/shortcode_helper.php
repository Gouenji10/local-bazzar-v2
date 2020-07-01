<?php 

if(!function_exists('do_shortcode')){
    function do_shortcode($shortcode){
        $ci = &get_instance();
        {
            $scode = $shortcode;
            $shortcode = substr($shortcode, 1, -1);
            $extract = explode(' ',$shortcode);
            
            $i = 0;
            foreach($extract as $ext){
                if($i == 0){
                    $module = $ext;
                }else{
                    $arg = explode('=',$ext);
                    $fnc = $arg[0];
                    if($arg[1]){
                        $args = $arg[1];
                        
                        $args = substr($args, 1, -1);
                        //$args = str_replace('"','',$args);
                        //$args = str_replace("'","",$args);
    
                        //variable passed to shortcode function
                        $ci->vars->set($fnc,$args);
                    }
                }
    
                $i++;
            }
    
            ob_start();
            
            apply_hook($module);
            
            $content = ob_get_contents();
            ob_end_clean();
            return $content;
        }
    }

}


if(!function_exists('add_action')){
    function add_action($event, $name, $class, $args){
        $ci = &get_instance();
        return $ci->shortcode->add_action($event, $name, $class, $args);
    }

}