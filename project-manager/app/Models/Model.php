<?php


namespace App\Models;


use Illuminate\Support\Facades\Auth;

class Model extends \Illuminate\Database\Eloquent\Model
{
    public static function boot()
    {
        parent::boot();
        static::creating(function($model)
        {
            $user = Auth::user();

            if($user) {
                $model->created_by = $user->id;
            }
            else {
                $model->created_by = 0;
            }
        });
    }
}
