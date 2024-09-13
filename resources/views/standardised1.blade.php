<script src="https://cdn.tailwindcss.com"></script>

<div class="m-4 grid grid-cols-7 bg-gray-50 border border-1 mx-auto w-4/5">
  <!-- table head starts -->

  <div class="row-span-3 flex items-center justify-center border-[1px] font-medium">Sample</div>
  <div class="row-span-2 col-span-2 flex items-center justify-center border-[1px] font-medium">Date & Time</div>
  <div class=" flex items-center justify-center border-[1px] font-medium">CEMS</div>
  <div class="flex items-center justify-center border-[1px] font-medium">SRM</div>
  <div class="row-span-3 flex items-center justify-center border-[1px] font-medium">Diff (xi - yi)</div>
  <div class="row-span-3 flex items-center justify-center border-[1px] font-medium">Diff < half C.I at ELV?</div>

  <div class="flex items-center justify-center border-[1px] font-medium">(xi)</div>
  <div class="flex items-center justify-center border-[1px] font-medium">(yi)</div>

  <div class="flex items-center justify-center border-[1px] font-medium">Start</div>
  <div class="flex items-center justify-center border-[1px] font-medium">End</div>
  <div class="flex items-center justify-center border-[1px] font-medium">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] font-medium">mg/m3</div>
<!-- table head ends -->

  <?php 
    $half = 5;
    $half = -$half;
  ?>

  @foreach($entries as $entry)
        
        @if ($entry->sampleno === 1 || $entry->sampleno === 2 || $entry->sampleno === 3)
          <div class="flex items-center justify-center border-[1px] ">{{$entry->sampleno}}</div>
          <div class="flex items-center justify-center border-[1px] col-span-2 font-medium">Zero Values [< 5% ELV]</div>

          <div class="flex items-center justify-center border-[1px] ">{{$entry->scems}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->ssrm}}</div>
          <?php 
            $diff = $entry->scems - $entry->ssrm;
          ?>
        @elseif (is_null($entry->sampleno))
          <div class="flex items-center justify-center border-[1px] ">Not used</div>
          <div class="flex items-center justify-center border-[1px] col-span-2 font-medium">Linearity Data [mg/mg3]</div>

          <div class="flex items-center justify-center border-[1px] ">{{$entry->cemsmg}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->srmmg}}</div>
          <?php 
            $diff = $entry->cemsmg - $entry->srmmg;
          ?>
        @else
          <div class="flex items-center justify-center border-[1px] ">{{$entry->sampleno}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->start}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->end}}</div>

          <div class="flex items-center justify-center border-[1px] ">{{$entry->scems}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->ssrm}}</div>
          <?php 
            $diff = $entry->scems - $entry->ssrm;
          ?>
        @endif
     
          <div class="flex items-center justify-center border-[1px] ">{{round($diff, 2)}}</div>

        @if ($diff <= $half)
          <div class="flex items-center justify-center border-[1px]">No</div> 
        @else
          <div class="flex items-center justify-center border-[1px] font-bold">Yes</div> 
        @endif

      @endforeach
