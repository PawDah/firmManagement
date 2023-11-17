<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'surname',
        'phone_number',
        'email',
        'image_path',
        'hire_date',
    ];

    public function hasContract(): bool
    {
        return isset($this->contract);
    }
    public function delete()
    {
        $this->contract()->delete();
        return parent::delete();
    }
    public function contract() :HasOne
    {
        return $this->hasOne(Contract::class);
    }

}
