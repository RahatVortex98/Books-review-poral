<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;
    protected $fillable = [
        'title',
        'author'
        ];  

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function scopeTitle(Builder $query,string $title){
        return $query->where('title','LIKE','%'. $title .'%');
    }

//     public function scopePopular(Builder $query):Builder{
//         return $query->withCount('reviews')
//         ->orderBy('reviews_count','desc');
//     }
//     public function scopeHighestRated(Builder $query):Builder{
//         return $query->withAvg('reviews','rating')
//         ->orderBy('reviews_avg_rating','desc');
//     }

//     public function scopeRecentReview(Builder $query):Builder{
//         return $query->with(['reviews'=>function($reviewQuery){
//             $reviewQuery->latest();
//         }]);    
// }
//   public function scopeMinReviews(Builder $query, int $minReviews): Builder
// {
//     return $query
//         ->withCount('reviews')
//         ->having('reviews_count', '>=', $minReviews);
// }

// public function scopePopularLastMonth(Builder $query): Builder{ 

//     return $query->withCount('reviews')
//     ->where('created_at','>=',now()->subMonth())
//     ->orderBy('reviews_count','desc');
// }

// public function scopePopularLast6Months(Builder $query): Builder{ 

//     return $query->withCount('reviews')
//     ->where('created_at','>=',now()->subMonths(6))
//     ->orderBy('reviews_count','desc');
// }



   public function scopeLatestBooks(Builder $query): Builder
{
    return $query->orderBy('created_at', 'desc');
}
    public function scopePopularLastMonth(Builder $query):Builder{
        return $query->withCount(['reviews'=>function($q){
                     $q->where('created_at','>=',now()->subMonth());
        }])
        ->orderBy('reviews_count','desc');
}
    public function scopePopularLast6Month(Builder $query):Builder{
        return $query->withCount(['reviews'=>function($q){
            $q->where('created_at','>=',now()->subMonths(6));
        }])
        ->orderBy('reviews_count','desc');
    }

    public function scopeHighestRatedLastMonth(Builder $query):Builder{

        return $query->withAvg(['reviews'=>function($q){
            $q->where('created_at','>=',now()->subMonth());
        }],'rating')
        ->orderBy('reviews_avg_rating','desc');
    }
     public function scopeHighestRatedLast6Month(Builder $query):Builder{

        return $query->withAvg(['reviews'=>function($q){
            $q->where('created_at','>=',now()->subMonths(6));
        }],'rating')
        ->orderBy('reviews_avg_rating','desc');
    }


}
