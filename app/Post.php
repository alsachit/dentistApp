<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Post
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $date_written
 * @property string|null $featured_image
 * @property int $user_id
 * @property int $category_id
 * @property int|null $votes_up
 * @property int|null $votes_down
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $author
 * @property-read \App\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comment[] $comments
 * @property-read int|null $comments_count
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDateWritten($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereFeaturedImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereVotesDown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereVotesUp($value)
 * @mixin \Eloquent
 */
class Post extends Model
{
    protected $fillable = [
        'title', 'content', 'date_written', 'featured_image',
        'user_id', 'category_id', 'votes_up', 'votes_down', 'voters_up','voters_down'
    ];

    public function author() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
