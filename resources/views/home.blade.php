@extends('layout.app')

@section('content')
<!-- Header -->
    <header>
        <nav class="flex items-center justify-between flex-wrap bg-yellow-300 p-6 fixed w-full z-10 top-0">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <a class="text-green-600 font-bold text-2xl sm:text-4xl" href="#">
                    <span class="pl-2"> Grossary Store</span>
                </a>
            </div>
            <a href="/cart">
                <button class="bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="px-4">CART</span>
                    <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">2</span>
                </button>
            </a>
        </nav>
    </header>
<!-- Container -->
    <section class="max-w-5xl px-6 py-16 mx-auto">
        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
            @foreach ($grossaries as $grossary)
                <!-- Card View -->
                <div class="rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="{{ $grossary['img'] }}" alt="{{ $grossary['name'] }}">
                    <div class="px-6 py-4 flex flex-row justify-between">
                        <div class="pr-1">
                            <p class="text-gray-700 text-xl">{{ $grossary['name'] }}</p>
                            <div class="font-bold text-xl mb-2">Ksh {{ $grossary['price'] }}</div>
                            <button class="bg-transparent hover:bg-yellow-500 text-yellow-500 font-semibold hover:text-white py-2 px-4 border border-orange-500 hover:border-transparent rounded">
                                Add to Cart
                            </button>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        {{-- <div class="content">
            <div id="card"></div>
        </div> --}}
    </section>
@endsection
