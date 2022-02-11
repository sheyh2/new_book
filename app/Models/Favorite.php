<?php

namespace App\Models;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Favorite
 * @package App\Models\Favorite
 *
 * @property int $id
 * @property int $book_id
 * @property int $user_id
 */
class Favorite extends Model
{
    protected $table = 'favorites';

    // Override
    /**
     * @return Builder
     */
    public static function query(): Builder{
        return parent::query();
    }

    // Related

    /**
     * @param int $category_id
     * @param int $paginate
     * @return LengthAwarePaginator
     */
    public function paginateList(int $category_id, int $paginate = 10): LengthAwarePaginator{
        return self::query()
            ->where('category_id', '=', $category_id)
            ->paginate($paginate);
    }

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
    public function getUserId(): int{
        return $this->user_id;
    }
}
