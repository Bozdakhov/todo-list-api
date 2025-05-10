<?php

return [
    'defaults' => [
        'swagger' => [
            'paths' => base_path('routes/api.php'),
            'docs_json' => env('SWAGGER_JSON', 'api-docs.json'), // Путь к JSON-документации
            'docs_yaml' => env('SWAGGER_YAML', 'api-docs.yaml'), // Путь к YAML-документации
            'title' => 'To-Do List API',
            'description' => 'API для управления задачами',
            'docs' => public_path('docs'),  // Укажите папку для документов
        ],
    ],
];

