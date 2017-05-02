<?php

return array_merge([
    'production' => false,

    'perPage' => 1,

    'site' => [
        'url' => '',
        'baseurl' => '',
        'title' => "maicoqb",
        'tagline' => 'Desenvolvimento Web, PHP, TI e mais',
        'description' => "
            Bem vindo ao meu blog, aqui é onde eu solto
            a mente e falo sobre as coisas que gosto.
        ",

        'rss_url' => 'feed.xml',

        // 'theme' => 'theme-base-personal' // theme-base-08 to theme-base-0f
    ],

    'title' => 'Home',

    'author' => [
        'name' => 'Maico Borges',
        'github' => 'https://github.com/maicoqb',
        'url' => 'https://maicoqb.github.io',
        'email' => 'maicoqb@gmail.com'
    ],

    'collections' => include './config/collections.php',

], include './config/functions.php');
