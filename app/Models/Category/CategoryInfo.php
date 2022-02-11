<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoryText
 * @package App\Models\CategoryText
 *
 * @property int    $id
 * @property int    $category_id
 * @property string $lang
 * @property string $name
 */
class CategoryInfo extends Model
{
    protected $table = 'category_infos';

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
     * @return string
     */
    public function getLang(): string{
        return $this->lang;
    }

    /**
     * @return string
     */
    public function getName(): string{
        return $this->name;
    }
}
