<?php

function LayoutShifter () {

    return '
    
        @media ( min-width: 768px ) {
                    
            .LayoutShifter {
                
                display: grid;
                grid-template-areas: "superior lateral"
                                    "inferior inferior";
                column-gap: 1rem;
                align-items: center;
                color: var(--blanco);
                
            }
            
            .section2 {
                
                grid-area: superior;
                background-color: var(--azul);
                
            }
            
            .section1 {
                
                grid-area: inferior;
                background-color: var(--azulclaro);
                
            }
            
            .section3 {
                
                grid-area: lateral;
                background-color: var(--verdeclaro);
                
            }
            
        }
        
        @media ( min-width: 992px ) {
            
            .LayoutShifter {
                
                grid-template-areas: "superior lateral"
                                    "inferior inferior";
                color: var(--blanco);
                
            }
            
            .section2 {
                
                grid-area: superior;
                background-color: var(--verdeclaro);
                
            }
            
            .section1 {
                
                grid-area: lateral;
                background-color: var(--azulclaro);
                
            }
            
            .section3 {
                
                grid-area: inferior;
                background-color: var(--azul);
                
            }
            
        }
    
    ';

}

?>