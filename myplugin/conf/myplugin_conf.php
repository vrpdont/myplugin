<?php
function get_myplugin_schema() {
    return [
        "MYPLUGIN" => [
            "_title" => "My Plugin Settings",
            "MAIN_SETTINGS" => [
                "_title" => "Main settings",
                "ENABLED" => [
                    "userlvl" => "basic",
                    "type" => "boolean",
                    "description" => "Enable this plugin.",
                    "default" => true

                ],
                "ADVANCED_SETTING" => [
                    "userlvl" => "pro",
                    "type" => "string",
                    "description" => "An advanced setting for the plugin.",
                    "default" => "advanced default"
                ],
                "EXPERIMENTAL_SETTING" => [
                    "userlvl" => "wip", 
                    "type" => "longstring",
                    "description" => "An experimental setting for the plugin",
                    "default" => "experimental default"
                ]
            ],
            "Secondary_Settings" => [
                "_title" => "Optional Settings",
                "Example_item" => [
                    "userlvl" => "basic",
                    "type" => "boolean",
                    "description" => "Example item in group",
                ]
            ],
        ]
    ];
}
?>
