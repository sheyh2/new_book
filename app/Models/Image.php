<?php

namespace App\Models;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * Class Category
 * @package App\Models\Category
 *
 * @property int    $id
 * @property string $path
 * @property string $name
 * @property string $ext
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Image extends Model
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

    /**
     * @param int $paginate
     * @return LengthAwarePaginator
     */
    public function paginateList(int $paginate): LengthAwarePaginator{
        return self::query()
            ->paginate($paginate);
    }

    // Getters
    /**
     * @return string
     */
    public function getUrl(): string{
        return public_path().'/'.$this->getPath().$this->getName().'.'.$this->getExt();
    }

    /**
     * @return int
     */
    public function getId(): int{
        return $this->id;
    }

    /**
     * @return string
     */
    public function getPath(): string{
        return $this->path;
    }

    /**
     * @return string
     */
    public function getName(): string{
        return $this->name;
    }

    /**
     * @return string
     */
    public function getExt(): string{
        return $this->ext;
    }

    /**
     * @return Carbon
     */
    public function getCreatedAt(): Carbon{
        return $this->created_at;
    }
}
