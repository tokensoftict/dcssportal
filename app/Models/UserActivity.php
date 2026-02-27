<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserActivity
 * 
 * @property int $id
 * @property int $user_id
 * @property Carbon $date_added
 * @property Carbon $time_added
 * @property string|null $response
 * @property int|null $transaction_id
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Transaction|null $transaction
 * @property User $user
 *
 * @package App\Models
 */
class UserActivity extends Model
{
	protected $table = 'user_activities';

	protected $casts = [
		'user_id' => 'int',
		'transaction_id' => 'int'
	];

	protected $dates = [
		'date_added',
		'time_added'
	];

	protected $fillable = [
		'user_id',
		'date_added',
		'time_added',
		'response',
		'transaction_id',
		'description'
	];

	public function transaction()
	{
		return $this->belongsTo(Transaction::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}


    public static function logActivities(array $activity){
        $activity['date_added'] = now();
        $activity['time_added'] = now()->toTimeString();
        return self::create($activity);
    }
}
