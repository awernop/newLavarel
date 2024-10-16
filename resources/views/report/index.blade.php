@extends('layouts.main')
@section('content')
 <div class='container'>
    @foreach($reports as $report)
      <div class='card'>
        <span class='card__number'>{{$report['number']}}</span>
        <p class='card__description'>{{$report['description']}}</p>
      </div>
    @endforeach
 </div>
@endsection()