<?php
return [
    'name' => getenv('APP_NAME') ?: 'UKKI UNNES',
    'env' => getenv('APP_ENV') ?: 'local',
    'debug' => getenv('APP_DEBUG') ?: true,
    'url' => getenv('APP_URL') ?: 'http://localhost:8000',
];
