<?php

namespace App\Http\Livewire;

use App\Models\Center;
use Livewire\Component;
use Livewire\WithPagination;

class CenterStatsReport extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 12;

    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $centers = Center::query()
            ->withCount([
                'applications as total_apps',
                'applications as completed_apps' => function ($query) {
                    $query->whereNotNull('exam_number');
                },
                'applications as pending_apps' => function ($query) {
                    $query->whereNull('exam_number');
                }
            ])
            ->where('name', 'like', '%' . $this->search . '%')
            ->orderBy('name')
            ->paginate($this->perPage);

        return view('livewire.center-stats-report', [
            'centers' => $centers
        ]);
    }
}
