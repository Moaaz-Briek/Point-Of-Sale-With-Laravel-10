@extends('layouts.admin');
@section('title')
    الرئيسية
@endsection
@section('contentHeader')
    الرئيسية
@endsection
@section('contentHeaderLink')
    <a href="{{route('admin.dashboard')}}">الرئيسية</a>
@endsection
@section('contentHeaderActive')
    عرض
@endsection
@section('content')
<div class="row" style="background-image: url({{asset('assets/admin/imgs/dash.jpg')}}); background-size:cover; background-repeat: no-repeat; min-height: 600px "></div>
@endsection
