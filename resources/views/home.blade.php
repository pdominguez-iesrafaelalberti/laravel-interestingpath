@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hola  {{Auth::user()->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('//TODO: Aquí mostrar mensajes') }}
                    @if(Session::has('success'))
        <div class="alert alert-success" role="alert"><p> <strong> {{ Session::get('success') }} </strong> </p></div>
        @endif
        @if(Session::has('error'))
        <div class="alert alert-danger" role="alert"><p> <strong> {{ Session::get('error') }} </strong> </p></div>
        @endif

                </div>
            </div>
        </div>
     

        <div class="container">
        @can('isAdmin')
                @include('user.admin')
               
                    @elsecan('isManager')
                        @include('user.manager')
                    @else

                        @include('user.client')
                    @endcan


    </div>
    </div>
</div>
@endsection
