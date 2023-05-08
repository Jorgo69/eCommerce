<div class="">
    <section class="h-100 h-custom" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col">
                                    <h5 class="mb-3"><a href="{{route('products.index')}}" class="text-body"><i
                                                class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                                    <hr>
    
                                    {{-- <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div>
                                            <p class="mb-1">Shopping cart</p>
                                            <p class="mb-0">You have 4 items in your cart</p>
                                        </div>
                                        <div>
                                            <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
                                                    class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                                        </div>
                                    </div> --}}
                                    @forelse (Cart::content() as $product)
    
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex flex-row align-items-center">
                                                    <div>
                                                        <img src="{{  asset('storage/' .$product -> model ->image) }}" class="img-fluid rounded-3"
                                                            alt="Shopping item" style="width: 65px;">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5>{{ $product -> model->title}}</h5>
                                                        @forelse ('App\Models\Category'::all() as $category)
                                                        <small class="small mb-0"> {{ $category->name}} </small>
                                                        @empty
                                                        <p> Aucune Category</p>        
                                                        @endforelse

                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center">
                                                    <div style="width: 50px;">
                                                        <h5 class="fw-normal mb-0">

                                                            <button class="btn btn-secondary" wire:click.prevent="sous('{{ $product ->rowId}}')"  @if($product -> qty === 1) disabled @endif>-</button>
                                                            {{ $product -> qty}}
                                                            <button class="btn btn-secondary" wire:click.prevent="add('{{ $product ->rowId}}')" @if($product -> qty === 6) disabled @endif>+</button>

    
                                                        </h5>
                                                    </div>
                                                    <div class="mx-3">
                                                        <form action="{{ route('cart.remove', $product ->rowId) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-outline-danger">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div style="width: 80px;">
                                                        <h5 class="mb-0"> {{ $product -> model-> price}}</h5>
                                                    </div>
                                                    {{ $product ->model ->updateSubtotal }}
                                                    {{-- <a href="#!" style="color: #cecece;"><i
                                                            class="fas fa-trash-alt"></i></a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    @empty
                                    <p> AUCUN PRODUIT DANS LE PANIER </p>
                                    @endforelse
                                </div>
                                <form action="{{route('ajou')}}" method="post">
                                    @csrf

                                    @if (! session()->has('coupon') )
                                    <div class="col">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="code">Enter un coupon</label>
                                                <input id="code" type="text" class="form-control" name="coupon_code" placeholder="Entrer un coupon pour benefier de nos reductions sur l'addiction">
                                            </div>

                                        </div>
                                    </div>
                                    @else
                                    <div class="col">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="code">Coupon deja prise en compte</label>
                                                <input id="code" type="text" class="form-control text-center"  placeholder="Un coupon est deja enreigistre" disabled>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    @endif
                                    <p>
                                        {{ session()->has('ville') }}
                                        {{ session()->has('quartier') }}
                                    </p>
                                    <div class="col">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="ville-select">Ville :</label>
                                                <select class="form-select" id="ville-select" name="ville" onchange="afficherQuartiers()" required>
                                                    <option value="">Sélectionner une ville</option>
                                                    @foreach ($villes as $ville)
                                                        <option value="{{ $ville->id }}">{{ $ville->ville }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group mt-3" id="quartiers-container" style="display:none;">
                                                <select class="form-select" name="quartier" id="quartiers-select" required>
                                                    <option value="">Selectionner</option>
                                                    @foreach ($quartiers as $quartier)
                                                    <option value="{{$quartier->id}}" class="quartier-option ville-{{$quartier->ville_id}}">{{$quartier->quartier}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <script>
                                        function afficherQuartiers() {
                                            // Récupérer la valeur de l'option de ville sélectionnée
                                            var villeId = document.getElementById("ville-select").value;
                                  
                                            // Masquer le champ de sélection de quartier s'il n'y a pas de ville sélectionnée
                                            if (villeId == "") {
                                                document.getElementById("quartiers-container").style.display = "none";
                                                return;
                                            }
                                  
                                            // Afficher le champ de sélection de quartier
                                            document.getElementById("quartiers-container").style.display = "block";
                                  
                                            // Récupérer toutes les options de quartier
                                            var options = document.getElementsByClassName("quartier-option");
                                  
                                            // Masquer toutes les options de quartier
                                            for (var i = 0; i < options.length; i++) {
                                                options[i].style.display = "none";
                                            }
                                  
                                            // Afficher les options de quartier qui ont le même ville_id que l'option de ville sélectionnée
                                            var quartiers = document.getElementsByClassName("quartier-option ville-" + villeId);
                                            for (var i = 0; i < quartiers.length; i++) {
                                                quartiers[i].style.display = "block";
                                            }
                                        }
                                    </script>
                                  
                                    <input type="submit" value="Valider">
                                  </form>
                                  <form action="{{ route('coupon.destroy')}}" method="post">
                                    @csrf
                                    {{-- @method('DELETE') --}}
                                    <button class="btn btn-danger"> Supprimez le coupon</button>
                                </form>
                                {{-- <div class="col-lg-5">
    
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

                                        <a class="btn btn-dark" href="{{ route('thanks')}}">Passer a la caisse sommme a payer {{ Cart::subtotal() }}</a>
                                        </div>
                                    </div>
    
                                </div> --}}
    
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>