<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
<x-sidebar>
 
 </x-sidebar>
<x-tabselect>
</x-tabselect>

<form class="max-w-sm mx-auto flex pt-8 space-x-16">
  <!-- <label for="underline_select" class="sr-only">Underline select</label> -->
  <select id="underline_select" class=" py-2.5 px-0 w-full text-md text-center text-gray-500 bg-transparent border-2 rounded-xl border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
      <option value="NOx" selected>NOx</option>
      <option value="CO">CO</option>
      <option value="SO2">SO2</option>
  </select>
  <!-- <label for="overline_select" class="sr-only">Underline select</label> -->
  <select id="overline_select" class="block py-2.5 px-0 w-full text-md text-center text-gray-500 bg-transparent border-2 rounded-xl border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
      <option value="Raw">Raw</option>
      <option value="Standardised">Standardised</option>
      <option value="FR">Outlier</option>
      <option value="DE">Calibration</option>
      <option value="DE">Derived</option>
      <option value="DE">Variability</option>
  </select>
</form>
<div>

<x-raw>
  
</x-raw>

</div>
</body>
</html>
