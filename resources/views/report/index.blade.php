<x-app-layout>

  <div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
    <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-350" href="{{ route('reports.create') }}">
                {{ __('СОЗДАТЬ ЗАЯВЛЕНИЕ') }}
            </a>
            <div class='flex flex-wrap gap-4'>
            @foreach($reports as $report)
          <div class='div-col border bg-gray-200 rounded-md p-6 mt-4 w-80'>
            <p class="text-sm text-gray-500">{{\Carbon\Carbon::parse($report->created_at)->translatedFormat('j F Y')}}</p>
            <span class='text-xl font-semibold	'>{{$report->number}}</span>
            <p>{{$report->description}}</p>
            <p class='font-semibold text-xs bg-gray-300 p-2 rounded-xl	mt-3 w-min border-none'>{{$report->status->name}}</p>
            <!-- <form method="POST" action="{{route('reports.destroy', $report->id)}}">
              @method('delete')
              @csrf
              <input type="submit" value="Удалить" class="text-sm text-red-600">
            </form> -->
            <a href="{{route('reports.update', $report->id)}}"></a>
          </div>
        @endforeach
            </div>
        
      </div>
      @if(count($reports)===0)
      <div class="flex place-content-center pt-48">
        <span class='font-semibold text-4xl uppercase tracking-widest text-gray-300'>Пока тут ничего нет</span>
      </div>
      @endif
    </div>
  </div>
</x-app-layout>