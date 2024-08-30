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
        @elseif (is_null($entry->sampleno))
          <div class="flex items-center justify-center border-[1px] ">Not used</div>
          <div class="flex items-center justify-center border-[1px] col-span-2 font-medium">Linearity Data [mg/mg3]</div>
        @else
          <div class="flex items-center justify-center border-[1px] ">{{$entry->sampleno}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->start}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->end}}</div>
        @endif
          <div class="flex items-center justify-center border-[1px] ">{{$entry->scems}}</div>
          <div class="flex items-center justify-center border-[1px] ">{{$entry->ssrm}}</div>

          <?php 
            $diff = $entry->scems - $entry->ssrm;
          ?>
          <div class="flex items-center justify-center border-[1px] ">{{round($diff, 2)}}</div>

        @if ($diff <= $half)
          <div class="flex items-center justify-center border-[1px]">No</div> 
        @else
          <div class="flex items-center justify-center border-[1px] font-bold">Yes</div> 
        @endif

      @endforeach

  <!-- table body starts -->
  <!-- <div class="flex items-center justify-center border-[1px] ">1</div>
  <div class="row-span-3 col-span-2 flex items-center justify-center border-[1px] font-medium">Zero Values (< 5% ELV)</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">Yes</div>

  <div class="flex items-center justify-center border-[1px] ">2</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">Yes</div>

  <div class="flex items-center justify-center border-[1px] ">3</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">Yes</div> -->

  <!-- Linearity Data starts here -->

  <!-- <div class="flex items-center justify-center border-[1px] ">not used</div>
  <div class="row-span-5 col-span-2 flex items-center justify-center border-[1px] font-medium">Linearity Data (mg/mg3)</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px]">0.00</div>
  <div class="flex items-center justify-center border-[1px]">Yes</div>

  <div class="flex items-center justify-center border-[1px] ">not used</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px]">0.00</div>
  <div class="flex items-center justify-center border-[1px]">Yes</div>

  <div class="flex items-center justify-center border-[1px] ">not used</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px]">0.00</div>
  <div class="flex items-center justify-center border-[1px]">Yes</div>

  <div class="flex items-center justify-center border-[1px] ">not used</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px]">0.00</div>
  <div class="flex items-center justify-center border-[1px]">Yes</div>

  <div class="flex items-center justify-center border-[1px] ">not used</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px]">0.00</div>
  <div class="flex items-center justify-center border-[1px]">Yes</div> -->


    <!-- Where the rest of data starts -->

  <!-- <div class="flex items-center justify-center border-[1px] ">4</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 9:30</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">Yes</div>

  <div class="flex items-center justify-center border-[1px] ">5</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 9:30</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">Yes</div>

  <div class="flex items-center justify-center border-[1px] ">6</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 9:30</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">Yes</div>

  <div class="flex items-center justify-center border-[1px]">7</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 9:30</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">Yes</div>

  <div class="flex items-center justify-center border-[1px] ">8</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 9:30</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">Yes</div>

  <div class="flex items-center justify-center border-[1px] ">9</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 9:30</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">Yes</div>

  <div class="flex items-center justify-center border-[1px] ">10</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 9:30</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">Yes</div>

  <div class="flex items-center justify-center border-[1px] ">11</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 9:30</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">Yes</div>

  <div class="flex items-center justify-center border-[1px] ">12</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 9:30</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">Yes</div>

  <div class="flex items-center justify-center border-[1px] ">13</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 9:30</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">Yes</div>

  <div class="flex items-center justify-center border-[1px] ">14</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 9:30</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">Yes</div>

  <div class="flex items-center justify-center border-[1px] ">15</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 9:30</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">Yes</div>

  <div class="flex items-center justify-center border-[1px] ">16</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 9:30</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">Yes</div>

  <div class="flex items-center justify-center border-[1px] ">17</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 9:30</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">Yes</div>

  <div class="flex items-center justify-center border-[1px] ">18</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 9:30</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">Yes</div>

  <div class="flex items-center justify-center border-[1px] ">19</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 9:30</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">Yes</div>

  <div class="flex items-center justify-center border-[1px] ">20</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 9:30</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">Yes</div>

  <div class="flex items-center justify-center border-[1px] ">21</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 9:30</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">Yes</div>

</div> -->