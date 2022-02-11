<?php

namespace App\Models\Book;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BookText
 * @package App\Models\BookText
 *
 * @property int    $id
 * @property int    $book_id
 * @property string $lang
 * @property string $author
 * @property string $title
 * @property string $description
 */
class BookInfo extends Model
{
    protected $table = 'book_infos';

    // Getters
    /**
     * @return int
     */
    public function getId(): int{
        return $this->id;
    }

    /**
     * @return int
     */
    public function getBookId(): int{
        return $this->book_id;
    }

    /**
     * @return string
     */
    public function getLang(): string{
        return $this->lang;
    }

    /**
     * @return string
     */
    public function getAuthor(): string{
        return $this->author;
    }

    /**
     * @return string
     */
    public function getTitle(): string{
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string{
        return $this->description;
    }
}
