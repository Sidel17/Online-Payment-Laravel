@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="./css/styles.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

				<h1 style="padding-left: 10%; padding-top:5%;">Balance</h>
            </div>
        </div>
    </div>
</div>
@endsection
