<?php

if (! function_exists('theme_asset')) {
    /**
     * Generate an theme asset path for the application.
     *
     * @param  string  $path
     * @return string
     */
    function theme_asset($path)
    {
        return Theme::to('assets/' . $path);
    }
}

