<script src="https://cdn.tailwindcss.com"></script>

<div class="flex-col w-1/12">
@foreach($stations as $station)
    <button class="border-2 p-2 rounded-lg items-center">
        <h1 class="font-bold">Station {{$station->idno}}</h1>
        <h1 class="font-medium text-gray-700">{{$station->idname}}</h1>
    </button>
@endforeach
</div>

@foreach ($stations as $station)

    <div class="grid grid-cols-3">
        @foreach($entries as $entry)
            @if($entry->idno == $station->idno)
                <div class="flex items-center justify-center border-[1px] ">{{$entry->idno}}</div>
                <div class="flex items-center justify-center border-[1px] ">{{$entry->sampleno}}</div>
                <div class="flex items-center justify-center border-[1px] ">{{$entry->gastype}}</div>
            @endif
        @endforeach
    </div>
@endforeach
