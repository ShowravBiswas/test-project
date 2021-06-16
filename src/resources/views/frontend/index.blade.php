@extends('frontend.layouts.app')
@section('title')
    OSP - Home
@endsection
@section('content')
    <div class="container mt-3">

        <h4 class="bold text-center mt-gutter">Featured Products</h4>

        <!-- Featured Products -->
        <div class="grid grid-gap-3 grid-col-2 grid-col-md-4 my-3">
            <div class="card card-product">
                <div class="card-body">
                    <button class="wishlist atw-demo active" title="Added to wishlist"><i data-feather="heart"></i></button>
                    <a href="shop-single.html"><img class="card-img-top" src="../img/products/1_small.jpg" alt="Card image cap"></a>
                    <a href="shop-single.html" class="card-title">Hanes Hooded Sweatshirt</a>
                    <span class="badge badge-success">New arrival</span>
                    <div class="price"><span class="h5">$18.56</span></div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm rounded-pill btn-outline-primary btn-block atc-demo">Add to Cart</button>
                </div>
            </div>
            <div class="card card-product">
                <div class="card-body">
                    <button class="wishlist atw-demo" title="Add to wishlist"><i data-feather="heart"></i></button>
                    <a href="shop-single.html"><img class="card-img-top" src="../img/products/2_small.jpg" alt="Card image cap"></a>
                    <a href="shop-single.html" class="card-title">The Flash Logo T-Shirt</a>
                    <div class="price">
                        <span class="h5">$16.64</span>
                    </div>
                    <div class="color-options">
                        <label class="custom-control custom-radio custom-radio-color custom-control-inline">
                            <input type="radio" name="color-option1" class="custom-control-input" value="../img/products/2_small.jpg" checked>
                            <span class="custom-control-label" style="background-color: #f2c43a"></span>
                        </label>
                        <label class="custom-control custom-radio custom-radio-color custom-control-inline">
                            <input type="radio" name="color-option1" class="custom-control-input" value="../img/products/2_small_black.jpg">
                            <span class="custom-control-label" style="background-color: #23232b"></span>
                        </label>
                        <label class="custom-control custom-radio custom-radio-color custom-control-inline">
                            <input type="radio" name="color-option1" class="custom-control-input" value="../img/products/2_small_red.jpg">
                            <span class="custom-control-label" style="background-color: #eb0015"></span>
                        </label>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm rounded-pill btn-outline-primary btn-block atc-demo">Add to Cart</button>
                </div>
            </div>
            <div class="card card-product">
                <div class="card-body">
                    <button class="wishlist atw-demo" title="Add to wishlist"><i data-feather="heart"></i></button>
                    <a href="shop-single.html"><img class="card-img-top" src="../img/products/3_small.jpg" alt="Card image cap"></a>
                    <a href="shop-single.html" class="card-title">Open Front Cropped Cardigans</a>
                    <span class="badge badge-warning">20% OFF</span>
                    <div class="price">
                        <span class="h5 del">$19.00</span>
                        <span class="h5">$15.20</span>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm rounded-pill btn-outline-primary btn-block atc-demo">Add to Cart</button>
                </div>
            </div>
            <div class="card card-product">
                <div class="card-body">
                    <button class="wishlist atw-demo" title="Add to wishlist"><i data-feather="heart"></i></button>
                    <a href="shop-single.html"><img class="card-img-top" src="../img/products/4_small.jpg" alt="Card image cap"></a>
                    <a href="shop-single.html" class="card-title">Cotton Fleece Long Hoodie</a>
                    <div class="price">
                        <span class="h5 del">$98.90</span>
                        <span class="h5">$85.00</span>
                    </div>
                    <div class="color-options">
                        <label class="custom-control custom-radio custom-radio-color custom-control-inline">
                            <input type="radio" name="color-option2" class="custom-control-input" value="../img/products/4_small.jpg" checked>
                            <span class="custom-control-label" style="background-color: #625e39"></span>
                        </label>
                        <label class="custom-control custom-radio custom-radio-color custom-control-inline">
                            <input type="radio" name="color-option2" class="custom-control-input" value="../img/products/4_small_blue.jpg">
                            <span class="custom-control-label" style="background-color: #2e4797"></span>
                        </label>
                        <label class="custom-control custom-radio custom-radio-color custom-control-inline">
                            <input type="radio" name="color-option2" class="custom-control-input" value="../img/products/4_small_maroon.jpg">
                            <span class="custom-control-label" style="background-color: #791949"></span>
                        </label>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm rounded-pill btn-outline-primary btn-block atc-demo">Add to Cart</button>
                </div>
            </div>
        </div>
        <!-- /Featured Products -->

    </div>
@endsection
