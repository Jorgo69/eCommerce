<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                {{-- <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div> --}}
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @forelse (Auth()->user()->orders as $order)
                        <div class="card-header">
                            Commande passée le {{ Carbon\Carbon::parse ($order->date_transaction)->format('d/m/Y à H:i') }}
                            d'un montant de <strong> {{ $order->montant}} </strong> sans frais de transaction
                        </div>
                        <card-body>
                            @foreach (unserialize($order->products) as $product)
                                <div class="">Nom du produits {{ $product[0]}}</div>
                                <div class="">Le prix {{ $product[1]}}</div>
                                {{-- <div class="">La quantité {{ $product[2]}}</div> --}}
                            @endforeach
                        </card-body>
                    @empty
                        <div class="alert alert-primary"> Aucune commande enreigistrée</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
