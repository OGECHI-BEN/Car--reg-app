@extends('layout.main-layout')
@section('title') Vehicle Registration @endsection
@section('content')
<h1 class="text-center  text-yellow-700  font-extrabold text-xl m-auto py-[20px] md:py-[50px]">Vehicle Registration</h1>
<form action="" class="w-full max-w-screen-xl mx-auto  px-6 mb-[100px]">
    <div class="mb-3 grid grid-cols-3 items-center gap-5">
        <div class="">
            <label for="userName" class="  text-sm text-gray-900 "> Owner's Surname:</label>
            <input type="text" id="userName" required placeholder="surname" class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
        </div>
        <div>
            <label for="surname" class="  mb-2 text-sm text-gray-900 "> Owner's Firstname:</label>
            <input type="text" placeholder="Firstname" id="surname" required class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
        </div>
        <div>
            <label for="userName" class="  mb-2 text-sm text-gray-900 "> Owner's Middlename:</label>
            <input type="text" id="userName" placeholder="middlename" required class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
        </div>
    </div> 
    <div class="mb-3 grid grid-cols-3 items-center gap-5">
        <div class="">
            <label for="email" class="  text-sm text-gray-900 "> Email</label>
            <input type="email" id="email" required placeholder="email" class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
        </div>
        <div>
            <label for="phone" class="  mb-2 text-sm text-gray-900 ">Phone Number</label>
            <input type="tel" placeholder="phone number" id="phone" required class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
        </div>
        <div>
            <label for="address" class="  mb-2 text-sm text-gray-900 ">Address</label>
            <input type="text" id="address" placeholder="address" required class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
        </div>
    </div> 
    <div class="mb-3 grid grid-cols-3 items-center gap-5">
        <div class="">
            <label  class="  text-sm text-gray-900 "> State</label>
            <input list="state" name="state"  required  class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
            <datalist id="state">
                <option value="FCT">FCT</option>
                <option value="Imo State"> Imo State</option>
                <option value="Kaduna">Kaduna</option>
                <option value="Niger">Niger</option>
            </datalist>
        </div>
        <div class="">
            <label  class="  text-sm text-gray-900 "> LGA</label>
            <input list="LGA" name="LGA"  required  class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
            <datalist id="LGA">
                <option value="FCT">FCT</option>
                <option value="Imo State"> Imo State</option>
                <option value="Kaduna">Kaduna</option>
                <option value="Niger">Niger</option>
            </datalist>
        </div>
        <div>
            <label for="phone" class="  mb-2 text-sm text-gray-900 ">Vehicle License Number:</label>
            <input type="number" placeholder="licenceNumber" id="phone" required class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
        </div>      
    </div> 
    <div class="mb-3 grid grid-cols-3 items-center gap-5">
        <div class="">
            <label  class="  text-sm text-gray-900 ">Vehicle Make</label>
            <input list="vehicleMake" name="vehicleMake"  required  class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
            <datalist id="vehicleMake">
                <option value="Toyota">Toyota</option>
                <option value="BMW"> BMW</option>
                <option value="Mercedez">Mercedez</option>
                <option value="Primera">Primera</option>
            </datalist>
        </div>
        <div class="">
            <label  class="  text-sm text-gray-900 ">Vehicle Type</label>
            <input list="vehicleType" name="vehicleType"  required  class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
            <datalist id="vehicleType">
                <option value="Corolla">Corolla</option>
                <option value="SVU"> SVU</option>
                <option value="Range">Range</option>
                <option value="Jeep">Jeep</option>
            </datalist>
        </div>
        <div>
            <label for="colour" class="  mb-2 text-sm text-gray-900 ">Vehicle Colour:</label>
            <input type="color" placeholder="colour" id="colour" required class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
        </div>      
    </div> 
    <div class="mb-3 grid grid-cols-3 items-center gap-5">
        <div>
            <label for="engineCapacity" class="  mb-2 text-sm text-gray-900">Engine Capacity:</label>
            <input type="number" id="engineCapacity" required class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
        </div> 
        <div>
            <label for="issuanceDate" class="  mb-2 text-sm text-gray-900 ">License Date Issued:</label>
            <input type="date" id="issuanceDate" required class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
        </div> 
        <div>
            <label for="expiryDate" class="  mb-2 text-sm text-gray-900 ">License Expiry Date:</label>
            <input type="date" id="expiryDate" required class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
        </div> 
    </div>
    <div class="mb-3 grid grid-cols-3 items-center gap-5">
        <div>
            <label for="engineNumber" class="  mb-2 text-sm text-gray-900">Engine Number:</label>
            <input type="number" id="engineNumber" required class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
        </div> 
        <div>
            <label for="chasisNumber" class="  mb-2 text-sm text-gray-900 "> Chasis Number:</label>
            <input type="number" id="chasisNumber" required class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
        </div> 
        <div>
            <label for="netWeight" class="  mb-2 text-sm text-gray-900 ">Net Weight:</label>
            <input type="number" id="netWeight" required class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
        </div> 
    </div>
    <div class="mb-3 grid grid-cols-2 items-center gap-5">
        <div>
            <label for="loadToCarry" class="  mb-2 text-sm text-gray-900">Weight of Load to carry:</label>
            <input type="number" id="loadToCarry" required class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
        </div> 
        <div>
            <label for="personsToCarry" class="  mb-2 text-sm text-gray-900 "> No of Persons To Carry:</label>
            <input type="number" id="personsToCarry" required class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
        </div> 
    </div>
        <div class="text-center text-yellow-700 font-bold py-5">Document  Upload:</div>
    <div class="mb-3 grid grid-cols-2 items-center gap-5">
        <div>
            <div>
                <label for="vehicleLicense" class="  mb-2 text-sm text-gray-900">Vehicle License:</label>
                <input type="file" id="vehicleLicense" placeholder="Add" required class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
            </div> 
            <div>
                <label for="proofOfOwnership" class="  mb-2 text-sm text-gray-900 ">Proof of Ownership:</label>
                <input type="file" id="proofOfOwnership" required placeholder="Add" class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
            </div> 
        </div>
        <div>
            <div>
                <label for="roadWorthiness" class="mb-2 text-sm text-gray-900">Certificate of road worthiness:</label>
                <input type="file" id="roadWorthiness" placeholder="Add" required class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
            </div> 
            <div>
                <label for="carInsuranceCertificate" class="  mb-2 text-sm text-gray-900 ">Car Insurance Certificate:</label>
                <input type="file" id="carInsuranceCertificate" required placeholder="Add" class="bg-gray-200 border border-gray-300 text-gray-950 text-lg focus:ring-gray-600  w-full py-2 px-1 ">
            </div> 
        </div>   
    </div>
    <div class="flex items-center justify-center py-4">
        <button type="submit" class="text-white bg-green-900 hover:bg-green-950 focus:ring-4 focus:outline-none focus:ring-green-600 font-mediun rounded-lg text-center text-sm w-full sm:w-auto px-5 py-3 font-bold"> Submit</button>
    </div>
</form>
@endsection