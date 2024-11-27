<x-app-layout>
  <x-slot name="header">
    <h2>
      {{__('Панель администратора')}}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rouded-lg">
        @foreach($reports as $report)
          <div class='card'>
            <p>{{\Carbon\Carbon::parse($report->created_at)->translatedFormat('j F Y')}}</p>
            <p>{{$report->user->fullName()}}</p>
            <span class='card__number'>{{$report->number}}</span>
            <p class='card__description'>{{$report->description}}</p>
            @if($report->status_id==1)
              <form id="form-update-{{$report->id}}" action="{{route('reports.update')}}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$report->id}}">
                <select name="status_id" onchange="document.getElementById('form-update-{{$report->id}}').submit()">
                  @foreach($statuses as $status)
                    <option value="{{$status->id}}">{{$status->name}}</option>
                  @endforeach
                </select>
              </form>
            @else
              <p>{{$report->status->name}}</p>
            @endif
          </div>
        @endforeach
      </div>
    </div>
  </div>
</x-app-layout>