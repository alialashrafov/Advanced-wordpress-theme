<?php
/**
 * Bootstraps the Theme
 * 
 * @package Advanced Theme
 */

namespace ADVANCED_THEME\Inc;

use ADVANCED_THEME\Inc\Traits\Singleton;

class ADVANCED_THEME
{
    use Singleton;
    protected function __construct()
    {
        // load class.
        Assets::get_instance();
        $this->setup_hooks();
    }
    protected function setup_hooks()
    {
        add_action("after_setup_theme", [$this, "setup_theme"]);
    }
    public function setup_theme()
    {
        add_theme_support("title-tag");
        add_theme_support('custom-logo', [
            'height' => 100,
            'width' => 200,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => ['site-title', 'site-description'],
        ]);
        add_theme_support('custom-background', [
            'default_color' => '#fff',
            'default_image' => '',
        ]);
    }
}