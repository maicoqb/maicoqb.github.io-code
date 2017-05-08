<?php


return array_replace_recursive(
    include './config.php',
    [
        'production' => true,

        'site' => [
            'url' => 'https://maicoqb.github.io',
            'baseurl' => '',
        ]
    ]);