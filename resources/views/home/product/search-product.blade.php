<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content">
    <div class="container">
        @if (0 != count($searchProduct))
            <header class="section-heading">
                <h3 class="section-title text-center">Sản phẩm tìm thấy</h3>
            </header>
        @else
            <header class="section-heading">
                <h3 class="section-title text-center">Không tìm thấy sản phẩm nào</h3>
            </header>
        @endif


        <div class="row">
            @foreach ($searchProduct as $product)
                <div class="col-lg-3">
                    <div class="card card-product-grid">
                        <a href="{{ route('product-details',['id'=>$product->id,'path'=>$product->path])}}" class="img-wrap"> <img
                        src="{{ $product->image }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="{{ route('product-details',['id'=>$product->id,'path'=>$product->path])}}" class="title">{{ $product->title }}</a>
                            {{-- text-truncate --}}
                            <div class="mt-2 row">
                                <div class="col-6">
                                    <var class="price">{{ $product->discount_price }}</var> <!-- price-wrap.// -->
                                    <p class="text-muted price" style="text-decoration: line-through;">{{ $product->regular_price }}</p>
                                </div>
                                <div class="col-6">
                                    @includeIf('home.product.cart-button',['view'=>'new-product'])
                                </div>
                            </div>
                        </figcaption>
                    </div>
                </div>
            @endforeach

        </div> <!-- row.// -->

    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

