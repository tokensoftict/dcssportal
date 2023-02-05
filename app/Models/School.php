<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class School
 * 
 * @property int $id
 * @property string $name
 * @property int $school_type_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property SchoolType $school_type
 * @property Collection|Application[] $applications
 *
 * @package App\Models
 */
class School extends Model
{
	protected $table = 'schools';

	protected $casts = [
		'school_type_id' => 'int'
	];

	protected $fillable = [
		'name',
		'school_type_id'
	];

	public function school_type()
	{
		return $this->belongsTo(SchoolType::class);
	}

	public function applications()
	{
		return $this->hasMany(Application::class);
	}
}
