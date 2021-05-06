@extends('layout.app')

@section('content')

@foreach ($user['results'] as $user)
<!-- Header -->
    <header>
        <nav class="flex items-center justify-between flex-wrap bg-yellow-300 p-6 fixed w-full z-10 top-0">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <a class="text-green-600 font-bold text-2xl sm:text-4xl" href="#">
                    <span class="pl-2"> Grossary Store Cart</span>
                </a>
            </div>
        </nav>
    </header>
<!-- Container -->
    <section class="max-w-5xl px-6 py-16 mx-auto ">
            <!-- Cart table-->
            <div class="flex flex-col p-10">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Item
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Qty
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Total
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                            </tr>
                        </thead>
                        @foreach ($grossaries as $grossary)
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-lg" src="{{ $grossary['img'] }}" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $grossary['name'] }}
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Ksh {{  $grossary['price'] }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">1</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Ksh {{  $grossary['price'] }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button>
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                            Delete
                                        </span>
                                    </button>
                                </td>
                                </tr>
                            </tbody>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <button type="button" class="h-12 w-48 rounded font-medium text-xs bg-blue-500 text-white">Proceed to Pay</button>
        </div>

    </section>
@endforeach
@endsection

