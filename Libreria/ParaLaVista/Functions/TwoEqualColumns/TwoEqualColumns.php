<?php

function TwoEqualColumns () {

    return '
    
        @media ( min-width: 768px ) {
                    
            .TwoEqualColumns {
                
                display: grid;
                grid-template-columns: repeat(2 , 50%);
                column-gap: 1rem;
                align-items: center;
                background-color: var(--gris);
                color: var(--blanco);
                
            }
            
        }
    
    ';

}

?>