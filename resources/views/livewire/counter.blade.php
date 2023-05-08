<div class="col-lg-5">
    
    <div class="card b-primary text-white rounded-3">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="mb-0">Card details</h5>
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                    class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
            </div>

            <hr class="my-4">

            <div class="d-flex justify-content-between">
                <p class="mb-2">Quantité Totales</p>
                <p class="mb-2">{{ Cart::count() }}</p>
            </div>

            <!-- Dans la vue -->
            <div>
                <label class="form-label" for="ville">Choisissez votre ville</label>
                <select name={{$ville->ville}} class="form-select" wire:model="selectedVille" id="ville">
                    <option value="">Sélectionner une ville</option>
                    @foreach ($villes as $ville)
                        <option class="form-control" value="{{ $ville->id }}">{{ $ville->ville }}</option>
                    @endforeach
                </select>
            </div>

                <div>
                    <label class="form-label" for="quartier">Votre Quartier</label>
                    <select class="form-select" wire:model="selectedQuartier" id="quartier">
                        <option value="">Sélectionner un quartier</option>
                        @foreach ($quartiers as $quartier)
                            <option class="form-control" value="{{ $quartier->id }}">{{ $quartier->quartier }}</option>
                        @endforeach
                    </select>
                </div>
                <form action="{{ route('checkout')}}" method="POST">
                    @csrf
                
                <input type="submit" class="form-controls">
                </form>


            {{-- <div class="d-flex justify-content-between">
                <p class="mb-2">Subtotal</p>
                <p class="mb-2">{{  Cart::subtotal() }}</p>
            </div>

            <div class="d-flex justify-content-between">
                <p class="mb-2">Taxe</p>
                <p class="mb-2">{{  Cart::tax()  }}</p>
            </div>

            <div class="d-flex justify-content-between mb-4">
                <p class="mb-2">Total(Incl. taxes)</p>
                <p class="mb-2">{{  Cart::total() }}</p>
            </div> --}}

            {{--  --}}
        <a class="btn btn-dark" href="{{ route('thanks')}}">Passer a la caisse sommme a payer {{ Cart::subtotal() }}</a>

            


            {{--  --}}



        </div>
    </div>

</div>