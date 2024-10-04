<script src="https://cdn.tailwindcss.com"></script>

<div class="m-4 grid grid-cols-9 bg-gray-50 border border-1 mx-auto w-4/5">

  <!-- table head starts -->
  <div class="row-span-2 flex items-center justify-center border-[1px] font-medium">Sample</div>
  <div class=" col-span-2 flex items-center justify-center border-[1px] font-medium">Date & Time</div>
  <div class=" col-span-2 flex items-center justify-center border-[1px] font-medium">Raw Data</div>
  <div class="row-span-2 flex items-center justify-center border-[1px] font-medium">xi - x̄</div>
  <div class="row-span-2 flex items-center justify-center border-[1px] font-medium">yi - ȳ</div>
  <div class="row-span-2 flex items-center justify-center border-[1px] font-medium">(xi - x̄) x (yi - ȳ)</div>
  <div class="row-span-2 flex items-center justify-center border-[1px] font-medium">(xi - x̄)²</div>

  <div class="flex items-center justify-center border-[1px] font-medium">Start</div>
  <div class="flex items-center justify-center border-[1px] font-medium">End</div>

  <div class=" flex items-center justify-center border-[1px] font-medium">CEMS (xi)</div>
  <div class="flex items-center justify-center border-[1px] font-medium">SRM (yi)</div>
<!-- table head ends -->

<?php 
  $axi = 0;
  $ayi = 0;
  $count = 0;
  $xx = 0;
  $yy = 0;
  $xyi = 0;
  $xxi = 0;
  $axyi = 0;
  $axxi = 0;
?>

@foreach($entries as $entry)
  @if (is_null($entry->sampleno))
  <?php     
    $axi += 0;
    $ayi += 0;
    $xyi += 0;
    $xxi += 0;
    ?>
  @else 
  <?php     
    $axi += $entry->cemsmg;
    $ayi += $entry->srmmg;

    $count++;
    ?>
  @endif
    
@endforeach

<?php 
  $axi /= $count;
  $ayi /= $count;
?>

@foreach($entries as $entry)
  @if (is_null($entry->sampleno))
  <?php
    $xx += 0;
    $yy += 0;
  ?>
  @else
  <?php
    $xx = $entry->cemsmg - $axi;
    $yy = $entry->srmmg - $ayi;
  ?>
  @endif
@endforeach


@foreach($entries as $entry)
        
        @if ($entry->sampleno === 1 || $entry->sampleno === 2 || $entry->sampleno === 3)
          <div class="flex items-center justify-center border-[1px] ">{{$entry->sampleno}}</div>
          <div class="flex items-center justify-center border-[1px] col-span-2 font-medium">Zero Values [< 5% ELV]</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->cemsmg}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->srmmg}}</div>

          <?php
            $xx = $entry->cemsmg - $axi;
            $yy = $entry->srmmg - $ayi;

            $xyi = $xx * $yy;
            $xxi = $xx * $xx;

            $axyi += $xyi;
            $axxi += $xxi;
          ?>

          <div class="flex items-center justify-center border-[1px] ">{{round($xx, 2)}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{round($yy, 2)}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{round($xyi, 2)}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{round($xxi, 2)}}</div>
        @elseif (is_null($entry->sampleno))
          <div class="flex items-center justify-center border-[1px] ">Not used</div>
          <div class="flex items-center justify-center border-[1px] col-span-2 font-medium">Linearity Data [mg/mg3]</div>
          <div class="flex items-center justify-center border-[1px] ">N/A</div>
          <div class="flex items-center justify-center border-[1px] ">N/A</div>

          <div class="flex items-center justify-center border-[1px] ">N/A</div>
          <div class="flex items-center justify-center border-[1px] ">N/A</div>
          <div class="flex items-center justify-center border-[1px] ">N/A</div>
          <div class="flex items-center justify-center border-[1px] ">N/A</div>
        @else
          <div class="flex items-center justify-center border-[1px] ">{{$entry->sampleno}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->start}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->end}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->cemsmg}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->srmmg}}</div>

          <?php
            $xx = $entry->cemsmg - $axi;
            $yy = $entry->srmmg - $ayi;

            $xyi = $xx * $yy;
            $xxi = $xx * $xx;

            $axyi += $xyi;
            $axxi += $xxi;
          ?>

          
          <div class="flex items-center justify-center border-[1px] ">{{round($xx, 2)}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{round($yy, 2)}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{round($xyi, 2)}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{round($xxi, 2)}}</div>

        @endif

      @endforeach

<div class="col-span-3 flex items-center justify-center border-[1px] font-medium">Average</div>
  <div class="flex items-center justify-center border-[1px] ">{{round($axi, 2)}}</div>
  <div class="flex items-center justify-center border-[1px] ">{{round($ayi, 2)}}</div>
  <div class="col-span-4 flex items-center justify-center border-[1px]"></div>

  <div class="col-span-3 flex items-center justify-center border-[1px] font-medium">Summation</div>
  <div class="col-span-4 flex items-center justify-center border-[1px]"></div>
  <div class="flex items-center justify-center border-[1px] ">{{round($axyi, 2)}}</div>
  <div class="flex items-center justify-center border-[1px] ">{{round($axxi, 2)}}</div>