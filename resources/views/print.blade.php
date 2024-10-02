<script src="https://cdn.tailwindcss.com"></script>

<select id="format" class="py-1.5 px-0 w-full text-md text-center text-gray-500 bg-transparent border-2 border-l-grey rounded-r-lg border-gray-200 appearance-none">
      <option value="raw" selected>Raw</option>
      <option value="standardised">Standardised</option>
      <option value="derived">Derived</option>
</select>

<button onclick="window.print();"  class="border-2 p-2">Press this to print</button>
<button onclick="printDiv('printBlock')"  class="border-2 p-2">test print</button>

<div id="printBlock">
<div id="raw" selected><x-raw></x-raw></div>
<div id="derived" class="hidden"><x-derived></x-derived></div>
<div id="standardised" class="hidden"><x-standardised></x-standardised></div>
</div>

<script>
const selectElement = document.getElementById('format');
const xRawElement = document.getElementById('raw');
const xStandardElement = document.getElementById('standardised');
const xDerivedElement = document.getElementById('derived');

selectElement.addEventListener('change', () => {
  if (selectElement.value === 'raw') {
    xRawElement.style.display = 'block';
    xStandardElement.style.display = 'none';
    xDerivedElement.style.display = 'none';

  } else if (selectElement.value === 'standardised') {
    xRawElement.style.display = 'none';
    xStandardElement.style.display = 'block';
    xDerivedElement.style.display = 'none';

  } else if (selectElement.value === 'derived') {
    xRawElement.style.display = 'none';
    xStandardElement.style.display = 'none';
    xDerivedElement.style.display = 'block';

}


});
</script>


<script>
		function printDiv(printBlock){
			var printContents = document.getElementById('printBlock').innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;

		}
	</script>