<?php
function includeFilesInFolder( string $folder ): void
{
    if( !file_exists( $folder ) ) return;
    $files = array_diff( scandir( $folder ), ['..', '.'] );

    foreach ( $files as $file ) {
        $path = $folder . '/' . $file;

        if( !file_exists( $path ) ) continue;

        if( is_dir( $path ) ) {
            includeFilesInFolder( $path );
        } else {
            require_once $path;
        }
    }
}
includeFilesInFolder( get_stylesheet_directory() . "/functions" );