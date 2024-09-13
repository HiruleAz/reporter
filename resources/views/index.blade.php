<?php
// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=enviro', 'root');

// Define a query to retrieve data
$query = $db->prepare('SELECT * FROM entries');
$query->execute();

// Fetch the data
$data = $query->fetchAll(PDO::FETCH_ASSOC);

require_once 'resources\views\components\raw1.blade.php';

// Return the data in JSON format
header('Content-Type: application/json');
echo json_encode($data);
?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/js/app.js'])
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="flex h-12 text-center justify-center items-center rounded-sm font-mono text-lg text-white font-semibold bg-purple-500 w-full">
  <div role="button" id="tables" class="flex-1">
      <h1 class="w-full h-12 pt-3 pb-2 transition-all hover:bg-purple-700 hover:rounded-sm active:shadow-inner active:shadow-purple-800/10">
        Show Table
      </h1>
      </div>
      <div role="button" id="graphs" class="flex-1">
      <h1 class="w-full h-12 pt-3 pb-2 transition-all hover:bg-purple-700 hover:rounded-sm">
        Show Graph
      </h1>
      </div>
</div>

<form class="max-w mx-auto flex">
  
  <select id="gaschoice" class="px-0 w-full text-md text-center text-gray-500 bg-transparent border-2 border-r-grey rounded-l-lg border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 ">
      <option value="NOx" selected>NOx</option>
      <option value="CO">CO</option>
      <option value="SO2">SO2</option>
  </select>
  
  <select id="format" class="py-1.5 px-0 w-full text-md text-center text-gray-500 bg-transparent border-2 border-l-grey rounded-r-lg border-gray-200 appearance-none focus:outline-none focus:bg-gray-800">
      <option value="raw" selected>Raw</option>
      <option value="standardised">Standardised</option>
      <option value="outlier">Outlier</option>
      <option value="calibration">Calibration</option>
      <option value="derived">Derived</option>
      <option value="variability">Variability</option>
  </select>
</form>

<div class="flex h-screen">
  
<div class="flex flex-col bg-clip-border rounded-sm bg-gray-200 text-gray-700 h-screen w-1/6 p-4 shadow-xl shadow-blue-gray-900/5">
  <div class="flex mb-2 p-4 shadow-xl shadow-blue-gray-900/5 rounded-lg justify-left bg-purple-600">
    <svg class="w-16 h-16 text-gray-300 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 3v4a1 1 0 0 1-1 1H5m8-2h3m-3 3h3m-4 3v6m4-3H8M19 4v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1ZM8 12v6h8v-6H8Z"/>
    </svg>
    <h5 class="flex antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-gray-200 text-center">Report Generator</h5>  
  </div>
  <nav class="flex flex-col gap-1 min-w-[240px] p-2 font-sans text-base font-normal space-y-1.5 text-gray-700">
    
    <div role="button" class="flex items-center p-3 space-x-2 bg-gray-100 rounded-lg text-start leading-tight transition-all font-medium hover:bg-gray-300 hover:bg-opacity-80 focus:bg-blue-50 focus:bg-opacity-80 active:bg-blue-50 active:bg-opacity-80 hover:text-blue-900 focus:text-blue-900 active:text-blue-900 outline-none">
      <svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
        <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z" clip-rule="evenodd"/>
      </svg>Stack 1
    </div>
   
    <div role="button" tabindex="0" class="flex items-center p-3 bg-gray-100 rounded-lg text-start leading-tight transition-all font-medium hover:bg-blue-50 hover:bg-opacity-80 focus:bg-blue-50 focus:bg-opacity-80 active:bg-blue-50 active:bg-opacity-80 hover:text-blue-900 focus:text-blue-900 active:text-blue-900 outline-none">
      <svg class="w-6 h-6 text-gray-800 dark:text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
        <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z" clip-rule="evenodd"/>
      </svg>Stack 2
    </div>
    <div role="button" tabindex="0" class="flex items-center p-3 bg-gray-100 rounded-lg text-start leading-tight transition-all font-medium hover:bg-blue-50 hover:bg-opacity-80 focus:bg-blue-50 focus:bg-opacity-80 active:bg-blue-50 active:bg-opacity-80 hover:text-blue-900 focus:text-blue-900 active:text-blue-900 outline-none">
      <svg class="w-6 h-6 text-gray-800 dark:text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
        <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z" clip-rule="evenodd"/>
      </svg>Site 1
    </div>

    <button id="print-btn" data-modal-target="print-modal" data-modal-toggle="print-modal" class="flex justify-center space-x-1  p-3 rounded-lg leading-tight text-lg font-semibold transition-all hover:bg-opacity-80 focus:bg-purple-800 focus:bg-opacity-80 active:bg-blue-50 active:bg-opacity-80 hover:text-gray-100 hover:shadow-xl hover:shadow-blue-gray-900/5 focus:text-white active:text-white outline-none bg-purple-400 hover:bg-purple-700" type="button">
      <svg class="w-6 h-6 text-gray-200 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
        <path fill-rule="evenodd" d="M8 3a2 2 0 0 0-2 2v3h12V5a2 2 0 0 0-2-2H8Zm-3 7a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h1v-4a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v4h1a2 2 0 0 0 2-2v-5a2 2 0 0 0-2-2H5Zm4 11a1 1 0 0 1-1-1v-4h8v4a1 1 0 0 1-1 1H9Z" clip-rule="evenodd"/>
      </svg>Print Reports
    </button>

    <div id="print-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full transition-all">
      <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t bg-blue-300 ">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Choose Reports To Print
                </h3>
                <button type="button" class="text-red-500 bg-transparent hover:bg-gray-200 hover:text-gray-800 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="print-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name of ID</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter new ID here" required="">
                    </div>
                </div>
                
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Datasheet</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file" accept="">
          <p class="mt-1 text-sm text-gray-500 p-2 dark:text-gray-300" id="file_input_help">XML files only</p>

                <button type="submit" class="flex justify-end text-white items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center">
                    Print reports
                </button>
            </form>
        </div>
      </div>
    </div> 

    <button id="add-btn" data-modal-target="add-modal" data-modal-toggle="add-modal" class="flex justify-center space-x-1  p-3 rounded-lg leading-tight text-lg font-semibold transition-all hover:bg-green-600 hover:bg-opacity-80 focus:bg-green-700 focus:bg-opacity-80 active:bg-blue-50 active:bg-opacity-80 hover:text-gray-100 hover:shadow-xl hover:shadow-blue-gray-900/5 focus:text-white active:text-white outline-none bg-green-400" type="button">
      <svg class="w-6 h-6 text-gray-200 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd"/>
      </svg>Add New ID
    </button>

