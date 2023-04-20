<div class="">
    <section class="h-100 h-custom" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card">
                        <div class="card-body p-4">
    
                            <div class="row">
    
                                <div class="col-lg-7">
                                    <h5 class="mb-3"><a href="#!" class="text-body"><i
                                                class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                                    <hr>
    
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div>
                                            <p class="mb-1">Shopping cart</p>
                                            <p class="mb-0">You have 4 items in your cart</p>
                                        </div>
                                        <div>
                                            <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
                                                    class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                                        </div>
                                    </div>
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
                                                        <p class="small mb-0"> CAtegory: </p>
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
                                                        <h5 class="mb-0"> {{ $product -> model-> prix}}</h5>
                                                    </div>
                                                    <a href="#!" style="color: #cecece;"><i
                                                            class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    @empty
                                    <p> AUCUN PRODUIT DANS LE PANIER </p>
                                    @endforelse
                                </div>
                                <div class="col-lg-5">
    
                                    <div class="card bg-primary text-white rounded-3">
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
    
                                            <div class="d-flex justify-content-between">
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
                                            </div>

                                            {{--  --}}
<a href="/merci">Passer a la caisse sommme a payer {{ Cart::subtotal() }}</a>

                                            


                                            {{--  --}}
    
     
    
                                        </div>
                                    </div>
    
                                </div>
    
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>