<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    protected $table = 'job_postings';

    public static array $experience = ['entry', 'intermediate', 'senior'];
    public static array $category = ['IT', 'Finance', 'Marketing', 'Sales', 'Engineering', 'Design', 'Customer Service', 'HR'];
    public static array $type = ['full-time', 'part-time', 'contract', 'freelance'];
    public static array $status = ['active', 'inactive', 'closed'];

    protected $fillable = [
        'title',
        'description', 
        'salary',
        'location',
        'category',
        'experience',
        'type',
        'status',
        'user_id',
        'expires_at'
    ];

    protected $casts = [
        'expires_at' => 'datetime',
    ];

    // Relationship: Job belongs to a User (Employer)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
