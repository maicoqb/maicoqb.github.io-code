<?php

return [
    'path' => 'blog/{date|Y/m}/{filename}',
    'sort' => '-date',
    
    'get_related' => function($item, $posts) {
        return $posts
            ->except($item->getFilename())
            ->filter(function($post) use ($item) {
                return collect($post->tags)->intersect($item->tags)->isNotEmpty();
            })
            ->sort(function($a, $b) use ($item) {
                $tagCountA = collect($a->tags)->intersect($item->tags)->count();
                $tagCountB = collect($b->tags)->intersect($item->tags)->count();
                
                // Sort descending
                return ($tagCountA < $tagCountB) ? 1 : -1;
            })
            ->take(3);
    },

    'first_hundread_words' => function($item) {
        return collect(preg_split('/\s+/', $item->getContent()))
            // Take 100 if content is longer than 150 words
            ->pipe(function($words) use ($item) {
                if( $words->count() >= 150 ) {
                    return $words->take(100)
                        ->push('...')
                        // Close open tags to avoid broswer error
                        ->pipe(function($words) {
                            $tags = collect([]);
                            $words->each(function($item, $key) use ($tags) {
                                if( preg_match('/\<(\/*)(\w+)/', $item, $match) ) {
                                    $tag = $match[2];
                                    $tags[$tag] = $tags[$tag] ?: 0;
                                    $tags[$tag] = $match[1] == '/' ? max(0, $tags[$tag]-1) : $tags[$tag]+1;
                                }
                            });

                            $tags->filter()->each(function($item, $key) use ($words) {
                                while($item--) {
                                    $words->push(sprintf("</%s>", $key));
                                }
                            });

                            return $words;
                        })
                        // Adds read more link to post
                        ->push(sprintf(
                            "<p><a href=\"%s\"> Ler mais </a></p>",
                            $item->site->baseurl . $item->getUrl()
                        ));
                }
                return $words;
            })
            ->implode(' ');
    },

    'date_formated' => function($item) {
        return date('Y-m-d', $item->date);
    },

    'date_formated_xml' => function($item) {
        return date('c', $item->date);
    },

    'content_xml' => function($item) {
        return htmlspecialchars($item->getContent(), ENT_XML1 | ENT_COMPAT, 'UTF-8');
    },

];