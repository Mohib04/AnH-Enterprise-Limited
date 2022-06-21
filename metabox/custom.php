<?php

add_action('cmb2_admin_init', 'anh_project_metabox');

function anh_project_metabox(){
    
    $anh = new_cmb2_box(array(
        'id' => 'anh_metabox',
        'title' => __('Additionals Information', 'anh'),
        'object_types' => array('anh-project'),
    ));

    
    $anh->add_field(array(
        'name' => __( 'Add Project Name', 'anh'),
        'desc' => __('Project Name which has we done', 'anh'),
        'id'    => 'project_name',
        'type'    => 'text'
    ));
    
    $anh->add_field(array(
        'name' => __( 'Add Company Name', 'anh'),
        'desc' => __('Company Name which has we done', 'anh'),
        'id'    => 'company_name',
        'type'    => 'text'
    ));
    

     $anh->add_field(array(
        'name' => __( 'Add Manufacturer Name', 'anh'),
        'desc' => __('Manufacturer Name which has we done', 'anh'),
        'id'    => 'manufacturer',
        'type'    => 'text'
    ));
    
    $anh->add_field(array(
        'name' => __( 'Add Origin Name', 'anh'),
        'desc' => __('Origin Name which has we done', 'anh'),
        'id'    => 'origin',
        'type'    => 'text'
    ));

    $anh->add_field(array(
        'name' => __( 'Add URL', 'anh'),
        'desc' => __('URL for youtube uploaded video', 'anh'),
        'id'    => 'url',
        'type'    => 'text'
    ));


    $anh->add_field(array(
        'name' => __( 'Add Description', 'anh'),
        'desc' => __('Description for project', 'anh'),
        'id'    => 'description',
        'type'    => 'wysiwyg',
        'options'       => array(
            'textarea_rows' => get_option( 'default_post_edit_rows', 2 ),
        ),
        
    ));

    
};