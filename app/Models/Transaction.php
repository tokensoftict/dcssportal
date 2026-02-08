<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaction
 * 
 * @property int $id
 * @property int|null $application_id
 * @property string $transactionId
 * @property float $amount
 * @property string $currency
 * @property string $country
 * @property string $email
 * @property string $phoneNumber
 * @property string $surName
 * @property string $firstName
 * @property string $lastName
 * @property string $customerUrl
 * @property string $merchantId
 * @property string $gateway
 * @property bool $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Application|null $application
 *
 * @package App\Models
 */
class Transaction extends Model
{
	protected $table = 'transactions';

	protected $casts = [
		'application_id' => 'int',
		'amount' => 'float',
		'status' => 'bool'
	];

	protected $fillable = [
		'application_id',
		'transactionId',
		'amount',
		'currency',
		'country',
		'email',
		'phoneNumber',
		'surName',
		'firstName',
		'lastName',
		'customerUrl',
		'merchantId',
		'gateway',
		'status',
        'paygate_response'
	];

	public function application()
	{
		return $this->belongsTo(Application::class);
	}
}
