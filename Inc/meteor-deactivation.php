<?php

/**
 * @package MeteorPlugin
*/


class MeteorPluginDeactivation{
    public static function deactivate(){
        flush_rewrite_rules();
    }
}