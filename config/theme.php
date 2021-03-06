<?php
/**
 * Config-file for Anax, theme related settings, return it all as array.
 *
 */
return [

    /**
     * Base view to start render page from.
     */
    "view" => [
        "template" => "default/index",

        "data" => [
            // General
            "htmlClass"     => ["cimage"],
            "bodyClass"     => [],
            "lang"          => "en",
            "charset"       => "utf-8",
            "title_append"  => " | CImage and img.php",
            "favicon"       => "img/favicon/favicon_128x128.png",

            // Style and stylesheets
            "stylesheets" => ["css/style.min.css?2016-11-20"],
            "styleInline" => null,

            // JavaScript
            "javascripts" => [
                "js/theme/image-overlay.js?2016-11-20",
                "js/theme/responsive-menu.min.js?2016-11-20",
            ],
        ],
    ],



    /**
     * Add default views to always include.
     */
    "views" => [
        [
            "region" => "header",
            "template" => "default/header",
            "data" => [
                "homeLink"      => "",
                "siteLogoText"  => "CImage",
                "siteLogoTextIcon" => "image/favicon/favicon_40x40.png",
                "siteLogoTextIconAlt" => "Small logo",
                "siteLogo"      => null, //"img/anax.png",
                "siteLogoAlt"   => null, //"Anax Logo",
                "siteTitle"     => null, //"Anax PHP framework",
                "siteSlogan"    => null, //"Reusable modules for web development"
            ],
            "sort" => 2
        ],
        [
            "region" => "header",
            "template" => "default/image",
            "data" => [
                "class" => "logo-1",
                "src" => "img/favicon/favicon_128x128.png",
                "alt" => "Logo",
            ],
            "sort" => -1
        ],
        [
            "region" => "navbar2",
            "template" => "default/navbar",
            "data" => [],
            "sort" => 1
        ],
        [
            "region" => "profile",
            "template" => "default/navbar-max",
            "data" => [],
            "sort" => -1
        ],
        [
            "region" => "footer",
            "template" => "default/columns",
            "data" => [
                "class"  => "footer-column",
                "columns" => [
                    [
                        "contentRoute" => "block/footer-col-1",
                    ],
                    [
                        "contentRoute" => "block/footer-col-2",
                    ],
                    [
                        "contentRoute" => "block/footer-col-3",
                    ]
                ]
            ],
            "sort" => 1
        ],
        [
            "region" => "footer",
            "template" => "default/block",
            "data" => [
                "class" => "site-footer",
                "contentRoute" => "block/footer",
            ],
            "sort" => 2
        ],
        [
            "region" => "body-end",
            "template" => "default/google-analytics",
            "data" => [
                "account" => "UA-75526006-1",
            ],
            "sort" => -1
        ],
    ],
];
