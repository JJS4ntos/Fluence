<?php 

function fluence_get_menu() {
    // using register_nav_menus primary menu name -> 'menu-1'
    $menuLocations = get_nav_menu_locations(); // Get nav locations set in theme, usually functions.php)
                                               // returns an array of menu locations ([LOCATION_NAME] = MENU_ID);
    $menuID = $menuLocations['main-menu']; // Get the *primary* menu added in register_nav_menus()
    $primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.
    return $primaryNav;
}

function fluence_get_wp_title() {
    if( has_custom_logo() ) {
        return get_custom_logo();
    }
    return get_bloginfo('name');
}