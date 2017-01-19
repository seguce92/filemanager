<?php
/**
 * Created by S€GU©€.
 * Date: 16-11-16
 * Time: 12:41 PM
 */
return [

    /**
     * PATH GLOBAL FILEMANAGER EMBED IN TINYMCE 4 EDITOR
     * --------------------------------------------------------------
     *  Path filemanager resources
     */
    'filemanager' => '/filemanager/',

    /**
     * TITLE MODAL DIALOG
     * --------------------------------------------------------------
     *  Title of the dialog
     */
    'filemanager_title' => 'FileManager for Laravel with tinymce',

    /**
     * ROUTE OR URL
     * --------------------------------------------------------------
     *  Route or url
     */
    'url'	=>	'admin/filemanager/',

    /**
     * SINGLE IMPUT
     * --------------------------------------------------------------
     *  Single file manager charge in modal dialog
     */
    'single_filemanager'	=>	'filemanager/dialog.php?type=1&amp;field_id=image-filemanager&amp;relative_url=1',

    /**
     * FRAMEWORK STYLE
     * --------------------------------------------------------------
     * Select a use framework style (bootstrap, materializecss)
     */
    'style' =>  'bootstrap',

    /**
     * CUSTOM ICONS
     * --------------------------------------------------------------
     *  Custom icons relative style
     */
    'icons' => [
        'bootstrap' =>  [
            'select'    =>  'glyphicon glyphicon-picture',
            'clear' =>  'glyphicon glyphicon-trash'
        ],

        'materializecss'    =>  [
            'select'    =>  'photo',
            'clear' =>  'delete'
        ]
    ],
];
