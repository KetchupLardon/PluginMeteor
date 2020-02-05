<?php

/**
 * @package MeteorPlugin
*/


class MeteorPluginActivation{
    public static function activate(){
        flush_rewrite_rules();
    }
}