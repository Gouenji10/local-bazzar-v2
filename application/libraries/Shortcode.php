<?php 

class Shortcode{
	var $ci;
	function __construct(){
		$this->ci = &get_instance();
    }

    /**
     * add_action shortcode
     */
    public function add_action($event, $name, $fnc=array(), $args=array() ){
        add_hook($event,$name, Modules::load($fnc[0]), $fnc[1],array($args));
        apply_hook($event);
        $this->remove_action($event, $name);
    }

    /**
     * remove_action hook
     */
    public function remove_action($event,$name){
        remove_hook($event,$name);
    }
    

    /** add_shortcode function */

	public function run($body){
        
        preg_match_all("#\[[^\]]*\]#",$body,$shortcodes, PREG_PATTERN_ORDER);
        foreach($shortcodes[0] as $shortcode){
            $scode = $shortcode;
            $content = $this->process($shortcode);
            $body = str_replace($scode,$content,$body);
        }

        return $body;
    }


    /**
     * do shortcode
     */
    

    public function process($shortcode){
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
                    
                    preg_match_all('!\d+!', $args, $matches);
                    
                    $args = $matches[0][0];

                    //variable passed to shortcode function
                    $this->ci->vars->set($fnc,$args);
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