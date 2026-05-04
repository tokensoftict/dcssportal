<div class="p-40 pt-10">
    <style>
        .custom-card {
            transition: transform 0.2s ease-in-out, shadow 0.2s ease-in-out;
            background: #ffffff;
            border: 1px solid #f0f0f0;
        }

        .custom-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05) !important;
        }

        .pagination {
            display: flex !important;
            padding-left: 0;
            list-style: none;
            border-radius: 0.25rem;
            flex-direction: row !important;
            justify-content: center;
            align-items: center;
        }

        .page-item {
            display: inline-block !important;
            margin: 0 5px;
        }

        .page-link {
            padding: 10px 15px;
            border-radius: 8px !important;
            border: 1px solid #eee !important;
            color: #6440FB !important;
            background-color: #fff;
        }

        .page-item.active .page-link {
            background-color: #6440FB !important;
            color: #fff !important;
            border-color: #6440FB !important;
        }
    </style>
    <div class="row " style="margin-top : -40px;">
        <div class="col-12">
            <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 p-40">
                <div class="row justify-between items-center pb-20 y-gap-20" style="padding: 20px;">
                    <div class="col-md-auto">
                        <h2 class="text-17 lh-1 fw-500">Center Summary Report</h2>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group mb-0 w-1/1">
                            <input wire:model.debounce.500ms="search" type="text" class="form-control w-1/1"
                                placeholder="Search centers by name..."
                                style="border-radius: 8px; padding: 12px 20px; border: 1px solid #eee; width: 100%;">
                        </div>
                    </div>
                </div>

                <div class="row y-gap-30 pt-20" style="padding: 20px;">
                    @forelse($centers as $center)
                        <div class="col-xl-4 col-md-6">
                            <div class="px-30 py-30 rounded-16 border-light -dark-border-dark-1 shadow-2 h-100 custom-card">
                                <div class="d-flex justify-between items-center mb-20">
                                    <div class="text-17 fw-500 text-dark-1">{{ $center->name }}</div>
                                    <div class="d-flex justify-center items-center size-40 rounded-full bg-blue-1-05">
                                        <i class="icon-location text-16 text-blue-1"></i>
                                    </div>
                                </div>

                                <div class="row y-gap-20">
                                    <div class="col-4">
                                        <div class="text-14 lh-1 fw-500 text-light-1">Total</div>
                                        <div class="text-18 lh-1 fw-700 text-dark-1 mt-5">{{ $center->total_apps }}</div>
                                    </div>
                                    <div class="col-4">
                                        <div class="text-14 lh-1 fw-500 text-light-1">Paid</div>
                                        <div class="text-18 lh-1 fw-700 text-blue-1 mt-5">{{ $center->completed_apps }}
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="text-14 lh-1 fw-500 text-light-1">Pending</div>
                                        <div class="text-18 lh-1 fw-700 text-purple-1 mt-5">{{ $center->pending_apps }}
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-25">
                                    <div class="d-flex justify-between items-center mb-10">
                                        <div class="text-13 lh-1 fw-500 text-light-1">Completion Progress</div>
                                        <div class="text-13 lh-1 fw-500 text-dark-1">
                                            {{ $center->total_apps > 0 ? round(($center->completed_apps / $center->total_apps) * 100) : 0 }}%
                                        </div>
                                    </div>
                                    <div class="progress-bar rounded-full bg-light-3" style="height: 6px;">
                                        <div class="progress-bar__content rounded-full bg-blue-1"
                                            style="width: {{ $center->total_apps > 0 ? ($center->completed_apps / $center->total_apps) * 100 : 0 }}%; height: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="text-center py-50">
                                <i class="icon-search text-50 text-light-1 mb-20"></i>
                                <div class="text-18 fw-500 text-light-1">No centers found matching your search.</div>
                            </div>
                        </div>
                    @endforelse
                </div>

                <div class="row justify-center pt-40">
                    <div class="col-auto d-flex justify-center pagination-aligned">
                        {{ $centers->links() }}
                    </div>
                    <br /> <br /> <br />
                </div>
            </div>
        </div>
    </div>
</div>
