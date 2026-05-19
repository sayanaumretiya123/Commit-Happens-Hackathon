<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * College Model
 * 
 * Represents an educational institution in the CampusIntel platform.
 * Colleges are used to organize students, departments, courses, and resources.
 */
class College extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'code',
        'city',
        'state',
        'logo',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'status' => 'string',
        ];
    }

    /**
     * Scope a query to only include active colleges.
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /**
     * Scope a query to only include inactive colleges.
     */
    public function scopeInactive($query)
    {
        return $query->where('status', 'inactive');
    }

    /**
     * Check if the college is active.
     */
    public function isActive(): bool
    {
        return $this->status === 'active';
    }

    /**
     * Get the full location (city, state).
     */
    public function getFullLocationAttribute(): string
    {
        return "{$this->city}, {$this->state}";
    }

    /**
     * Get the logo URL.
     */
    public function getLogoUrlAttribute(): string
    {
        if ($this->logo) {
            return asset('storage/' . $this->logo);
        }
        return asset('images/default-college-logo.png');
    }

    /**
     * Get all students for this college.
     * (To be implemented when User-College relationship is established)
     */
    public function students(): HasMany
    {
        // return $this->hasMany(User::class);
        // Placeholder for future implementation
        return $this->hasMany(User::class);
    }
}
