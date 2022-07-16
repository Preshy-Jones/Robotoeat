<div>
    <section class="section">
        <div class="showcase">
        </div>
    
    </section>
    <section class="mt-3">
      <div class="container showcase-2">
        {{-- <input wire:model="message" type="text">
        <h1>{{ $message }}</h1> --}}
        <div class="row">
            @foreach($products as$product)
          <div class="col-md-6 col-lg-4">
            <div class="card">
              <img class="card-img-top" src="{{$product->product_image_url}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title fw-bold">{{$product->product_name}}</h5>
                <p class="card-text">{{$product->product_description}}</p>
    
                <button
                    wire:click="like({{$product->id}},{{$product->isLiked}} )"
                    @class([
                        'btn',
                        'btn-primary' => $product->isLiked,
                        'btn-danger' =>! $product->isLiked,
                    ])
    
                 >
                 <i
                 @class([
                    'far',
                    'fa-thumbs-up' => $product->isLiked,
                    'fa-thumbs-down' =>! $product->isLiked,
                ])
                  ></i>
                    {{$product->isLiked ? 'Liked' : 'Dislike'}}
                </button>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
</div>