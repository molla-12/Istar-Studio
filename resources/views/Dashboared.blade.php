@extends('sidebar')

@section('content')
    <div class="container ">
        <div class="row pl-4">
            <div class="col-3 p-4">
                <div class="card rounded shadow">
                    <div class="card-body">Total User</div>
                </div>
            </div>
            <div class="col-3 p-4">
                <div class="card rounded shadow">
                    <div class="card-body">Total Male</div>
                </div>
            </div>
            <div class="col-3 p-4">
                <div class="card rounded shadow">
                    <div class="card-body">Total Female</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-5 mx-5  p-2 bg-white rounded shadow">
                {!! $chart->container() !!}
            </div>
            <div class="col-sm-5 p-2  bg-white rounded shadow">
                {!! $chartT->container() !!}
            </div>

            <div class="col-sm-12 mt-3 ">
                <div class="row">
                    <div class="col-sm-5 mx-5 p-2  bg-white rounded shadow">
                        {!! $chartTT->container() !!}
                    </div>
                    <div class="col-sm-5 p-2  bg-white rounded shadow">
                        {!! $chartTTT->container() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}

    <script src="{{ $chartT->cdn() }}"></script>
    {{ $chartT->script() }}

    <script src="{{ $chartTT->cdn() }}"></script>
    {{ $chartTT->script() }}

    <script src="{{ $chartTTT->cdn() }}"></script>
    {{ $chartTTT->script() }}
@endsection
