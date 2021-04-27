<?php

class Author extends Model
{
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

class Post extends Model
{
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}

//

/**
 * @return array<string>
 */
function get_author_names(): array
{
    $books = Post::all();
    $names = [];

    foreach ($books as $book) {
        $names[] = $book->author->name;
    }

    return $names;
}

/**
 * @return array<string>
 */
function get_author_names_through_with(): array
{
    $books = Post::with('author')->get();
    $names = [];

    foreach ($books as $book) {
        $names[] = $book->author->name;
    }

    return $names;
}
