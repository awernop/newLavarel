@extends('layouts.main')
@section('content')
 <div class='container'>
    @foreach($reports as $report)
      <div class='card'>
        <span class='card__number'>{{$report['number']}}</span>
        <p class='card__description'>{{$report['description']}}</p>
        <form method="POST" action="{{route('reports.destroy', $report->id)}}">
          @method('delete')
          @csrf
          <input type="submit" value="Удалить">
        </form>
      </div>
    @endforeach
 </div>
@endsection()