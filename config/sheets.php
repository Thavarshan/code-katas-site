<?php

use Spatie\Sheets\Sheet;
use Spatie\Sheets\PathParsers\SlugParser;
use Spatie\Sheets\ContentParsers\MarkdownWithFrontMatterParser;

return [
    'default_collection' => null,

    'collections' => [
        'posts' => [
            'disk' => 'posts',
            'sheet_class' => Sheet::class,
            'path_parser' => SlugParser::class,
            'content_parser' => MarkdownWithFrontMatterParser::class,
            'extension' => 'md',
        ],
    ],
];
