<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchasedCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'course_id',
        // add other fillable fields as needed
    ];

    // Define relationships if necessary
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
