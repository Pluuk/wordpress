<?php

use PHPUnit\Framework\TestCase;

class WordPressTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        global $wp_did_header;

        if ( !isset($wp_did_header)) {
            $wp_did_header = true;

            // Load the WordPress library.
            require_once( dirname( __FILE__ ) . '/../public/wp/wp-load.php' );
        }
    }
}
