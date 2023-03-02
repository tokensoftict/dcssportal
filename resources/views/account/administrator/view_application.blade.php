@extends('account.layout.main')
@section('title',"DIRECTORATE OF COMMAND SCHOOLS SERVICE")

@section('content')

    <div class="row pb-50 mb-10 ">
        <div class="col-auto">
            <h1 class="text-30 lh-12 fw-700">Query Application</h1>
            <div class="mt-10">Query Application</div>
        </div>
    </div>
    @if(!isset($user))
        <div class="row y-gap-30">
            <div class="col-12">
                <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100 p-4">

                    <div class="d-flex items-center py-20 px-30 border-bottom-light">
                        <h2 class="text-17 lh-1 fw-500">Query Application</h2>
                    </div>

                    <div class="py-30 px-30">
                        <form class="contact-form row y-gap-30" method="get">
                            <div class="col-12">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email Address</label>
                                <input type="text" name="email" placeholder="Enter Email Address">
                            </div>

                            <div class="row y-gap-20 justify-between pt-30">
                                <div class="col-auto">

                                </div>

                                <div class="col-auto">
                                    <button type="submit" class="button -md -green-1 text-white">Query</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    @else

        <div class="row y-gap-30">
            <div class="col-12">
                <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
                    <div class="tabs -active-purple-2 js-tabs">
                        <div class="tabs__controls d-flex items-center pt-20 px-30 border-bottom-light js-tabs-controls">
                            <button class="text-light-1 lh-12 tabs__button js-tabs-button is-active" data-tab-target=".-tab-item-1" type="button">
                                Application
                            </button>
                            <button class="text-light-1 lh-12 tabs__button js-tabs-button ml-30" data-tab-target=".-tab-item-2" type="button">
                                Transaction(s)
                            </button>
                            <button class="text-light-1 lh-12 tabs__button js-tabs-button ml-30" data-tab-target=".-tab-item-3" type="button">
                                Edit Account Information
                            </button>
                        </div>
                        <div class="tabs__content py-30 px-30 js-tabs-content">

                            <div class="tabs__pane -tab-item-1 is-active">
                                <livewire:my-application :application="$application"/>
                            </div>

                            <div class="tabs__pane -tab-item-2">
                                <livewire:requery-transactions :application="$application"/>
                            </div>

                            <div class="tabs__pane -tab-item-3">

                                <livewire:edit-account-information :user="$application->user"/>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endif
@endsection
