<script src="https://cdn.tailwindcss.com"></script>

<div class="m-4 grid grid-cols-8 bg-gray-50 border border-1 mx-auto w-4/5">
  <!-- table head starts -->
  <div class="row-span-2 flex items-center justify-center border-[1px] font-medium">Sample</div>
  <div class="col-span-2 flex items-center justify-center border-[1px] font-medium">Date & Time</div>
  <div class="row-span-2 flex items-center justify-center border-[1px] font-medium">CEMS 02, %</div>
  <div class="row-span-2 flex items-center justify-center border-[1px] font-medium">CEMS H2O, %</div>
  <div class="row-span-2 flex items-center justify-center border-[1px] font-medium">CEMS, Raw in mg/m3 (xi)</div>
  <div class="row-span-2 flex items-center justify-center border-[1px] font-medium">CEMS Calibrated Value (yi)</div>
  <div class="row-span-2 flex items-center justify-center border-[1px] font-medium">CEMS Calibrated Value, Corrected to Reference Conditions (yi)</div>

  <div class="flex items-center justify-center border-[1px] font-medium">Start</div>
  <div class="flex items-center justify-center border-[1px] font-medium">End</div>
<!-- table head ends -->

  <!-- table body starts -->

  <?php 
    $cal = 0;
    $corr = 0;
  ?>


  @foreach($entries as $entry)
        
        @if ($entry->sampleno === 1 || $entry->sampleno === 2 || $entry->sampleno === 3)
          <div class="flex items-center justify-center border-[1px] ">{{$entry->sampleno}}</div>
          <div class="flex items-center justify-center border-[1px] col-span-2 font-medium">Surrogates Zero Value</div>
          <div class="flex items-center justify-center border-[1px] ">N/A</div>
          <div class="flex items-center justify-center border-[1px] ">N/A</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->cemsmg}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->srmmg}}</div> 
          <div class="flex items-center justify-center border-[1px] ">test</div> 
        @elseif (is_null($entry->sampleno))
          <div class="flex items-center justify-center border-[1px] ">Not used</div>
          <div class="flex items-center justify-center border-[1px] col-span-2 font-medium">Linearity Data [mg/mg3]</div>
          <div class="flex items-center justify-center border-[1px] ">N/A</div>
          <div class="flex items-center justify-center border-[1px] ">N/A</div>
          <div class="flex items-center justify-center border-[1px] ">N/A</div>
          <div class="flex items-center justify-center border-[1px] ">N/A</div>
          <div class="flex items-center justify-center border-[1px] ">N/A</div>
        @else
          <div class="flex items-center justify-center border-[1px] ">{{$entry->sampleno}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->start}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->end}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->cemsO2}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->cemsH2O}}</div>

          @if ($entry-> gastype === 'NOx')
          <?php 
            $cal = (1.0010 * $entry->cemsmg) + 0.0267;
          ?>
          @elseif ($entry-> gastype === 'CO')
          <?php 
            $cal = (0.9995 * $entry->cemsmg) + 0.2099;
          ?>
          @else
          <?php 
            $cal = (1.0005 * $entry->cemsmg) + 0.0512;
          ?>
          @endif
          <div class="flex items-center justify-center border-[1px] ">{{round($entry->cemsmg, 2)}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{round($cal, 2)}}</div> 
          <div class="flex items-center justify-center border-[1px] ">test</div> 
        @endif      

      @endforeach

  @if ($entry-> gastype === 'NOx')
  <div class="col-span-2 flex items-center justify-center border-[1px] font-medium">Calibration Function</div>
  <div class="flex items-center justify-center border-[1px]">y</div>
  <div class="flex items-center justify-center border-[1px]">=</div>
  <div class="flex items-center justify-center border-[1px]">1.0010</div>
  <div class="flex items-center justify-center border-[1px]">x</div>
  <div class="flex items-center justify-center border-[1px]">+</div>
  <div class="flex items-center justify-center border-[1px]">0.0267</div>

  @elseif ($entry-> gastype === 'CO')
  <div class="col-span-2 flex items-center justify-center border-[1px] font-medium">Calibration Function</div>
  <div class="flex items-center justify-center border-[1px]">y</div>
  <div class="flex items-center justify-center border-[1px]">=</div>
  <div class="flex items-center justify-center border-[1px]">0.9995</div>
  <div class="flex items-center justify-center border-[1px]">x</div>
  <div class="flex items-center justify-center border-[1px]">+</div>
  <div class="flex items-center justify-center border-[1px]">0.2099</div>

  @else
  <div class="col-span-2 flex items-center justify-center border-[1px] font-medium">Calibration Function</div>
  <div class="flex items-center justify-center border-[1px]">y</div>
  <div class="flex items-center justify-center border-[1px]">=</div>
  <div class="flex items-center justify-center border-[1px]">1.0005</div>
  <div class="flex items-center justify-center border-[1px]">x</div>
  <div class="flex items-center justify-center border-[1px]">+</div>
  <div class="flex items-center justify-center border-[1px]">0.0512</div>
  @endif

    <!-- table body ends -->
</div>