@extends('layouts.app')

@section('content')
<h1 class="text-[#A0C878] font-bold text-5xl ml-3">Dashboard</h1>
    <div class="mt-4 grid grid-cols-4 gap-4 w-full overflow-x-auto">
      {{-- TOTAL ORDER LIST --}}
        <div class="bg-[#A0C878] shadow-xl/20 rounded-lg">
            <div class="flex items-center justify-between p-4">
                <div>
                    <h1 class="text-[#FAF6E9] text-2xl text-shadow-lg font-bold break-words">2,304</h1>
                    <h2 class="text-[#FAF6E9] text-3xl text-shadow-lg font-bold break-words">Total Product</h2>
                </div>

                <div>
                    <i class="fa-solid fa-cart-shopping text-[#FAF6E9] text-4xl text-shadow-lg break-words"></i>
                </div>
            </div>

            <div class="w-full bg-[#73946B] items-center text-[#FAF6E9] p-1.5 flex justify-center text-shadow-lg rounded-b-lg">
                <a href="{{ route('products') }}" class="flex items-center text-center">
                  <h1 class="text-bold text-[#FAF6E9] break-words">More Info</h1>
                  <i class="fa-solid fa-arrow-right text-[12px] bg-[#537D5D] ml-1 p-[6px] rounded-full break-words"></i>
                </a>
            </div>
        </div>


   {{-- TOTAL INVENTORY LIST --}}
        <div class="bg-[#D2D0A0] shadow-xl/20 rounded-lg overflow-x-auto">
            <div class="flex items-center justify-between p-4">
                <div>
                    <h1 class="text-[#FAF6E9] text-2xl text-shadow-lg font-bold break-words">1,234</h1>
                    <h2 class="text-[#FAF6E9] text-3xl text-shadow-lg font-bold break-words">Total Inventory</h2>
                </div>

                <div>
                    <i class="fa-solid fa-warehouse text-[#FAF6E9] text-4xl text-shadow-lg break-words"></i>
                </div>
            </div>

            <div class="w-full bg-[#73946B] items-center text-[#FAF6E9] p-1.5 flex justify-center text-shadow-lg rounded-b-lg">
                <a href="{{ route('inventory') }}" class="flex items-center text-center">
                  <h1 class="text-bold text-[#FAF6E9] break-words">More Info</h1>
                  <i class="fa-solid fa-arrow-right text-[12px] bg-[#537D5D] ml-1 p-[6px] rounded-full break-words"></i>
                </a>
            </div>
        </div>

{{-- TOTAL ACCOUNT LIST --}}
        <div class="bg-[#9EBC8A] shadow-xl/20 rounded-lg overflow-x-auto">
            <div class="flex items-center justify-between p-4">
                <div>
                    <h1 class="text-[#FAF6E9] text-2xl text-shadow-lg font-bold break-words">5,304</h1>
                    <h2 class="text-[#FAF6E9] text-3xl text-shadow-lg font-bold break-words">Total Account</h2>
                </div>

                <div>
                    <i class="fa-solid fa-circle-user text-[#FAF6E9] text-4xl text-shadow-lg break-words"></i>
                </div>
            </div>

            <div class="w-full bg-[#73946B] items-center text-[#FAF6E9] p-1.5 flex justify-center text-shadow-lg rounded-b-lg">
                <a href="{{ route('accountList') }}" class="flex items-center text-center">
                  <h1 class="text-bold text-[#FAF6E9] break-words">More Info</h1>
                  <i class="fa-solid fa-arrow-right text-[12px] bg-[#537D5D] ml-1 p-[6px] rounded-full break-words"></i>
                </a>
            </div>
        </div>

        
{{-- TOTAL PURCHAST HISTORY --}}
        <div class="bg-[#DDEB9D] shadow-xl/20 rounded-lg overflow-x-auto">
            <div class="flex items-center justify-between p-4">
                <div>
                    <h1 class="text-[#FAF6E9] text-2xl text-shadow-lg font-bold break-words">2,304</h1>
                    <h2 class="text-[#FAF6E9] text-3xl text-shadow-lg font-bold break-words">Total Purchase</h2>
                </div>

                <div>
                    <i class="fa-solid fa-shop text-[#FAF6E9] text-4xl text-shadow-lg break-words"></i>
                </div>
            </div>

            <div class="w-full bg-[#73946B] items-center text-[#FAF6E9] p-1.5 flex justify-center text-shadow-lg rounded-b-lg">
                <a href="{{ route('purchaseHistory') }}" class="flex items-center text-center">
                  <h1 class="text-bold text-[#FAF6E9] break-words">More Info</h1>
                  <i class="fa-solid fa-arrow-right text-[12px] bg-[#537D5D] ml-1 p-[6px] rounded-full break-wordsl"></i>
                </a>
            </div>
        </div>
    </div>
@endsection
