<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SchoolType
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|School[] $schools
 *
 * @package App\Models
 */
class SchoolType extends Model
{
	protected $table = 'school_types';

	protected $fillable = [
		'name'
	];

	public function schools()
	{
		return $this->hasMany(School::class);
	}
}
