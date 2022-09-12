<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;
use NotificationChannels\WebPush\HasPushSubscriptions;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use HasPushSubscriptions;
    protected $guard='adminPanel';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'level',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getImageUrlAttribute()
    {
        return $this->imageUrl();
    }

    public function imageUrl()
    {
        return $this->image ? asset($this->image) : asset('/back/app-assets/images/portrait/small/default.jpg');
    }

    public function getFullnameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getProfilePhotoUrlAttribute()
    {
        return $this->image ? asset($this->image) : asset('back/app-assets/images/portrait/small/default.jpg');
    }

    //------------- end attributes

    //------------- start relations

 /*   public function cart()
    {
        return $this->hasOne(Cart::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
*/
    public function orderItems()
    {
        return $this->hasManyThrough(OrderItem::class, Order::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function views()
    {
        return $this->hasMany(Viewer::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function favoriteProducts()
    {
        return $this->hasManyThrough(Product::class, Favorite::class);
    }

    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }

    //------------- end relations

    public function hasBought(Price $price)
    {
        $orders = $this->orders()->where('status', 'paid')->pluck('id');

        $bought = DB::table('order_items')->whereIn('order_id', $orders)->where('price_id', $price->id)->exists();

        return $bought;
    }

    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }

        return $role->intersect($this->roles)->count();
    }

    public function isAdmin()
    {
        return $this->level == 'admin' || $this->level == 'creator';
    }

    public function isCreator()
    {
        return $this->level == 'creator';
    }

    public function getCart()
    {
        return $this->cart()->firstOrCreate();
    }



    //------------- start scopes

    public function scopeFilter($query, $request)
    {
        if ($fullname = $request->input('query.fullname')) {
            $query->WhereRaw("concat(first_name, ' ', last_name) like '%{$fullname}%' ");
        }

        if ($email = $request->input('query.email')) {
            $query->where('email', 'like', '%' . $email . '%');
        }

        if ($username = $request->input('query.username')) {
            $query->where('username', 'like', '%' . $username . '%');
        }

        if ($level = $request->input('query.level')) {
            switch ($level) {
                case "admin": {
                    $query->where('level', 'admin');
                    break;
                }
                case "user": {
                    $query->where('level', 'user');
                    break;
                }
            }
        }

        if ($request->sort) {
            switch ($request->sort['field']) {
                case 'fullname': {
                    $query->orderBy('first_name', $request->sort['sort'])->orderBy('last_name', $request->sort['sort']);
                    break;
                }
                default: {
                    if ($this->getConnection()->getSchemaBuilder()->hasColumn($this->getTable(), $request->sort['field'])) {
                        $query->orderBy($request->sort['field'], $request->sort['sort']);
                    }
                }
            }
        }

        return $query;
    }

    public function scopeCustomPaginate($query, $request)
    {
        $paginate = $request->paginate;
        $paginate = ($paginate && is_numeric($paginate)) ? $paginate : 10;

        if ($request->paginate == 'all') {
            $paginate = $query->count();
        }

        return $query->paginate($paginate);
    }

    public function scopeExcludeCreator($query)
    {
        return $query->where('level', '!=', 'creator');
    }

    //------------- end scopes
}
