@extends('layout')

@section('title', 'Products')

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Shop</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="products-section container">
        <div class="sidebar">
            <h3>By Category</h3>
            <ul>
                @foreach($categories as $category)
                    <li class="{{ setActiveURL($category->slug) }}"><a href="{{ route('shop.index', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>

{{--            <h3>By Price</h3>--}}
{{--            <ul>--}}
{{--                <li><a href="#">$0 - $700</a></li>--}}
{{--                <li><a href="#">$700 - $2500</a></li>--}}
{{--                <li><a href="#">$2500+</a></li>--}}
{{--            </ul>--}}
        </div> <!-- end sidebar -->
        <div>
            <div class="products-header">
                <h1 class="stylish-heading">{{ $categoryName }}</h1>
                <div>
                    <strong>Price</strong>
                    <a href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'low_high']) }}">Low to High</a>
                    <a href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'high_low']) }}">High to low</a>
                </div>
            </div>
            <div class="products text-center">
                @forelse($products as $product)
                    <div class="product">
                        <a href="{{ $product->link() }}"><img src="{{ asset('img/products/'. $product->slug . '.jpg') }}" alt="product"></a>
                        <a href="{{ $product->link() }}"><div class="product-name">{{ $product->name }} Pro</div></a>
                        <div class="product-price">{{ $product->presentPrice() }}</div>
                    </div>
                @empty
                    <div style="text-align:left">No items found</div>
                @endforelse


                <div class="pagination">
                    <ul>
                        <li>{{ $products->appends(request()->input())->links() }}</li>
                    </ul>

                </div>

            </div> <!-- end products -->
        </div>
    </div>



@endsection