<!-- Main modal -->
    <div id="add-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full transition-all">
      <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t bg-blue-300 ">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Add New ID
                </h3>
                <button type="button" class="text-red-500 bg-transparent hover:bg-gray-200 hover:text-gray-800 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="add-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name of ID</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter new ID here" required="">
                    </div>
                </div>
                
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Datasheet</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file" accept="">
          <p class="mt-1 text-sm text-gray-500 p-2 dark:text-gray-300" id="file_input_help">XML files only</p>

                <button type="submit" class="flex justify-end text-white items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center">
                    Add ID
                </button>
            </form>
        </div>
      </div>
    </div> 

<!-- Modal toggle -->
    <button id="edit-btn" data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="flex justify-center p-3 rounded-lg leading-tight text-lg font-semibold transition-all hover:bg-blue-600 hover:bg-opacity-80 focus:bg-blue-50 focus:bg-opacity-80 active:bg-blue-50 active:bg-opacity-80 hover:text-gray-200 focus:text-blue-900 active:text-white outline-none bg-blue-400" type="button">
      <svg class="w-6 h-6  text-gray-200 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
        <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd"/>
        <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd"/>
      </svg>Edit Current ID
    </button>

<!-- Main modal -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full transition-all">
      <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Edit ID Name
                </h3>
                <button type="button" class="text-red-800 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5">
              <div class="grid gap-4 mb-4 grid-cols-2">
                  <div class="col-span-2">
                      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                      <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                  </div>
              </div>
              <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Edit Name
              </button>
            </form>
          </div>
        </div>
      </div> 

      <button id="delete-btn" type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal"  class="flex justify-center space-x-1 p-3 rounded-lg leading-tight transition-all text-lg font-semibold hover:bg-red-600 hover:bg-opacity-80 focus:bg-red-700 focus:bg-opacity-80 active:bg-blue-50 active:bg-opacity-80 hover:text-blue-900 focus:text-blue-900 active:text-blue-900 outline-none bg-red-400">
        <svg class="w-6 h-6 text-gray-200 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm5.757-1a1 1 0 1 0 0 2h8.486a1 1 0 1 0 0-2H7.757Z" clip-rule="evenodd"/>
        </svg> Delete Current ID
      </button>

