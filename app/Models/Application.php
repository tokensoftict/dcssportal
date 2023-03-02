<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Application
 *
 * @property int $id
 * @property string $surname
 * @property string $firstname
 * @property string|null $othernames
 * @property string $exam_number
 * @property string|null $gender
 * @property string|null $passport_path
 * @property string|null $age
 * @property string|null $telephone
 * @property string|null $local_govt
 * @property string|null $email
 * @property string|null $address
 * @property int|null $parental_status_id
 * @property string|null $parent_names
 * @property string|null $rank
 * @property string|null $svc
 * @property string|null $svc_number
 * @property bool $retired
 * @property bool $is_admin
 * @property string|null $retired_number
 * @property Carbon|null $dob
 * @property string|null $unitFormation
 * @property int|null $school_id
 * @property int|null $school2_id
 * @property int|null $school3_id
 * @property int|null $state_id
 * @property int|null $exam_state_id
 * @property int|null $center_id
 * @property int $num_of_edits
 * @property int|null $user_id
 * @property int|null $session_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Center|null $center
 * @property State|null $state
 * @property ParentalStatus|null $parental_status
 * @property School|null $school
 * @property Session|null $session
 * @property User|null $user
 * @property Collection|Transaction[] $transactions
 * @package App\Models
 */
class Application extends Model
{
	protected $table = 'applications';

	protected $casts = [
		'parental_status_id' => 'int',
		'retired' => 'bool',
		'school_id' => 'int',
		'school2_id' => 'int',
		'school3_id' => 'int',
		'state_id' => 'int',
		'exam_state_id' => 'int',
		'center_id' => 'int',
		'num_of_edits' => 'int',
		'user_id' => 'int',
		'session_id' => 'int',
        'is_admin' => 'bool'
	];


	protected $fillable = [
		'surname',
		'firstname',
		'othernames',
		'exam_number',
		'gender',
		'passport_path',
		'age',
		'telephone',
		'local_govt',
		'email',
		'address',
		'parental_status_id',
		'parent_names',
		'rank',
		'svc',
		'svc_number',
		'retired',
		'retired_number',
		'dob',
		'unitFormation',
        'state_id',
		'school_id',
		'school2_id',
		'school3_id',
        'school_type_id',
        'school_type_id2',
		'state_id',
		'exam_state_id',
		'center_id',
		'num_of_edits',
		'user_id',
		'session_id',
        'is_admin'
	];

    protected $appends = ['fullname'];



    public function getFullnameAttribute()
    {
        return $this->surname." ".$this->firstname." ".$this->othernames;
    }

	public function center()
	{
		return $this->belongsTo(Center::class);
	}

	public function state()
	{
		return $this->belongsTo(State::class);
	}

    public function examState()
    {
        return $this->belongsTo(State::class, 'exam_state_id');
    }

	public function parental_status()
	{
		return $this->belongsTo(ParentalStatus::class);
	}

	public function school()
	{
		return $this->belongsTo(School::class);
	}

    public function school_type()
    {
        return $this->belongsTo(SchoolType::class, 'school_type_id');
    }

    public function school_type2()
    {
        return $this->belongsTo(SchoolType::class, 'school_type_id2');
    }

    public function school2()
    {
        return $this->belongsTo(School::class,"school2_id");
    }

	public function session()
	{
		return $this->belongsTo(Session::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
