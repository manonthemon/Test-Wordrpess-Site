<?php

/* Collection of Walker classes*/


/* 

wp_nav_menu()

<div class ="menu-container">
    <ul> // start_lvl()
        <li><a><span> // start_el()

            </a></span></li> // end_el()

        <li><a>Link</a></li>
        <li><a>Link</a></li>
        <li><a>Link</a></li>

    </ul> // end_lvl()
</div>

*/


class Walker_Nav_Primary extends Walker_Nav_Menu
{

    function start_lvl(){  // ul

    }

    function start_el(){  // li a span

    }

    function end_el(){  // closing li a span

    }

    function end_lvl(){  // closing ul

    }


}


?>