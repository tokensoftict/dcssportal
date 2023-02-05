<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Center
 * 
 * @property int $id
 * @property string $name
 * @property int $state_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property State $state
 * @property Collection|Application[] $applications
 *
 * @package App\Models
 */
class Center extends Model
{
	protected $table = 'centers';

	protected $casts = [
		'state_id' => 'int'
	];

	protected $fillable = [
		'name',
		'state_id'
	];

	public function state()
	{
		return $this->belongsTo(State::class);
	}

	public function applications()
	{
		return $this->hasMany(Application::class);
	}
}
