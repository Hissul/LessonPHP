<?php
return[
    'phone' => env('APP_PHONE', ''),

    'menu' => [
        [
            "link" => "/",
            "text" => "Main"            
        ],
        [
            "link" => "/about",
            "text" => "About"
        ],
        [
            "link" => "/registration",
            "text" => "Registration"
        ],
        [
            "link" => "/login",
            "text" => "Login"
        ],
        [
            "link" => "/reset",
            "text" => "Reset Password"
        ],
        [
            "link" => "/feedback",
            "text" => "Feedback"
        ],
    ]
];