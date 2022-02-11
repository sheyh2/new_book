<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App\Models\Category
 *
 * @property int $id
 * @property int $book_id
 * @property int $similar_book_id
 */
class Related extends Model
{
    protected $table = 'categories';

    // Override

    /**
     * @return Builder
     */
    public static function query(): Builder{
        return parent::query();
    }

    // Actions

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
     * @return int
     */
    public function getSimilarBookId(): int{
        return $this->similar_book_id;
    }
}
