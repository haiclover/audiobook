<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content">
        <div class="container">
            <header class="section-heading">
                <h3 class="section-title">Sản phẩm combo</h3>
            </header><!-- sect-heading -->

            <div class="row">
                @foreach ($configurableProduct as $product)
                    <div class="col-lg-3">
                        <div class="card card-product-grid">
                            <a href="{{ route('product-details',['id'=>$product->id,'path'=>$product->path])}}" class="img-wrap"> <img
                            src="{{ $product->image }}"> </a>
                            <figcaption class="info-wrap">
                                <a href="{{ route('product-details',['id'=>$product->id,'path'=>$product->path])}}" class="title">{{ $product->title }}</a>

                                <div class="mt-2 row">
                                    <div class="col-6">
                                        <var class="price">{{ $product->discount_price }}</var> <!-- price-wrap.// -->
                                        <p class="text-muted price" style="text-decoration: line-through;">{{ $product->regular_price }}</p>
                                    </div>
                                    <div class="col-6">
                                        @includeIf('home.product.cart-button',['view'=>'configurable-product'])
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
