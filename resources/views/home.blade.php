@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if ($user->roles_id==1)
                    Selamat Datang di Halaman Admin

                    @else
                    Selamat Datang di Halaman User

                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
<strong>{{date('D d M Y')}}
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!')
</script>
@stop
