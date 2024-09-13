
<script src="https://cdn.tailwindcss.com"></script>

<!-- <link rel="stylesheet" href="https://stackoverflow.com/questions/72955073/how-to-group-table-rows-in-html-css-tailwind"> -->

<div class="m-4 grid grid-cols-9 bg-gray-50 border border-1 mx-auto w-4/5">
  <!-- table head starts -->
  <div class="row-span-3 flex items-center justify-center border-[1px] font-medium">Sample</div>
  <div class="row-span-2 col-span-2 flex items-center justify-center border-[1px] font-medium">Date & Time</div>
  <div class="col-span-3 flex items-center justify-center border-[1px] font-medium">CEMS</div>
  <div class="col-span-3 flex items-center justify-center border-[1px] font-medium">SRM</div>

  <div class="flex items-center justify-center border-[1px] font-medium">(xi)</div>
  <div class="flex items-center justify-center border-[1px] font-medium">O2</div>
  <div class="flex items-center justify-center border-[1px] font-medium">H2O</div>
  <div class="flex items-center justify-center border-[1px] font-medium">(yi)</div>
  <div class="flex items-center justify-center border-[1px] font-medium">O2</div>
  <div class="flex items-center justify-center border-[1px] font-medium">H2O</div>

  <div class="flex items-center justify-center border-[1px] font-medium">Start</div>
  <div class="flex items-center justify-center border-[1px] font-medium">End</div>
  <div class="flex items-center justify-center border-[1px] font-medium">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] font-medium">%</div>
  <div class="flex items-center justify-center border-[1px] font-medium">%</div>
  <div class="flex items-center justify-center border-[1px] font-medium">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] font-medium">%</div>
  <div class="flex items-center justify-center border-[1px] font-medium">%</div>
<!-- table head ends -->

      @foreach($entries as $entry)
      
        @if ($entry->sampleno === 1 || $entry->sampleno === 2 || $entry->sampleno === 3)
          <div class="flex items-center justify-center border-[1px] ">{{$entry->sampleno}}</div>
          <div class="flex items-center justify-center border-[1px] col-span-2 font-medium">Zero Values [< 5% ELV]</div>

          <div class="flex items-center justify-center border-[1px] ">{{$entry->cemsmg}}</div>
          <div class="flex items-center justify-center border-[1px] ">N/A</div>
          <div class="flex items-center justify-center border-[1px] ">N/A</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->srmmg}}</div>
          <div class="flex items-center justify-center border-[1px] ">N/A</div>
          <div class="flex items-center justify-center border-[1px] ">N/A</div>
        @elseif (is_null($entry->sampleno))
          <div class="flex items-center justify-center border-[1px] ">Not used</div>
          <div class="flex items-center justify-center border-[1px] col-span-2 font-medium">Linearity Data [mg/mg3]</div>

          <div class="flex items-center justify-center border-[1px] ">{{$entry->cemsmg}}</div>
          <div class="flex items-center justify-center border-[1px] ">N/A</div>
          <div class="flex items-center justify-center border-[1px] ">N/A</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->srmmg}}</div>
          <div class="flex items-center justify-center border-[1px] ">N/A</div>
          <div class="flex items-center justify-center border-[1px] ">N/A</div>
        @else
          <div class="flex items-center justify-center border-[1px] ">{{$entry->sampleno}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->start}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->end}}</div>

          <div class="flex items-center justify-center border-[1px] ">{{$entry->cemsmg}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->cemsO2}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->cemsH2O}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->srmmg}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->srmO2}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->srmH2O}}</div>
        @endif

      @endforeach

    <!-- </table>
  </div> -->
</div>

