
                @forelse($products as $key=>$product)

                    <img src="{{ $product->product_image }}" alt="Item 1">
                    <h4>{{ $product->product_name }}</h4>
                    <h6>${{ $product->product_price }}</h6>
                   
               

                @empty
                    No Data Found
                @endforelse