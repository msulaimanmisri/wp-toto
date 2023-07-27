<?php

class AddNewLabelForAdmin
{
    static public function INIT()
    {
        add_action('admin_enqueue_scripts', [__CLASS__, 'loadTheCustomLabelLogic']);
    }

    static public function loadTheCustomLabelLogic(string $handlerName)
    {
        wp_enqueue_script($handlerName, plugin_dir_url(__FILE__) . '/script.js', ['jquery'], false, true);
    }
}

AddNewLabelForAdmin::INIT();
