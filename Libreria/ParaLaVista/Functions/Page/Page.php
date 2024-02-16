<?php

function Page ( 
    Content $object , Adapto $object_2 , $favicon , $lang ,
    $head , $body
    ) {

        $object_2 -> errors ();

        $head_base_content = $object_2 -> headBaseContent ( $favicon );
        
    $object -> build ( 
        $head_base_content . $head , $body , $lang , "class='container'"
    );
    
}

?>