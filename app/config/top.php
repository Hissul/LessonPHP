<?php
return[
    'phone' => env('APP_PHONE', ''),

    'menu' => [
        [
            "link" => "/",
            "text" => "Main",
            "current" => false
        ],
        [
            "link" => "/about",
            "text" => "About",
            "current" => false
        ],
        [
            "link" => "/registration",
            "text" => "Registration",
            "current" => false
        ],
        [
            "link" => "/login",
            "text" => "Login",
            "current" => false
        ],
        [
            "link" => "/reset",
            "text" => "Reset Password",
            "current" => false
        ],
    ]
];