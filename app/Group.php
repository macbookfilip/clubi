<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'name', 'banner_picture', 'private'
    ];

    // accessor for the banner picture
    public function getBannerPictureAttribute($value) {
        return $value ? $value : config('consts.default_banner_picture_path');
    }

    public function getRouteKeyName() {
        return 'id_string';
    }

    public function owner() {
        return $this->belongsTo('App\User', 'owner_id');
    }

    public function members() {
        return $this->belongsToMany('App\User');
    }

    public function posts() {
        return $this->hasMany('App\Post')
            ->with([
                'user.profile',
                'group',
                'comments' => function ($query) {
                    $query->with('user.profile')
                        ->take(config('consts.comments_per_page'));
                },
            ])->orderBy('created_at', 'DESC');
    }
}
