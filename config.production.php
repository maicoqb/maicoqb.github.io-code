<?php


return array_replace_recursive(
    include './config.php',
    [
        'production' => true,

        'site' => [
            'url' => '//maicoqb.github.io',
            'baseurl' => '',
        ]
    ]);