<!-- The modal -->
      <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-screen">
        <div class="relative p-4 w-full max-w-md max-h-full">
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
              <svg class="mx-auto mb-4 text-gray-800 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
              </svg>
              <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this ID from the database?</h3>
            <button type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
            Delete ID
            </button>
            <button type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 " data-modal-hide="popup-modal">
            Cancel
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="table-container" selected class="flex-1">
    <div id="x-raw" class="flex-1"><x-raw1  :entries="$entries"></x-raw1></div>
    <div id="x-standardised" class="hidden flex-1"><x-standardised></x-standardised></div>
    <div id="x-outlier" class="hidden flex-1"><x-outlier></x-outlier></div>
    <div id="x-calibration" class="hidden flex-1"><x-calibration></x-calibration></div>
    <div id="x-derived" class="hidden flex-1"><x-derived></x-derived></div>
    <div id="x-variability" class="hidden flex-1"><x-variability></x-variability></div>
  </div>

  <div id="graph-container" class="hidden flex-1">
    <div id="x-standardisedg" class="hidden flex-1"><x-standardisedg></x-standardisedg></div>
    <div id="x-outlierg" class="hidden flex-1"><x-outlierg></x-outlierg></div>
    <div id="x-derivedg" class="hidden flex-1"><x-derivedg></x-derivedg></div>
    <div id="x-warning" class="hidden flex-1"><x-warning></x-warning></div>
  </div> 
</div>

<script>
  const tableButton = document.getElementById('tables');
  const graphButton = document.getElementById('graphs');
  const tableContainer = document.getElementById('table-container');
  const graphContainer = document.getElementById('graph-container');

// Add event listeners
tableButton.addEventListener('click', () => {
  tableContainer.style.display = 'block';
  graphContainer.style.display = 'none';
});

graphButton.addEventListener('click', () => {
  tableContainer.style.display = 'none';
  graphContainer.style.display = 'block';
});
</script>

<script>
const selectElement = document.getElementById('format');
const xRawElement = document.getElementById('x-raw');
const xStandardElement = document.getElementById('x-standardised');
const xOutlierElement = document.getElementById('x-outlier');
const xCalibrateElement = document.getElementById('x-calibration');
const xDerivedElement = document.getElementById('x-derived');
const xVariableElement = document.getElementById('x-variability');
const xWarning = document.getElementById('x-warning');

selectElement.addEventListener('change', () => {
  if (selectElement.value === 'raw') {

    xRawElement.style.display = 'block';
    xStandardElement.style.display = 'none';
    xOutlierElement.style.display = 'none';
    xCalibrateElement.style.display = 'none';
    xDerivedElement.style.display = 'none';
    xVariableElement.style.display = 'none';
    xWarning.style.display = 'block';

  } else if (selectElement.value === 'standardised') {

    xRawElement.style.display = 'none';
    xStandardElement.style.display = 'block';
    xOutlierElement.style.display = 'none';
    xCalibrateElement.style.display = 'none';
    xDerivedElement.style.display = 'none';
    xVariableElement.style.display = 'none';
    xWarning.style.display = 'none';

  } else if (selectElement.value === 'outlier') {

    xRawElement.style.display = 'none';
    xStandardElement.style.display = 'none';
    xOutlierElement.style.display = 'block';
    xCalibrateElement.style.display = 'none';
    xDerivedElement.style.display = 'none';
    xVariableElement.style.display = 'none';
    xWarning.style.display = 'none';

  } else if (selectElement.value === 'calibration') {

    xRawElement.style.display = 'none';
    xStandardElement.style.display = 'none';
    xOutlierElement.style.display = 'none';
    xCalibrateElement.style.display = 'block';
    xDerivedElement.style.display = 'none';
    xVariableElement.style.display = 'none';
    xWarning.style.display = 'none';

  } else if (selectElement.value === 'derived') {

    xRawElement.style.display = 'none';
    xStandardElement.style.display = 'none';
    xOutlierElement.style.display = 'none';
    xCalibrateElement.style.display = 'none';
    xDerivedElement.style.display = 'block';
    xVariableElement.style.display = 'none';
    xWarning.style.display = 'none';

  } else if (selectElement.value === 'variability') {

    xRawElement.style.display = 'none';
    xStandardElement.style.display = 'none';
    xOutlierElement.style.display = 'none';
    xCalibrateElement.style.display = 'none';
    xDerivedElement.style.display = 'none';
    xVariableElement.style.display = 'block';
    xWarning.style.display = 'none';

  } else {

    xRawElement.style.display = 'none';
    xStandardElement.style.display = 'none';
    xOutlierElement.style.display = 'none';
    xCalibrateElement.style.display = 'none';
    xDerivedElement.style.display = 'none';
    xVariableElement.style.display = 'none';
    xWarning.style.display = 'block';

}


});
</script>

