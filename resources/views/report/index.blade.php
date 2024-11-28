<x-app-layout>
  <x-slot name="header">
    <h2>
      {{__('Список заявлений')}}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
    <a class="underline text-sm text-blue-700 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('reports.create') }}">
                {{ __('Создать заявление') }}
            </a>
        @foreach($reports as $report)
          <div class='div-col border bg-slate-200 rounded-md p-6 mt-4'>
            <p class="text-sm text-gray-500">{{\Carbon\Carbon::parse($report->created_at)->translatedFormat('j F Y')}}</p>
            <span class='card__number'>{{$report->number}}</span>
            <p class='card__description'>{{$report->description}}</p>
            <p>{{$report->status->name}}</p>
            <form method="POST" action="{{route('reports.destroy', $report->id)}}">
              @method('delete')
              @csrf
              <input type="submit" value="Удалить" class="text-sm text-red-600">
            </form>
            <a href="{{route('reports.update', $report->id)}}"></a>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</x-app-layout>