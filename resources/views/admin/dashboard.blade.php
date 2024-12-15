
@extends('layouts.admin')

@section('title')
الرئيسية
@endsection

@section('contentheader')
الرئيسية
@endsection

@section('contentheaderlink')
<a herf="{{ route('admin.dashboard')}}"> الرئيسية</a>
@endsection

@section('contentheaderactive')
عرض
@endsection

@section('content')
<div class="row" style="
    background-image: url('{{ asset('assets/admin/imgs/dashboardpng.png') }}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 100vh; /* أو أي ارتفاع يناسب التصميم */
    
"> 
</div>
@endsection