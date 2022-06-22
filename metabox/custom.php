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
   $anh->add_field( array(
	'name' => 'Test File List',
	'desc' => '',
	'id'   => 'wiki_test_file_list',
	'type' => 'file_list',
	// 'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	// 'query_args' => array( 'type' => 'image' ), // Only images attachment
	// Optional, override default text strings
	'text' => array(
		'add_upload_files_text' => 'Replacement', // default: "Add or Upload Files"
		'remove_image_text' => 'Replacement', // default: "Remove Image"
		'file_text' => 'Replacement', // default: "File:"
		'file_download_text' => 'Replacement', // default: "Download"
		'remove_text' => 'Replacement', // default: "Remove"
	),
) );

    
}

//SRD project metabox
add_action('cmb2_admin_init', 'srd_all_projects');

function srd_all_projects(){
    $srd = new_cmb2_box(array(
        'id'            => 'srd_project_metabox',
        'title'         => __('Add Image Gallery', 'anh'),
        'object_types'  => array('srd-project'),
    
        
	));
    $srd->add_field(array(
        'name'          => __('Upload Project Images', 'anh'),
        'description'   => __('images size should be same!!', 'anh'),
        'id'            => 'srd_image_gallery',
        'type'          => 'file_list',
	));
}