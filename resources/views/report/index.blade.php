<x-app-layout>
  <x-slot name="header">
    <h2>
      {{__('Список заявлений')}}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rouded-lg">
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
            <p>{{$report->created_at}}</p>
            <span class='card__number'>{{$report->number}}</span>
            <p class='card__description'>{{$report->description}}</p>
            <p>{{$report->status->name}}</p>
            <form method="POST" action="{{route('reports.destroy', $report->id)}}">
              @method('delete')
              @csrf
              <input type="submit" value="Удалить" class="delete">
            </form>
            <a href="{{route('reports.update', $report->id)}}"></a>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</x-app-layout>