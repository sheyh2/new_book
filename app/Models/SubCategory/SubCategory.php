<?php

namespace App\Models\SubCategory;

use App\Models\Book\Book;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * Class SubCategory
 * @package App\Models\SubCategory
 *
 * @property int    $id
 * @property int    $category_id
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property Book   $relationBook
 * @property SubCategoryInfo $relationSubCategoryInfo
 */
class SubCategory extends Model{
    protected $table = 'sub_categories';

    // Override
    /**
     * @return Builder
     */
    public static function query(): Builder{
        return parent::query();
    }

    // Related
    /**
     * @return BelongsTo
     */
    public function relationBook(): BelongsTo{
        return $this->belongsTo(Book::class, 'sub_category_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function relationSubCategoryText(): HasMany{
        return $this->hasMany(SubCategoryInfo::class, 'id', 'sub_category_id');
    }

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
    public function getCategoryId(): int{
        return $this->category_id;
    }

    /**
     * @return Carbon
     */
    public function getCreatedAt(): Carbon{
        return $this->created_at;
    }
}
