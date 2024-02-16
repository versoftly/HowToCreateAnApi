<?php

function baseCss () {

    return '
    
        * {
            box-sizing: border-box;
            margin: 2px;
            padding: 2px;
        }

        html {
            font-size: 62.5%
        }

        .container {
            font-size: 16px;
            font-family: \'Protest Strike\', sans-serif;
            background-color: var(--blanco);
            color: var(--negro);
        }

        h1 , h2 , h3 , h4 , h5 , h6 {
            font-family: \'Protest Riot\', sans-serif;
        }

        h1 {
            font-size: 3.8rem;
        }

        a {
            text-decoration: none;
        }
        
        a:hover {
            text-decoration: underline;
        }
    
    ';

}

?>