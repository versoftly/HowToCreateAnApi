<?php

    require_once ( "../../Libreria/ParaLaVista/Classes/Content/Content.php" );

    require_once ( "../../Libreria/ParaLaVista/Classes/Adapto/Adapto.php" );

    require_once ( "../../Libreria/ParaLaVista/Classes/Element/Element.php" );

    require_once ( "../../Libreria/ParaLaVista/Functions/Page/Page.php" );

    require_once ( "../../Libreria/ParaLaVista/Functions/Colors/Colors.php" );

    require_once ( "../../Libreria/ParaLaVista/Functions/BaseCss/BaseCss.php" );

    require_once ( "../../Libreria/ParaLaVista/Functions/TwoEcolsFlex/TwoEColsFlex.php" );

    $obj1 = new Content;

    $obj2 = new Adapto;

    $tabTitle = Element::OHtml ( "title" , "Adaptowebs" , '' , 1 );

    $mainTitle = Element::OHtml ( "h1" , "PHP Backend Developer" , '' , 1 ) ;

    $section1 = Element::OHtml ( "section" , 

        Element::OHtml ( "div" , // column 1

            Element::OHtml ( "main" , $mainTitle , '' , 1 ) . 
    
            Element::OHtml ( "h2" , "LINKS" , '' , 1 ) . 

            Element::OHtml ( "ul" , 

                Element::OHtml ( "li" , 

                    Element::OHtml ( "a" , "Facebook" , 
                    'href="https://www.facebook.com/profile.php?id=61555254051793"' , 1)

                , '' , 1) . 

                Element::OHtml ( "li" , 

                    Element::OHtml ( "a" , "GitHub" , 
                    'href="https://github.com/versoftly"' , 1)

                , '' , 1)

            , '' , 1)
        
        , '' , 1) . 

        Element::OHtml ( "div" , // column 2

            Element::OHtml ( "h2" , "Contact :" , '' , 1 ) . 

            Element::OHtml ( "h3" , "Email : mostlyphpsoftware@gmail.com" , 
            '' , 1 ) . 

            Element::OHtml ( "h3" , "Phone : +1 ( 505 ) 861 - 9970" , '' , 1 )
        
        , '' , 1)

    , 'class="TwoEColsFlex"' , 1 );

    $section2 = Element::OHtml ( "section" , 

        "Section 2" , 

    '' , 1 );

    $section3 = Element::OHtml ( "section" , 

        "Section 3" , 
        
    '' , 1 );

    $section4 = Element::OHtml ( "section" , 
    
        $obj2 -> license () ,
    
    '' , 1 );

    $style = $obj2 -> styleCss ( 
        colorsRoot () . baseCss () . TwoEColsFlex ()
    );

    page ( 
        $obj1 , $obj2 , 
        "http://adaptowebs.test/v1/Vista/Media/logo.png" , 
        "en" , $tabTitle . $style , 
        $section1 . $section2 . $section3 . $section4
    );

?>