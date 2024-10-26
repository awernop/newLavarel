@extends('layouts.main')
@section('content')
<script>
  function openModal(){
    document.getElementById('modal').style.display='block';
  }
  function closeModal(){
    document.getElementById('modal').style.display='none';
  }
</script>
 <div class='container'>
  <div>
    <form method="POST" action="{{route('reports.store')}}" class='report'>
      @csrf
      <input name="number" type="text" placeholder="Номер авто" required class="input">
      <textarea name="description" placeholder="Описание" class="input"></textarea>
      <button type="submit" class="add">Добавить</button>
    </form>
  </div>
    @foreach($reports as $report)
      <div class='card'>
        <span class='card__number'>{{$report['number']}}</span>
        <p class='card__description'>{{$report['description']}}</p>
        <form method="POST" action="{{route('reports.destroy', $report->id)}}">
          @method('delete')
          @csrf
          <input type="submit" value="Удалить" class="delete">
        </form>
        <button class="add" onClick="openModal()">Обновить</button>
      </div>
    @endforeach
 </div>

 <div id="modal" class="window">
 <div>
  <button onClick="closeModal()" class="add">Х</button>
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