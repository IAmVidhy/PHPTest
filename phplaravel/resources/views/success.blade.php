<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Success!') }}
        </h2>
    </x-slot>

    <form action="payorder">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <tbody>
                    @foreach ($sukses as $item)
                    <tr>
                    <td>{{ $item ['product'] }} that cost {{ $item ['price'] }}, will be shipped to :</td>
                    </tr>
                    <tr>
                    <td>{{ $item ['address'] }}, only after you pay</td>
                    </tr>
                    @endforeach
                </tbody>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <div class="d-grid gap-2">
            <button class="btn btn-primary" role="button">Pay Now</button>
        </div>
    </div>

    </form>
</x-app-layout>