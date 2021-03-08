@extends('admin.shared.master')
@section('content')
@if( is_permited('dashboard','view') == 1 )
<div class="row">

<div class="col-lg-4 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
    <div class="inner text-center">
        <h3>{{ $users->count() }}</h3>

        <p>Users ( المستخدمين )</p>

    </div>
    <a href="{{ route('users.index') }}" class="small-box-footer">More info </a>
    </div>
</div>

</div>
@else
 <h1> Not Permitied ( ليس لديك الصلاحيات لرؤية هذا المحتوي ) </h1>
@endif
@endsection
