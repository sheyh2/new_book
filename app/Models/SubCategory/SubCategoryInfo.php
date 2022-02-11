<?php

namespace App\Models\SubCategory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Class SubCategory
 * @package App\Models\SubCategory
 *
 * @property int    $id
 * @property int    $sub_category_id
 * @property string $lang
 * @property string $title
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 */
class SubCategoryInfo extends Model
{
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
    public function getSubCategoryId(): int{
        return $this->sub_category_id;
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
    public function getTitle(): string{
        return $this->title;
    }
}
