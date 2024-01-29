<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageView extends Model
{
    use HasFactory;
    protected $table = 'page_views';
    protected $fillable = ['count'];
    public $timestamps = false;
    public static function incrementCount()
    {
        $pageView = self::first();

        if ($pageView) {
            $pageView->update([
                'count' => $pageView->count + 1,
            ]);
        } else {
            self::create([
                'count' => 1,
            ]);
        }
    }
}
