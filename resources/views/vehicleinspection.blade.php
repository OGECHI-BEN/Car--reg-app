@extends('layout.main-layout')
@section('title') Vehicle Inspection @endsection
@section('content')
    
    <h1 class="text-center  text-yellow-700  font-extrabold text-xl m-auto py-[20px] md:py-[50px]">Vehicle Inspection</h1>
    <form action="" class="max-w-md mx-auto">
        {{-- <div class="flex">
            <button type="submit" class="absolute top-0 end-0 h-full p-2.5 text-sm font-medium text-black"></button>

        </div> --}}
    </form>
    <form action="" class="max-w-screen-lg w-full mx-auto  bg-slate-100" >
        <fieldset class="grid grid-cols-1 md:grid-cols-6 gap-4 p-4 items-center justify-start mx-auto border">
            <div class="flex flex-col items-center">
                <label for="ownersName">Owners Name:</label>
                <input type="text" id="ownersName" class="bg-gray-50  border border-gray-300 text-gray-900 text-sm  focus:ring-gray-800 focus:border-gray-800 w-full p-2 " required>
            </div>
            <div class="flex flex-col items-center">
                <label for="vehicleRegistration">Vehicle Registration:</label>
                <input type="text" id="vehicleRegistration" class="bg-gray-50  border border-gray-300 text-gray-900 text-sm focus:ring-gray-800 focus:border-gray-800 w-full p-2 " required>
            </div>
            <div class="flex flex-col items-center">
                <label for="vehicleMake">Vehicle Make:</label>
                <input type="text" id="vehicleMake" class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-800 focus:border-gray-800 w-full p-2 " required>
            </div>
            <div class="flex flex-col items-center">
                <label for="chasisNumber">Chasis Number:</label>
                <input type="number" id="chasisNumber" class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-800 focus:border-gray-800 w-full p-2 " required>
            </div>
            <div class="flex flex-col items-center">
                <label for="engineNumber">Engine Number:</label>
                <input type="number" id="engineNumber" class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-800 focus:border-gray-800 w-full p-2 " required>
            </div>
            <div class="flex flex-col items-center">
                <label for="inspect">Click below:</label>
                <button type="submit"  id="inspect" class=" bg-green-800 hover:bg-green-900 rounded-lg focus:outline-none text-white border hover:border-green-950 focus:ring-2 focus:ring-green-900 font-medium w-full sm:w-auto px-5 py-2.5 text-center" type="submit">Inspect</button>
            </div>
        </fieldset>
        <fieldset id="detailed_inspection" class="px-[50px] hidden">
            <div class="block py-2 mx-auto mt-4">
                <div>
                    <p class="font-bold text-gray-950">Warning Triangle(c-caution):</p>
                    <div class="flex justify-start items-center space-x-5">
                        <span class="block ">
                            <label for="warningTriangle">Yes</label>
                            <input type="radio" id="warningTriangle" class="bg-gray-50 hover:bg-gray-500 focus:bg-gray-600 focus:ring-2 focus-ring-gray-500 " name="warning-triangle" value="Yes">
                        </span>
                        <span>
                            <label for="NowarningTriangle">No</label>
                            <input type="radio" id="NowarningTriangle" class="bg-gray-50 hover:bg-gray-500 focus:bg-gray-600 focus:ring-2 focus-ring-gray-500 " name="warning-triangle" value="No">
                        </span>
                    </div>
                </div>
            </div>
            <div class="block py-2 mx-auto ">
                <div>
                    <p class="font-bold text-gray-950">Fire Extinguisher:</p>
                    <div class="flex justify-start items-center space-x-5">
                        <span class="block ">
                            <label for="yes-fire-extinguisher">Yes</label>
                            <input type="radio" id="yes-fire-extinguisher" class="bg-gray-50 hover:bg-gray-500 focus:bg-gray-600 focus:ring-2 focus-ring-gray-500 " name="fire-extinguisher" value="Yes">
                        </span>
                        <span>
                            <label for="no-fire-extinguisher">No</label>
                            <input type="radio" id="no-fire-extinguisher" class="bg-gray-50 hover:bg-gray-500 focus:bg-gray-600 focus:ring-2 focus-ring-gray-500 " name="fire-extinguisher" value="No">
                        </span>
                    </div>
                </div>
             </div>
           <div class="block py-2 mx-auto ">
                <p class="font-bold text-gray-950">Jack:</p>
                <div class="flex justify-start items-center space-x-5">
                    <span class="block ">
                        <label for="yes-jack">Yes</label>
                        <input type="radio" id="yes-jack" class="bg-gray-50 hover:bg-gray-500 focus:bg-gray-600 focus:ring-2 focus-ring-gray-500 " name="jack" value="Yes">
                    </span>
                    <span>
                        <label for="no-jack">No</label>
                        <input type="radio" id="no-jack" class="bg-gray-50 hover:bg-gray-500 focus:bg-gray-600 focus:ring-2 focus-ring-gray-500 " name="jack" value="No">
                    </span>
                </div>
            </div>
           <div class="block py-2 mx-auto ">
                <p class="font-bold text-gray-950">Spare Tyre:</p>
                <div class="flex justify-start items-center space-x-5">
                    <span class="block ">
                        <label for="yes-spare-tyre">Yes</label>
                        <input type="radio" id="yes-spare-tyre" class="bg-gray-50 hover:bg-gray-500 focus:bg-gray-600 focus:ring-2 focus-ring-gray-500 " name="spare-tyre" value="Yes">
                    </span>
                    <span>
                        <label for="no-spare-tyre">No</label>
                        <input type="radio" id="no-spare-tyre" class="bg-gray-50 hover:bg-gray-500 focus:bg-gray-600 focus:ring-2 focus-ring-gray-500 " name="spare-tyre" value="No">
                    </span>
                </div>
            </div>
           <div class="block py-2 mx-auto ">
                <p class="font-bold text-gray-950">First Aid Kit:</p>
                <div class="flex justify-start items-center space-x-5">
                    <span class="block ">
                        <label for="yes-first-aid">Yes</label>
                        <input type="radio" id="yes-first-aid" class="bg-gray-50 hover:bg-gray-500 focus:bg-gray-600 focus:ring-2 focus-ring-gray-500 " name="first-aid" value="Yes">
                    </span>
                    <span>
                        <label for="no-first-aid">No</label>
                        <input type="radio" id="no-first-aid" class="bg-gray-50 hover:bg-gray-500 focus:bg-gray-600 focus:ring-2 focus-ring-gray-500 " name="first-aid" value="No">
                    </span>
                </div>
            </div>
           <div class="block py-2 mx-auto ">
                <p class="font-bold text-gray-950">Wheel Spanner:</p>
                <div class="flex justify-start items-center space-x-5">
                    <span class="block ">
                        <label for="yes-wheel-spanner">Yes</label>
                        <input type="radio" id="yes-wheel-spanner" class="bg-gray-50 hover:bg-gray-500 focus:bg-gray-600 focus:ring-2 focus-ring-gray-500 " name="wheel-spanner" value="Yes">
                    </span>
                    <span>
                        <label for="no-wheel-spanner">No</label>
                        <input type="radio" id="no-wheel-spanner" class="bg-gray-50 hover:bg-gray-500 focus:bg-gray-600 focus:ring-2 focus-ring-gray-500 " name="wheel-spanner" value="No">
                    </span>
                </div>
            </div>
           <div class="block py-2 mx-auto ">
                <p class="font-bold text-gray-950">Water:</p>
                <div class="flex justify-start items-center space-x-5">
                    <span class="block ">
                        <label for="yes-water">Yes</label>
                        <input type="radio" id="yes-water" class="bg-gray-50 hover:bg-gray-500 focus:bg-gray-600 focus:ring-2 focus-ring-gray-500 " name="water" value="Yes">
                    </span>
                    <span>
                        <label for="no-water">No</label>
                        <input type="radio" id="no-water" class="bg-gray-50 hover:bg-gray-500 focus:bg-gray-600 focus:ring-2 focus-ring-gray-500 " name="water" value="No">
                    </span>
                </div>
            </div>
        <div class="block py-2 mx-auto ">
                <p class="font-bold text-gray-950">Hydraulic:</p>
                <div class="flex justify-start items-center space-x-5">
                    <span class="block ">
                        <label for="yes-hydraulic">Yes</label>
                        <input type="radio" id="yes-hydraulic" class="bg-gray-50 hover:bg-gray-500 focus:bg-gray-600 focus:ring-2 focus-ring-gray-500 " name="hydraulic" value="Yes">
                    </span>
                    <span>
                        <label for="no-hydraulic">No</label>
                        <input type="radio" id="no-hydraulic" class="bg-gray-50 hover:bg-gray-500 focus:bg-gray-600 focus:ring-2 focus-ring-gray-500 " name="hydraulic" value="No">
                    </span>
                </div>
            </div>
           <div class="block py-2 mx-auto ">
                <p class="font-bold text-gray-950">Transmission-Fluid:</p>
                <div class="flex justify-start items-center space-x-5">
                    <span class="block ">
                        <label for="yes-fluid">Yes</label>
                        <input type="radio" id="yes-fluid" class="bg-gray-50 hover:bg-gray-500 focus:bg-gray-600 focus:ring-2 focus-ring-gray-500 " name="fluid" value="Yes">
                    </span>
                    <span>
                        <label for="no-fluid">No</label>
                        <input type="radio" id="no-fluid" class="bg-gray-50 hover:bg-gray-500 focus:bg-gray-600 focus:ring-2 focus-ring-gray-500 " name="fluid" value="No">
                    </span>
                </div>
            </div>
           <div class="block py-2 mx-auto ">
                <p class="font-bold text-gray-950">Torch-light:</p>
                <div class="flex justify-start items-center space-x-5">
                    <span class="block ">
                        <label for="yes-torch-light">Yes</label>
                        <input type="radio" id="yes-torch-light" class="bg-gray-50 hover:bg-gray-500 focus:bg-gray-600 focus:ring-2 focus-ring-gray-500 " name="torch-light" value="Yes">
                    </span>
                    <span>
                        <label for="no-torch-light">No</label>
                        <input type="radio" id="no-torch-light" class="bg-gray-50 hover:bg-gray-500 focus:bg-gray-600 focus:ring-2 focus-ring-gray-500 " name="torch-light" value="No">
                    </span>
                </div>
            </div>
            <div class="flex justify-between mb-8">
                <div>
                    <label for="inspection-date" class=" font-bold text-gray-950  ">Inspection Date:</label>
                    <input type="date" id="inspection-date" requiredb name="inspection-date" class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
                </div>
                <div class="pt-5">
                    <input type="submit" required class="   mb-2 text-sm bg-green-800 hover:bg-green-900 rounded-lg focus:outline-none text-white border hover:border-green-950 focus:ring-4 focus:ring-green-900 font-medium w-full sm:w-auto px-5 py-2.5 text-center">
                </div>
            </div>
        </fieldset>
    </form>
    <script src="{{asset('js/vio-app.js') }}"></script>
@endsection



