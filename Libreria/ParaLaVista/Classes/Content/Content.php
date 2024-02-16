<?php

class Content {

    private string $content = '';

    public function setContent ( string $content ) {
        $this->content = $content;
    }

    public function getContent () : string {
        return $this->content;
    }
    
    public function build ( $head , $body , $lang="en" , $attributes='' ) {
        echo '<!DOCTYPE html>
        <html lang="'.$lang.'">
            <head>
            '.$head.'
            </head>
            <body '.$attributes.'>
            '.$body.'
            </body>
        </html>';
    }
    
}

?>