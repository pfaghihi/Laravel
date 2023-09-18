<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanySkillset extends Model
{
    public $table = 'company_skillset_need';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'company_id',
        'skillset_id',
        'total_years_experience'
    ];

    public function skill()
    {
        return $this->hasOne(Skillset::class,'id', 'skillset_id');
    }

    public function company()
    {
        return $this->hasOne(Company::class,'id', 'company_id');
    }
}
