<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
  use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

  protected $fillable = [
      'nameClient',
      'cnpj',
  ];

  /**
   * Get the users for the role.
   */
  public function address(): HasMany
  {
      return $this->hasMany(Address::class);
  }
}
