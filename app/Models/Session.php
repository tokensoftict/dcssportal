<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Session
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $registration_begins
 * @property Carbon|null $registration_ends
 * @property Carbon $session
 * @property float $form_fee
 * @property float $split_one
 * @property float $split_two
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Application[] $applications
 *
 * @package App\Models
 */
class Session extends Model
{
	protected $table = 'sessions';

	protected $casts = [
		'form_fee' => 'float',
		'split_one' => 'float',
		'split_two' => 'float',
	];

	protected $dates = [
		'registration_begins',
		'registration_ends',
	];


	protected $fillable = [
		'name',
		'registration_begins',
		'registration_ends',
		'session',
		'form_fee',
		'split_one',
		'split_two',
        'status'
	];

	public function applications()
	{
		return $this->hasMany(Application::class);
	}
}
