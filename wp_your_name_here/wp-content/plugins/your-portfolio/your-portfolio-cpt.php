<?php 
/*
Plugin Name: Your Portfolio
Plugin URI: 
Description: a Plugin that allows you to display your portfolio
Version: 1.0.0
Author: Kurt Tippenhauer
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

add_action( 'init', 'your_portfolio_project' );
function your_portfolio_project() {
    
    $labels = array( 
                    'name'               => __( 'Projects',  'your-portfolio-cpt' ),
                    'singular_name'      => __( 'Project',  'your-portfolio-cpt' ),
                    'menu_name'          => __( 'Your Portfolio',  'your-portfolio' ),
                    'name_admin_bar'     => __( 'Project',  'your-portfolio-cpt' ),
                    'add_new'            => __( 'Add New',  'your-portfolio-cpt' ),
                    'add_new_item'       => __( 'Add New Project', 'your-portfolio-cpt' ),
                    'new_item'           => __( 'New Project', 'your-portfolio-cpt' ),
                    'edit_item'          => __( 'Edit Project', 'your-portfolio-cpt' ),
                    'view_item'          => __( 'View Project', 'your-portfolio-cpt' ),
                    'all_items'          => __( 'All Projects', 'your-portfolio-cpt' ),
                    'search_items'       => __( 'Search Projects', 'your-portfolio-cpt' ),
                    'parent_item_colon'  => __( 'Parent Projects', 'your-portfolio-cpt' ),
                    'not_found'          => __( 'No projects found.', 'your-yourportfolio-cpt' ),
                    'not_found_in_trash' => __( 'No projects found in trash', 'your-portfolio-cpt' ),
    );
    
    $args = array(
                    'labels'             => $labels,
                    'description'        => __( 'Allows me to display the projects that I have worked on.', 'your-portfolio-cpt' ),
                    'public'             => true,
                    'publicly_queryable' => true,
                    'show_ui'            => true,
                    'show_in_menu'       => true,
                    'show_in_nav_menus'  => true,
                    'menu_icon'          => 'dashicons-portfolio',
                    'exclude_from_search'=> false,
//                    'query_var'          =>
//                    'rewrite'            =>
                    'capability_type'    => 'post',
                    'has_archive'        => true,
                    'hierachical'        => false,
//                    'menu_position'      =>
                    'can_export'         => true,
                    'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields',  )
    );
    
    register_post_type( 'portfolio-project', $args );
}


add_action('init', 'project_type_taxonomy');
function project_type_taxonomy() {
    
    $labels = array(
                    'name'               => __( 'Project Type',  'your-portfolio-cpt' ),
                    'singular_name'      => __( 'Project Type',  'your-portfolio-cpt' ),
                    'search_items'       => __( 'Search Project Type', 'your-portfolio-cpt' ),
                    'all_items'          => __( 'All Project Types', 'your-portfolio-cpt' ),
                    'parent_item'        => __( 'Parent Project Type', 'your-portfolio-cpt' ),
                    'parent_item_colon'  => __( 'Parent Project Type:', 'your-portfolio-cpt' ),
                    'edit_item'          => __( 'Edit Project Type', 'your-portfolio-cpt' ),
                    'update_item'        => __( 'Update Project Type', 'your-portfolio-cpt' ),
                    'add_new_item'       => __( 'Add Project Type', 'your-portfolio-cpt' ),
                    'new_item_name'      => __( 'New Project Type', 'your-portfolio-cpt' ),
                    'menu_name'          => __( 'Project Type', 'your-portfolio-cpt' ),
    );
    
    $args = array(
                    'hierarchical' => true, // like categories or tags
                    'labels' => $labels,
                    'show_ui' => true, // add the default UI to this taxonomy
                    'show_admin_column' => true, // add taxonomie to wordpress admin
                    'query_var'          => true,
                    'rewrite'            => array( 'slug' => 'project-type' ),
    );
    
    register_taxonomy(
        'project_type',
        'portfolio-project',
        $args
    );
}
