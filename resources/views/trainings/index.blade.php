@extends('layouts.app')

@section('content')
    <h1>Select a Body Part</h1>
    
    <!-- 胸のボタン -->
    <a href="{{ url('/trainings/show') }}" class="btn btn-primary">[胸]</a>
    <br><br>
    <a href="{{ url('/calendar') }}" class="btn btn-primary">[カレンダー]</a>
@endsection
