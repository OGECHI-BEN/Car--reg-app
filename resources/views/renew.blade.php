@extends('layout.main-layout')
@section('title') Renew @endsection
@section('content')
    <h1 class="text-center  text-yellow-700  font-extrabold text-xl m-auto py-[10px] ">Vehicle Document Renewal</h1>
   <div class="max-w-lg mx-auto bg-white rounded-lg overflow-hidden my-4">
       <div class="flex items-center border-b border-gray-200 ">
            <input type="text"  placeholder="Vehicle registration number" class="w-full px-5 py-4 text-black focus:outline-none bg-slate-200 ">
            <button class="bg-green-800 px-5 text-white hover:bg-green-950 focus:outline-none py-4">Search</button>
        </div>
   </div>
   <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mx-auto md:max-w-full p-5">
        <div class="flex flex-col  items-start mx-auto ">
            <label for="license" class="block text-sm  text-black font-semibold text-center ">Vehicle License</label>
            <input type="file" id="license" class="form-input block  w-full py-2 border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-gray-700 focus:ring focus:ring-gray focus:ring-opacity-50" >
            <button type="submit" class="bg-gray-800 text-white px-4 py-3 rounded-lg">Renew</button>
       </div>
        <div class="flex flex-col  items-start mx-auto">
            <label for="ownership" class="block text-sm  text-black font-semibold text-center ">Proof of Ownership</label>
            <input type="file" id="ownership" class="form-input block w-full py-2  border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-gray-700 focus:ring focus:ring-gray focus:ring-opacity-50" >
            <button type="submit" class="bg-gray-800 text-white px-4 py-3 rounded-lg">Renew</button>
       </div>
        <div class="flex flex-col  items-start mx-auto">
            <label for="road_worthiness" class="block text-sm  text-black font-semibold text-center ">Certificate of Road Worthiness</label>
            <input type="file" id="road_worthiness" class="form-input block w-full py-2  border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-gray-700 focus:ring focus:ring-gray focus:ring-opacity-50" >
            <button type="submit" class="bg-gray-800 text-white px-4 py-3 rounded-lg">Renew</button>
       </div>
        <div class="flex flex-col  items-start mx-auto">
            <label for="insurance" class="block text-sm  text-black font-semibold text-center "> Car Insurance Certificate</label>
            <input type="file" id="insurance" class="form-input block w-full py-2  border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-gray-700 focus:ring focus:ring-gray focus:ring-opacity-50" >
            <button type="submit" class="bg-gray-800 text-white px-4 py-3 rounded-lg">Renew</button>
        </div>
   </div>
@endsection