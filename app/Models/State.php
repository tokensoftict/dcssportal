<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class State
 * 
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Application[] $applications
 * @property Collection|Center[] $centers
 *
 * @package App\Models
 */
class State extends Model
{
	protected $table = 'states';

	public function applications()
	{
		return $this->hasMany(Application::class);
	}

	public function centers()
	{
		return $this->hasMany(Center::class);
	}
}
