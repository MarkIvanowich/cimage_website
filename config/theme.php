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
            "favicon"       => "favicon.ico",

            // Style and stylesheets
            //"stylesheets" => ["css/anax-base.min.css"],
            "stylesheets" => ["css/style.css"],
            "styleInline" => null,

            // JavaScript
            "javascripts" => [],
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
                "siteLogo"      => null, //"img/anax.png",
                "siteLogoAlt"   => null, //"Anax Logo",
                "siteTitle"     => null, //"Anax PHP framework",
                "siteSlogan"    => null, //"Reusable modules for web development"
            ],
            "sort" => -1
        ],
        [
            "region" => "navbar2",
            "template" => "default/navbar",
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
                "account" => null,
            ],
            "sort" => -1
        ],
    ],
];