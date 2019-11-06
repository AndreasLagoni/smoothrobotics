<?php

function load_stylesheets() {


wp_register_style("stylesheet", get_template_directory_uri() . "./style.css", array(), rand(111,9999), 'all');
wp_enqueue_style("stylesheet");
}

add_action("wp_enqueue_scripts", "load_stylesheets");
?>