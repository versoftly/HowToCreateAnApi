<?php

class Adapto {
        
    public function errors () {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        ini_set('log_errors',1);
    }

    public function headBaseContent ( $favicon = '#' ) {
        $Content = new Content ();
        $Content -> setContent ( '
        
            <meta charset="UTF-8">
            <meta name="description" content="Free Web tutorials">
            <meta name="keywords" content="HTML, CSS, JavaScript">
            <meta name="author" content="Ramiro Garcia Gonzalez">
            <meta name="viewport" content="width=device-width, 
            initial-scale=1.0">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" 
            crossorigin>
            <link 
            href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" 
            rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" 
            crossorigin>
            <link 
            href="https://fonts.googleapis.com/css2?family=Protest+Strike&display=swap" 
            rel="stylesheet">
            <link rel="icon" type="image/x-icon" href="'.$favicon.'">
        
        ' );
        return $Content -> getContent ();
    } 

    public function styleCss ( string $css ) {
        return '<style>'.$css.'</style>';
    }

    public function license ( $classesCss = '' ) {
        return '
        
        <p xmlns:cc="http://creativecommons.org/ns#" xmlns:dct="http://purl.org/dc/terms/" 
        class="'.$classesCss.'"> 

            <a property="dct:title" rel="cc:attributionURL" href="https://adaptowebs.com"> 
                adaptowebs
            </a> 
                by 
            <a rel="cc:attributionURL dct:creator" property="cc:attributionName" 
                href="https://github.com/versoftly"> 
                Ramiro Garcia Gonzalez
            </a> 
                is licensed under 
            <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/?ref=chooser-v1" 
                target="_blank" 
                rel="license noopener noreferrer" 
                style="display:inline-block;"> 
                Attribution-NonCommercial-ShareAlike 4.0 International
                <img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" 
                src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1"> 

                <img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" 
                src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1"> 

                <img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" 
                src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1"> 

                <img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" 
                src="https://mirrors.creativecommons.org/presskit/icons/sa.svg?ref=chooser-v1"> 
            </a> 
        </p> 
        
        ';
    }
    
}

?>