<?php

class Element {
        
    public static function OHtml ($tag,$txt,$attributes='',$mode = 0) {
        if ( $mode == 0 ) {
            return "<$tag $attributes>";
        } else {
            return "<$tag $attributes>$txt</$tag>";
        }
    }
    
}

?>