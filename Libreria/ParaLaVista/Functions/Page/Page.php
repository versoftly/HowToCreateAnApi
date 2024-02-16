<?php

function Page ( 
    Content $object , Adapto $object_2 , $favicon , $lang ,
    $head , $body
    ) {

        $object_2 -> errors ();

        $head_base_content = $object_2 -> headBaseContent ( $favicon );

        $license = $object_2 -> license ();
        
    $object -> build ( 
        $head_base_content . $head , implode( "" , [
            $body ,
            $license
        ] ) ,
        $lang , "class='container'"
    );
    
}

?>