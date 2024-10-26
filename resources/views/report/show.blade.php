@extends('layouts.main')
@section('content')
 <div class='container'>
  <div>
    <form method="POST" action="{{route('reports.update', $report->id)}}" class='report'>
      @csrf
      @method('put')
      <input name="number" type="text" placeholder="Номер авто" required class="input">
      <textarea name="description" placeholder="Описание" class="input"></textarea>
      <button type="submit" class="add">Обновить</button>
    </form>
  </div>
 </div>
@endsection()