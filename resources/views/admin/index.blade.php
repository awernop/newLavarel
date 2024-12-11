<x-app-layout>
  <div class="py-12 flex-col place-content-center	">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
      <div class="">
      <p class='text-3xl font-semibold mb-3'>Новые заявления</p>
      <div class='flex flex-wrap gap-4'>
      @foreach($reports as $report)
          @if($report->status_id===1)
          <div class='div-col border bg-gray-200 rounded-md p-6 mt-4 w-80'>
            <p class="text-xl text-black font-semibold">{{$report->user->fullName()}}</p>
            <p class="text-sm text-gray-500 pb-2">{{\Carbon\Carbon::parse($report->created_at)->translatedFormat('j F Y')}}</p>
            <span class='text-xl font-semibold'>{{$report->number}}</span>
            <p class='card__description'>{{$report->description}}</p>
            @if($report->status_id==1)
              <form id="form-update-{{$report->id}}" action="{{route('reports.update')}}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$report->id}}">
                <select class='font-semibold text-xs bg-gray-300 p-2 rounded-xl	mt-3 w-min border-none' name="status_id" onchange="document.getElementById('form-update-{{$report->id}}').submit()">
                  @foreach($statuses as $status)
                    <option value="{{$status->id}}">{{$status->name}}</option>
                  @endforeach
                </select>
              </form>
            @else
              <p>{{$report->status->name}}</p>
            @endif
          </div>
          @endif
        @endforeach
      </div>
       
        <p class='text-3xl font-semibold mb-3 mt-7'>Уже просмотрены</p>
        <div class='flex flex-wrap gap-4'>
        @foreach($reports as $report)
        @if($report->status_id!=1)
        <div class='div-col border bg-gray-200 rounded-md p-6 mt-4 w-80'>
        <p class="text-xl text-black font-semibold">{{$report->user->fullName()}}</p>    
        <p class="text-sm text-gray-500 pb-2">{{\Carbon\Carbon::parse($report->created_at)->translatedFormat('j F Y')}}</p>
            <span class='text-xl font-semibold'>{{$report->number}}</span>
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
              <p class='font-semibold text-xs bg-gray-300 p-2 rounded-xl	mt-3 w-min border-none'>{{$report->status->name}}</p>
            @endif
          </div>
        @endif
        @endforeach
        </div>
      </div>
    </div>
  </div>
</x-app-layout>