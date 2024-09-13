<script src="https://cdn.tailwindcss.com"></script>

<div class="m-4 grid grid-cols-7 bg-gray-50 border border-1 mx-auto w-4/5">
  <!-- table head starts -->
  <div class="row-span-3 flex items-center justify-center border-[1px] font-medium">Sample</div>
  <div class="row-span-2 col-span-2 flex items-center justify-center border-[1px] font-medium">Date & Time</div>
  <div class=" flex items-center justify-center border-[1px] font-medium">CEMS</div>
  <div class="flex items-center justify-center border-[1px] font-medium">SRM</div>
  <div class="row-span-3 flex items-center justify-center border-[1px] font-medium">Diff, Di</div>
  <div class="row-span-3 flex items-center justify-center border-[1px] font-medium">Outlier (Y/N)</div>

  <div class="flex items-center justify-center border-[1px] font-medium">(xi)</div>
  <div class="flex items-center justify-center border-[1px] font-medium">(yi)</div>

  <div class="flex items-center justify-center border-[1px] font-medium">Start</div>
  <div class="flex items-center justify-center border-[1px] font-medium">End</div>
  <div class="flex items-center justify-center border-[1px] font-medium">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] font-medium">mg/m3</div>
<!-- table head ends -->

  <!-- table body starts -->

  <?php 
    $mxi = 0;
    $myi = 0; 
    $mdi = 0; 
    $count = 0;
    $ss = 0;
    $var = 0;
    $sd = 1;
    $ucl = 0;
    $lcl = 0;

  ?>

  @foreach($entries as $entry)
        @if (is_null($entry->sampleno) || $entry->sampleno === 1 || $entry->sampleno === 2 || $entry->sampleno === 3)
          <?php $mxi += 0 ?>
          <?php $myi += 0 ?>
          <?php $mdi += 0 ?>
        @else
          <?php 
          $mxi += $entry->cemsmg;
          ?>
          <?php $myi += $entry->srmmg ?>
          <?php $mdi += ($entry->srmmg - $entry->cemsmg) ?>
          <?php $count += 1;?>
        @endif
  @endforeach

  <?php 

  $mxi /= 18;
  $mxi = round($mxi, 2); 

  $myi /= 18;
  $myi = round($myi, 2); 

  $mdi /= 18;
  $mdi = round($mdi, 2); 


  
  ?>

  @foreach($entries as $entry)
      <?php $calc = 0?>
      @if (is_null($entry->sampleno) || $entry->sampleno === 1 || $entry->sampleno === 2 || $entry->sampleno === 3)
          <?php $calc -= 0 ?>
        @else
          <?php 
            $calc = (($entry->srmmg - $entry->cemsmg) - $mdi);
            $calc *= $calc; 
            $ss += $calc;
          ?>
        @endif
  @endforeach

  <?php 
      $var = $ss / ($count - 1);
      $sd = sqrt($var);

      $ucl = $mdi + (-2 * (2 * $sd));
      $lcl = $mdi - (-2 * (2 * $sd))
  ?>

  @foreach($entries as $entry)

        @if ($entry->sampleno === 1 || $entry->sampleno === 2 || $entry->sampleno === 3)
          <div class="flex items-center justify-center border-[1px] ">{{$entry->sampleno}}</div>
          <div class="flex items-center justify-center border-[1px] col-span-2 font-medium">Zero Values [< 5% ELV]</div>

          <div class="flex items-center justify-center border-[1px] ">{{$entry->cemsmg}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{round($entry->srmmg, 2)}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{($entry->srmmg - $entry->cemsmg)}}</div>
        @elseif (is_null($entry->sampleno))
          <div class="flex items-center justify-center border-[1px] ">Not used</div>
          <div class="flex items-center justify-center border-[1px] col-span-2 font-medium">Linearity Data [mg/mg3]</div>

          <div class="flex items-center justify-center border-[1px] ">N/A</div>
          <div class="flex items-center justify-center border-[1px] ">N/A</div>
          <div class="flex items-center justify-center border-[1px] ">N/A</div>
        @else
          <div class="flex items-center justify-center border-[1px] ">{{$entry->sampleno}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->start}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->end}}</div>

          <div class="flex items-center justify-center border-[1px] ">{{$entry->cemsmg}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{round($entry->srmmg, 2)}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{round(($entry->srmmg - $entry->cemsmg), 2)}}</div>

        @endif

        @if (($entry->srmmg - $entry->cemsmg) > 2.01 || ($entry->srmmg - $entry->cemsmg) < -2.04)
            <div class="flex items-center justify-center border-[1px] font-bold text-red-700">Yes</div>
          @elseif (is_null($entry->sampleno))
            <div class="flex items-center justify-center border-[1px] ">N/A</div>
          @else
            <div class="flex items-center justify-center border-[1px] font-bold text-green-700">No</div>
          @endif
        
  @endforeach


  <div class="row-span-5 flex border-[1px]"></div>
  <div class="col-span-2 flex items-center justify-center border-[1px] font-medium">Mean (CL)</div>
  <div class="flex items-center justify-center border-[1px] ">{{$mxi}}</div>
  <div class="flex items-center justify-center border-[1px] ">{{$myi}}</div>
  <div class="flex items-center justify-center border-[1px] ">{{$mdi}}</div>
  <div class="row-span-5 flex border-[1px]"></div>

  <div class="col-span-4 flex items-center justify-center border-[1px] font-medium">Standard Deviation of Differences</div>
  <div class="flex items-center justify-center border-[1px] ">{{round($sd, 2)}}</div>
  <div class="col-span-4 flex items-center justify-center border-[1px] font-medium">2 Standard Deviation</div>
  <div class="flex items-center justify-center border-[1px] ">{{round(($sd *= 2), 2)}}</div>
  <div class="col-span-4 flex items-center justify-center border-[1px] font-medium">Upper Central Limit at 2 Standard Deviation</div>
  <div class="flex items-center justify-center border-[1px] ">{{$ucl}}</div>
  <div class="col-span-4 flex items-center justify-center border-[1px] font-medium">Lower Central Limit at 2 Standard Deviation</div>
  <div class="flex items-center justify-center border-[1px] ">{{$lcl}}</div>

    <!-- table body ends -->
</div>
