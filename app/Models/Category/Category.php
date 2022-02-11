<?php

namespace App\Models\Category;

use App\Models\SubCategory\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * Class Category
 * @package App\Models\Category
 *
 * @property int    $id
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property SubCategory  $relationSubCategory
 * @property CategoryInfo $relationCategoryText
 */
class Category extends Model
{
    protected $table = 'categories';

    // Related
    /**
     * @return HasMany
     */
    public function relationSubCategory(): HasMany{
        return $this->hasMany(SubCategory::class, 'category_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function relationCategoryText(): HasMany{
        return $this->hasMany(CategoryInfo::class, 'category_id', 'id');
    }

    // Getters

    /**
     * @return int
     */
    public function getId(): int{
        return $this->id;
    }

    /**
     * @return Carbon
     */
    public function getCreatedAt(): Carbon{
        return $this->created_at;
    }
}
