<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CandidateQualifiedInterview
 * 
 * @property int $id
 * @property string $exam_number
 * @property int|null $score
 * @property int|null $application_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Application|null $application
 *
 * @package App\Models
 */
class CandidateQualifiedInterview extends Model
{
	protected $table = 'candidate_qualified_interviews';

	protected $casts = [
		'score' => 'int',
		'application_id' => 'int'
	];

	protected $fillable = [
		'exam_number',
		'score',
		'application_id'
	];

	public function application()
	{
		return $this->belongsTo(Application::class);
	}
}
