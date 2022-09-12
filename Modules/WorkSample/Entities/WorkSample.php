<?php
namespace Modules\WorkSample\Entities;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use App\Models\Widget;
use App\Models\WidgetOption;
use App\Traits\Taggable;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WorkSample extends Model
{
    use sluggable, Taggable;

    protected $guarded = ['id'];

    protected $fillable = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function newFactory()
    {
        return \Modules\WorkSample\Database\factories\WorkSampleFactory::new();
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'slug',
            ],
        ];
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function technologies()
    {
        return $this->belongsToMany(WorkSampleTechnology::class);
    }
    public function Categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function getShortContentAttribute()
    {
        $content = strip_tags($this->content);

        return Str::words($content, 15);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function link()
    {
        return route('front.work-samples.show', ['work_sample' => $this]);
    }

    public function scopePublished($query)
    {
        $query->where('published', true)->where(function ($q) {
            $q->where('publish_date', null)->orWhere('publish_date', '<=', Carbon::now());
        });

        return $query;
    }

    public function isPublished()
    {
        return ($this->published && (!$this->publish_date || $this->publish_date <= Carbon::now()));
    }

    public function isShowable()
    {
        if ($this->isPublished()) {
            return true;
        }
        if (auth()->check() && auth('admin-panel')->user()->can('workSamples')) {
            return true;
        }

        return false;
    }
}