<script>
const xStandardGElement = document.getElementById('x-standardisedg');
const xOutlierGElement = document.getElementById('x-outlierg');
const xDerivedGElement = document.getElementById('x-derivedg');

selectElement.addEventListener('change', () => {
  if (selectElement.value === 'standardised') {

    xStandardGElement.style.display = 'block';
    xOutlierGElement.style.display = 'none';
    xDerivedGElement.style.display = 'none';
    xWarning.style.display = 'none';

  } else if (selectElement.value === 'raw') {

    xStandardGElement.style.display = 'none';
    xOutlierGElement.style.display = 'none';
    xDerivedGElement.style.display = 'none';
    xWarning.style.display = 'block';


  } else if (selectElement.value === 'outlier') {

    xStandardGElement.style.display = 'none';
    xOutlierGElement.style.display = 'block';
    xDerivedGElement.style.display = 'none';
    xWarning.style.display = 'none';

  } else if (selectElement.value === 'derived') {

    xStandardGElement.style.display = 'none';
    xOutlierGElement.style.display = 'none';
    xDerivedGElement.style.display = 'block';
    xWarning.style.display = 'none';

  } else {

    xStandardGElement.style.display = 'none';
    xOutlierGElement.style.display = 'none';
    xDerivedGElement.style.display = 'none';
    xWarning.style.display = 'block';

}

});
</script>

<script>
const printBtn = document.getElementById('print-btn');
const printmodal = document.getElementById('print-modal');

printBtn.addEventListener('click', () => {
  printmodal.classList.remove('hidden');
  printmodal.classList.add('flex');
});

// Add event listener to close modal when cancel button is clicked
document.querySelectorAll('[data-modal-hide="print-modal"]').forEach((btn) => {
  btn.addEventListener('click', () => {
    printmodal.classList.remove('flex');
    printmodal.classList.add('hidden');
  });
});
</script>

<script>
const addBtn = document.getElementById('add-btn');
const addmodal = document.getElementById('add-modal');

addBtn.addEventListener('click', () => {
  addmodal.classList.remove('hidden');
  addmodal.classList.add('flex');
});

// Add event listener to close modal when cancel button is clicked
document.querySelectorAll('[data-modal-hide="add-modal"]').forEach((btn) => {
  btn.addEventListener('click', () => {
    addmodal.classList.remove('flex');
    addmodal.classList.add('hidden');
  });
});
</script>

<script>
const editBtn = document.getElementById('edit-btn');
const crudmodal = document.getElementById('crud-modal');

editBtn.addEventListener('click', () => {
  crudmodal.classList.remove('hidden');
  crudmodal.classList.add('flex');
});

// Add event listener to close modal when cancel button is clicked
document.querySelectorAll('[data-modal-hide="crud-modal"]').forEach((btn) => {
  btn.addEventListener('click', () => {
    crudmodal.classList.remove('flex');
    crudmodal.classList.add('hidden');
  });
});
</script>

<script>
const deleteBtn = document.getElementById('delete-btn');
const modal = document.getElementById('popup-modal');
const overlay = document.querySelector('.overlay');

deleteBtn.addEventListener('click', () => {
  modal.classList.remove('hidden');
  modal.classList.add('flex');
  overlay.classList.add('show');
});

// Add event listener to close modal when cancel button is clicked
document.querySelectorAll('[data-modal-hide="popup-modal"]').forEach((btn) => {
  btn.addEventListener('click', () => {
    modal.classList.remove('flex');
    modal.classList.add('hidden');
    overlay.classList.remove('show');
  });
});
</script>

<!-- graph -->
<script>
        // updateTable function
        function updateTable() {
            const select = document.getElementById('mySelect');
            const selectedOption = select.value;
            const tableContainer = document.getElementById('table-container');

            fetch(`/table-data/${selectedOption}`)
                .then(response => response.json())
                .then(data => {
                    const tableHtml = `
                        <table>
                            <thead>
                                <tr>
                                    <th>Column 1</th>
                                    <th>Column 2</th>
                                    <!-- add more columns as needed -->
                                </tr>
                            </thead>
                            <tbody>
                                ${data.map(row => `
                                    <tr>
                                        <td>${row.column1}</td>
                                        <td>${row.column2}</td>
                                        <!-- add more columns as needed -->
                                    </tr>
                                `).join('')}
                            </tbody>
                        </table>
                    `;
                    tableContainer.innerHTML = tableHtml;
                })
                .catch(error => console.error(error));
        }

        // add event listener to select element
        document.getElementById('mySelect').addEventListener('change', updateTable);
    </script>


</body>
</html>

