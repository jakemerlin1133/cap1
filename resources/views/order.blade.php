@extends('layouts.app')

@section('content')
    
<h1 class="text-[#A0C878] font-bold text-2xl ml-3 text-shadow-sm">Order</h1>
<div class=" mt-4 overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-shadow-lg">
        <thead class="text-xs text-[#FAF6E9] uppercase bg-[#537D5D]">
            <tr>
                <th scope="col" class="px-6 py-3 text-shadow-lg">
                    Product Name
                </th>
                <th scope="col" class="px-6 py-4 text-shadow-lg">
                    Categories
                </th>
                <th scope="col" class="px-6 py-4 text-shadow-lg">
                    Kg/gram
                </th>
                 <th scope="col" class="px-6 py-4 text-shadow-lg">
                    Stock
                </th>
                <th scope="col" class="px-6 py-4 text-shadow-lg">
                    Price
                </th>
                <th scope="col" class="px-6 py-4 text-shadow-lg">
                    Action
                </th>
            </tr>
        </thead>

        <tbody>
            <tr class="border-b border-gray-200 bg-[#9EBC8A] text-[#FAF6E9]">
                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-shadow-lg">
                    Apple MacBook Pro 17"
                </th>
                 <td class="px-7 py-4 text-shadow-lg">
                    Silver
                </td>
                 <td class="px-7 py-4 text-shadow-lg">
                    Laptop
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    99
                </td>
                 <td class="px-7 py-4 text-shadow-lg">
                    $2999
                </td>
                <td class="px-6 py-4">
                   <button type="button" class="text-white bg-[#537D5D] hover:bg-[#73946B] font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none text-shadow-lg shadow-lg">ORDER</button>
                </td>
            </tr>

            <tr class="border-b border-gray-200 bg-[#73946B] text-[#FAF6E9]">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-shadow-lg">
                    Microsoft Surface Pro
                </th>
                <td class="px-7 py-4 text-shadow-lg">
                    White
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    Laptop PC
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    99
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    $1999
                </td>
                  <td class="px-6 py-4">
                   <button type="button" class="text-white bg-[#537D5D] hover:bg-[#73946B] font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none text-shadow-lg shadow-lg">ORDER</button>
                </td>
            </tr>

            <tr class="border-b border-gray-200 bg-[#9EBC8A] text-[#FAF6E9]">
                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-shadow-lg">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-7 py-4 text-shadow-lg">
                    Silver
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    Laptop
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    99
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    $2999
                </td>
                  <td class="px-6 py-4">
                   <button type="button" class="text-white bg-[#537D5D] hover:bg-[#73946B] font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none text-shadow-lg shadow-lg">ORDER</button>
                </td>
            </tr>

            <tr class="border-b border-gray-200 bg-[#73946B] text-[#FAF6E9]">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-shadow-lg">
                    Microsoft Surface Pro
                </th>
                <td class="px-7 py-4 text-shadow-lg">
                    White
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    Laptop PC
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    99
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    $1999
                </td>
                 <td class="px-6 py-4">
                   <button type="button" class="text-white bg-[#537D5D] hover:bg-[#73946B] font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none text-shadow-lg shadow-lg">ORDER</button>
                </td>
            </tr>
            <tr class="border-b border-gray-200 bg-[#9EBC8A] text-[#FAF6E9]">
                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-shadow-lg">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-7 py-4 text-shadow-lg">
                    Silver
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    Laptop
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    99
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    $2999
                </td>
                 <td class="px-6 py-4">
                   <button type="button" class="text-white bg-[#537D5D] hover:bg-[#73946B] font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none text-shadow-lg shadow-lg">ORDER</button>
                </td>
            </tr>

            <tr class="border-b border-gray-200 bg-[#73946B] text-[#FAF6E9]">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-shadow-lg">
                    Microsoft Surface Pro
                </th>
                <td class="px-7 py-4 text-shadow-lg">
                    White
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    Laptop PC
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    99
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    $1999
                </td>
                 <td class="px-6 py-4 text-shadow-lg">
                   <button type="button" class="text-white bg-[#537D5D] hover:bg-[#73946B] font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none text-shadow-lg shadow-lg">ORDER</button>
                </td>
            </tr>
            <tr class="border-b border-gray-200 bg-[#9EBC8A] text-[#FAF6E9]">
                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-shadow-lg">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-7 py-4 text-shadow-lg">
                    Silver
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    Laptop
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    99
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    $2999
                </td>
                  <td class="px-6 py-4">
                   <button type="button" class="text-white bg-[#537D5D] hover:bg-[#73946B] font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none text-shadow-lg shadow-lg">ORDER</button>
                </td>
            </tr>

            <tr class="border-b border-gray-200 bg-[#73946B] text-[#FAF6E9]">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-shadow-lg">
                    Microsoft Surface Pro
                </th>
                <td class="px-7 py-4 text-shadow-lg">
                    White
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    Laptop PC
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    99
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    $1999
                </td>
                  <td class="px-6 py-4">
                   <button type="button" class="text-white bg-[#537D5D] hover:bg-[#73946B] font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none text-shadow-lg shadow-lg">ORDER</button>
                </td>
            </tr>

            <tr class="border-b border-gray-200 bg-[#9EBC8A] text-[#FAF6E9]">
                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-shadow-lg">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-7 py-4 text-shadow-lg">
                    Silver
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    Laptop
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    99
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    $2999
                </td>
                  <td class="px-6 py-4">
                   <button type="button" class="text-white bg-[#537D5D] hover:bg-[#73946B] font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none text-shadow-lg shadow-lg">ORDER</button>
                </td>
            </tr>

            <tr class="border-b border-gray-200 bg-[#73946B] text-[#FAF6E9]">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-shadow-lg">
                    Microsoft Surface Pro
                </th>
                <td class="px-7 py-4 text-shadow-lg">
                    White
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    Laptop PC
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    99
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    $1999
                </td>
                  <td class="px-6 py-4">
                   <button type="button" class="text-white bg-[#537D5D] hover:bg-[#73946B] font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none text-shadow-lg shadow-lg">ORDER</button>
                </td>
            </tr>

            <tr class="border-b border-gray-200 bg-[#9EBC8A] text-[#FAF6E9]">
                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-shadow-lg">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-7 py-4 text-shadow-lg">
                    Silver
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    Laptop
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    99
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    $2999
                </td>
                 <td class="px-6 py-4">
                   <button type="button" class="text-white bg-[#537D5D] hover:bg-[#73946B] font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none text-shadow-lg shadow-lg">ORDER</button>
                </td>
            </tr>

            <tr class="border-b border-gray-200 bg-[#73946B] text-[#FAF6E9]">
                <th scope="row" class="px-6 py-4 font-medium text-[#FAF6E9] whitespace-nowrap dark:text-white text-shadow-lg">
                    Microsoft Surface Pro
                </th>
                <td class="px-7 py-4 text-shadow-lg">
                    White
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    Laptop PC
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    99
                </td>
                <td class="px-7 py-4 text-shadow-lg">
                    $1999
                </td>
                  <td class="px-6 py-4">
                   <button type="button" class="text-white bg-[#537D5D] hover:bg-[#73946B] font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none text-shadow-lg shadow-lg">ORDER</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
