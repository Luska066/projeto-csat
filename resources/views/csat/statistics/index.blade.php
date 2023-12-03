

@extends('layouts.auth')

@section('content')
    <div class="flex flex-1 w-screen h-screen justify-between items-center ">

        <div class="m-5 mt-0 p-5 p-0">
            <div class="mb-lg-2 brad" >
                {{Breadcrumbs::render('csat.statistics')}}
            </div>
            <div class="h-25">
                <chart-component/>
            </div>

        </div>
    </div>


@endsection
