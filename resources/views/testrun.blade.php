
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

  <!-- table body starts -->
  <!-- <div class="flex items-center justify-center border-[1px] ">1</div>
  <div class="row-span-3 col-span-2 flex items-center justify-center border-[1px] font-medium">Zero Values (< 5% ELV)</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>

  <div class="flex items-center justify-center border-[1px] ">2</div>
  <div class="flex items-center justify-center border-[1px]">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px]">N/A</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>

  <div class="flex items-center justify-center border-[1px] ">3</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div> -->

  <!-- Linearity Data starts here -->

  <!-- <div class="flex items-center justify-center border-[1px] ">not used</div>
  <div class="row-span-5 col-span-2 flex items-center justify-center border-[1px] font-medium">Linearity Data (mg/mg3)</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px]">N/A</div>
  <div class="flex items-center justify-center border-[1px]">N/A</div>

  <div class="flex items-center justify-center border-[1px] ">not used</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>

  <div class="flex items-center justify-center border-[1px] ">not used</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>

  <div class="flex items-center justify-center border-[1px] ">not used</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>
  <div class="flex items-center justify-center border-[1px]">N/A</div>

  <div class="flex items-center justify-center border-[1px] ">not used</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>
  <div class="flex items-center justify-center border-[1px] ">0.00</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div>
  <div class="flex items-center justify-center border-[1px] ">N/A</div> -->

    <!-- Where the rest of data starts -->

  <!-- <div class="flex items-center justify-center border-[1px] ">4</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 8:29</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>

  <div class="flex items-center justify-center border-[1px] ">5</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 09:30</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 09:59</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>

  <div class="flex items-center justify-center border-[1px] ">6</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 11:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 11:29</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>

  <div class="flex items-center justify-center border-[1px]">7</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 12:30</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 12:59</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>

  <div class="flex items-center justify-center border-[1px] ">8</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 14:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 14:29</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>

  <div class="flex items-center justify-center border-[1px] ">9</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 15:30</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 15:59</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>

  <div class="flex items-center justify-center border-[1px] ">10</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:29</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>

  <div class="flex items-center justify-center border-[1px] ">11</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 09:30</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 09:59</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>

  <div class="flex items-center justify-center border-[1px] ">12</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 11:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 11:29</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>

  <div class="flex items-center justify-center border-[1px] ">13</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 12:30</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 12:59</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>

  <div class="flex items-center justify-center border-[1px] ">14</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 14:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 14:29</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>

  <div class="flex items-center justify-center border-[1px] ">15</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 15:30</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 15:59</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>

  <div class="flex items-center justify-center border-[1px] ">16</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 08:29</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>

  <div class="flex items-center justify-center border-[1px] ">17</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 09:30</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 09:59</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>

  <div class="flex items-center justify-center border-[1px] ">18</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 11:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 11:29</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>

  <div class="flex items-center justify-center border-[1px] ">19</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 12:30</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 12:59</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>

  <div class="flex items-center justify-center border-[1px] ">20</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 14:00</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 14:29</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>

  <div class="flex items-center justify-center border-[1px] ">21</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 15:30</div>
  <div class="flex items-center justify-center border-[1px] ">02.12.2021 15:59</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">mg/m3</div>
  <div class="flex items-center justify-center border-[1px] ">%</div>
  <div class="flex items-center justify-center border-[1px] ">%</div> -->

    <!-- table body ends -->
<!-- </div> -->

<!-- <div class="row">
  <div class="col-md-12">
    <br />
    <h3>Gas Data</h3>
    <br /> -->
    
    <!-- <table class="table-bordered  border border-1 mx-auto w-4/5 text-center grid grid-cols-9">
      <tr class="border-[1px] bg-gray-100">
        <th class="border-[1px] p-4">Sample</th>
        <th class="border-[1px] p-4">start</th>
        <th class="border-[1px] p-4">end</th>
        <th class="border-[1px] p-4">gastype</th>
        <th class="border-[1px] p-4">xi</th>
        <th class="border-[1px] p-4">O2</th>
        <th class="border-[1px] p-4">H2O</th>
        <th class="border-[1px] p-4">yi</th>
        <th class="border-[1px] p-4">O2</th>
        <th class="border-[1px] p-4">H2O</th>
      </tr> -->

      @foreach($entries as $entry)
       <!-- <tr class="border-[1px]">
        <td class="border-[1px] p-2">{{$entry->sampleno}}</td>
        <td class="border-[1px] p-2">{{$entry->start}}</td>
        <td class="border-[1px] p-2">{{$entry->end}}</td>
        <td class="border-[1px] p-2">{{$entry->gastype}}</td>
        <td class="border-[1px] p-2">{{$entry->cemsmg}}</td>
        <td class="border-[1px] p-2">{{$entry->cemsO2}}</td>
        <td class="border-[1px] p-2">{{$entry->cemsH2O}}</td>
        <td class="border-[1px] p-2">{{$entry->srmmg}}</td>
        <td class="border-[1px] p-2">{{$entry->srmO2}}</td>
        <td class="border-[1px] p-2">{{$entry->srmH2O}}</td> -->
        
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

