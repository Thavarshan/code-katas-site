<?php

declare(strict_types=1);

if (! function_exists('parse')) {
    /**
     * Parse markdown.
     *
     * @param string $content
     *
     * @return string
     */
    function parse(string $content): string
    {
        return app('markdown.parser')->text($content);
    }
}

if (! function_exists('getExcerpt')) {
    /**
     * Trim large text body to size of an excerpt.
     *
     * @param string $content
     * @param int    $length
     *
     * @return string
     */
    function getExcerpt(string $content, int $length = 255): string
    {
        $content = preg_split('/<!-- more -->/m', $content, 2);
        $cleaned = trim(
            strip_tags(
                preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content[0]),
                '<code>'
            )
        );

        if (count($content) > 1) {
            return $content[0];
        }

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    }
}
