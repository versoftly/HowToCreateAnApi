<?php

    require_once ( "../../Libreria/ParaLaVista/Classes/Content/Content.php" );

    require_once ( "../../Libreria/ParaLaVista/Classes/Adapto/Adapto.php" );

    require_once ( "../../Libreria/ParaLaVista/Classes/Element/Element.php" );

    require_once ( "../../Libreria/ParaLaVista/Functions/Page/Page.php" );

    $obj1 = new Content;

    $obj2 = new Adapto;

    $tabTitle = Element::OHtml ( "title" , "Adaptowebs" , '' , 1 );

    $helloWorld = Element::OHtml ( "h1" , "Hello World" , '' , 1 );

    $background_color = $obj2 -> styleCss ( " 
        .container {
            background-color: green;
            color: white;
        } 
    " );

    page ( 
        $obj1 , $obj2 , 
        "http://adaptowebs.test/v1/Vista/Media/logo.png" , 
        "en" , $tabTitle . $background_color , 
        $helloWorld
    );

?>