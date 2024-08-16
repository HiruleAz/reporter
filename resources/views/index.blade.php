<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap">

</head>
<body>

<x-sidebar>
 
</x-sidebar>


<form class="max-w-sm mx-auto flex justify-content-space-between">
  <!-- <label for="underline_select" class="sr-only">Underline select</label> -->
  <select id="underline_select" class="  px-0 w-full text-md text-center text-gray-500 bg-transparent border-2 border-r-grey rounded-l-lg border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 ">
      <option value="NOx" selected>NOx</option>
      <option value="CO">CO</option>
      <option value="SO2">SO2</option>
  </select>
  <!-- <label for="overline_select" class="sr-only">Underline select</label> -->
  <select id="overline_select" class=" py-1.5 px-0 w-full text-md text-center text-gray-500 bg-transparent border-2 border-l-grey rounded-r-lg border-gray-200 appearance-none focus:outline-none focus:bg-gray-800">
      <option value="Raw">Raw</option>
      <option value="Standardised">Standardised</option>
      <option value="Outlier">Outlier</option>
      <option value="Calibration">Calibration</option>
      <option value="Derived">Derived</option>
      <option value="Variability">Variability</option>
  </select>
</form>
<div>

<x-raw></x-raw>

<x-standardised></x-standardised>

<x-outlier></x-outlier>

<x-derived></x-derived>

<x-variability></x-variability>

<!-- graph -->

</div>
</body>
</html>
