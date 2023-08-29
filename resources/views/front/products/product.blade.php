@extends('front.header')

@section('content')

        <!-- PRODUCT GRID
        ================================================== -->
        <section>
            <div class="container">
                <div class="row">

                    <!-- start product grid left panel -->
                    @include('front.products.side')
                    <!-- end product grid left panel -->

                    <!-- start right panel section -->
                    <div class="col-lg-9 ps-lg-1-9 order-1 order-lg-2 mb-2-9 mb-lg-0">

                        <div class="row g-0 align-items-center bg-light rounded p-3 mb-1-9">

                            <div class="col-12 col-md my-1 my-md-0 text-center text-md-start font-weight-600">Showing 1–9 of 27 results</div>

                            <div class="col-12 col-md-auto">

                                <div class="row justify-content-center">

                                    <div class="col-auto my-1 my-md-0">
                                        <label class="m-0">Show:</label>
                                        <select class="w-auto d-inline-block form-select">
                                            <option value="#?limit=9" selected="selected">9</option>
                                            <option value="#?limit=24">24</option>
                                            <option value="#?limit=50">50</option>
                                            <option value="#?limit=75">75</option>
                                            <option value="#?limit=100">100</option>
                                        </select>
                                    </div>

                                    <div class="col-auto my-1 my-md-0">
                                        <label class="m-0">Sort By:</label>
                                        <select class="w-auto d-inline-block form-select">
                                            <option value="#?sort=p.sort_order&amp;order=ASC">Default</option>
                                            <option value="#?sort=pd.name&amp;order=ASC">Name (A - Z)</option>
                                            <option value="#?sort=pd.name&amp;order=DESC">Name (Z - A)</option>
                                            <option value="#?sort=p.price&amp;order=ASC" selected="">Price (Low &gt; High)</option>
                                            <option value="#?sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
                                            <option value="#?sort=rating&amp;order=DESC">Rating (Highest)</option>
                                            <option value="#?sort=rating&amp;order=ASC">Rating (Lowest)</option>
                                            <option value="#?sort=p.model&amp;order=ASC">Model (A - Z)</option>
                                            <option value="#?sort=p.model&amp;order=DESC">Model (Z - A)</option>
                                        </select>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="row product-grid-style">

                            <div class="col-xl-4 col-sm-6">

                                <div class="product-details">

                                    <div class="product-img">

                                        <div class="label-offer bg-red">Sale</div><img src="https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?cs=srgb&dl=pexels-math-90946.jpg&fm=jpg" alt="...">

                                        <div class="product-cart">
                                            <a href="#!"><i class="fa-solid fa-eye"></i></a>
                                            <a href="#!"><i class="fas fa-cart-plus"></i></a>
                                            <a href="#!"><i class="fas fa-heart"></i></a>
                                        </div>

                                    </div>

                                    <div class="product-info">
                                        <a href="#!">Camera</a>
                                        <p class="price text-center m-0">
                                            <span class="red line-through me-2">$600</span>
                                            <span>$599</span>
                                        </p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-xl-4 col-sm-6">

                                <div class="product-details">
                                    <div class="product-img">

                                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" alt="...">

                                        <div class="product-cart">
                                            <a href="#!"><i class="fa-solid fa-eye"></i></a>
                                            <a href="#!"><i class="fas fa-cart-plus"></i></a>
                                            <a href="#!"><i class="fas fa-heart"></i></a>
                                        </div>

                                    </div>
                                    <div class="product-info">
                                        <a href="#!">Watch</a>
                                        <p class="price text-center m-0 ">
                                            <span class="red line-through me-2">$500</span>
                                            <span>$300</span>
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">

                                <div class="product-details">
                                    <div class="product-img">

                                        <div class="label-offer bg-primary-solid">New</div><img src="https://img.freepik.com/premium-psd/bottle-product-mockup-psd-beauty-packaging_53876-130082.jpg" alt="...">

                                        <div class="product-cart">
                                            <a href="#!"><i class="fa-solid fa-eye"></i></a>
                                            <a href="#!"><i class="fas fa-cart-plus"></i></a>
                                            <a href="#!"><i class="fas fa-heart"></i></a>
                                        </div>

                                    </div>
                                    <div class="product-info">
                                        <a href="#!">Coffee Mug</a>
                                        <p class="price text-center m-0">
                                            <span class="red line-through me-2">$200</span>
                                            <span>$100</span>
                                        </p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-details">
                                    <div class="product-img">

                                        <div class="label-offer bg-red">Sale</div><img src="https://www.seoclerk.com/pics/407226-2eWiCl1471372939.jpg" alt="...">

                                        <div class="product-cart">
                                            <a href="#!"><i class="fa-solid fa-eye"></i></a>
                                            <a href="#!"><i class="fas fa-cart-plus"></i></a>
                                            <a href="#!"><i class="fas fa-heart"></i></a>
                                        </div>

                                    </div>
                                    <div class="product-info">
                                        <a href="#!">Olive Oil</a>
                                        <p class="price text-center m-0">
                                            <span class="red line-through me-2">$1200</span>
                                            <span>$900</span>
                                        </p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-xl-4 col-sm-6">

                                <div class="product-details">
                                    <div class="product-img">

                                        <img src="https://img.freepik.com/free-vector/white-product-podium-with-green-tropical-palm-leaves-golden-round-arch-green-wall_87521-3023.jpg" alt="...">
                                        <div class="product-cart">
                                            <a href="#!"><i class="fa-solid fa-eye"></i></a>
                                            <a href="#!"><i class="fas fa-cart-plus"></i></a>
                                            <a href="#!"><i class="fas fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#!">Headphone</a>
                                        <p class="price text-center m-0">
                                            <span class="red line-through me-2">$399</span>
                                            <span>$199</span>
                                        </p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-xl-4 col-sm-6">

                                <div class="product-details">
                                    <div class="product-img">

                                        <div class="label-offer bg-primary-solid">New</div><img src="https://images.unsplash.com/photo-1577733966973-d680bffd2e80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGJhY2twYWNrc3xlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" alt="...">
                                        <div class="product-cart">
                                            <a href="#!"><i class="fa-solid fa-eye"></i></a>
                                            <a href="#!"><i class="fas fa-cart-plus"></i></a>
                                            <a href="#!"><i class="fas fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#!">Contrast Backpack</a>
                                        <p class="price text-center m-0">
                                            <span class="red line-through me-2">$800</span>
                                            <span>$699</span>
                                        </p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-xl-4 col-sm-6">

                                <div class="product-details">
                                    <div class="product-img">

                                        <div class="label-offer bg-red">Sale</div><img src="https://www.muebledeespana.com/media/10253/12113.jpg?anchor=center&mode=crop&width=1120&quality=80&slimmage=true&rnd=131312196730000000" alt="...">
                                        <div class="product-cart">
                                            <a href="#!"><i class="fa-solid fa-eye"></i></a>
                                            <a href="#!"><i class="fas fa-cart-plus"></i></a>
                                            <a href="#!"><i class="fas fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#!">Wodden Table</a>
                                        <p class="price text-center m-0">
                                            <span class="red line-through me-2">$199</span>
                                            <span>$99</span>
                                        </p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-xl-4 col-sm-6">

                                <div class="product-details">
                                    <div class="product-img">

                                        <div class="label-offer bg-red">Sale</div><img src="https://media.istockphoto.com/id/1271796113/photo/women-is-holding-handbag-near-luxury-car.jpg?s=612x612&w=0&k=20&c=-jtXLmexNgRa-eKqA1X8UJ8QYWhW7XgDiWNmzuuCHmM=" alt="...">

                                        <div class="product-cart">
                                            <a href="#!"><i class="fa-solid fa-eye"></i></a>
                                            <a href="#!"><i class="fas fa-cart-plus"></i></a>
                                            <a href="#!"><i class="fas fa-heart"></i></a>
                                        </div>

                                    </div>
                                    <div class="product-info">
                                        <a href="#!">Handbag</a>
                                        <p class="price text-center m-0">
                                            <span class="red line-through me-2">$99</span>
                                            <span>$59</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">

                                <div class="product-details">
                                    <div class="product-img">
                                        <img src="https://cdn.shopify.com/s/files/1/2170/8465/products/STEVEMADDEN-SHOES_MONICA_BLACK-VELVET_SIDE_grande.jpg?v=1657647402" alt="...">
                                        <div class="product-cart">
                                            <a href="#!"><i class="fa-solid fa-eye"></i></a>
                                            <a href="#!"><i class="fas fa-cart-plus"></i></a>
                                            <a href="#!"><i class="fas fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#!">Black Velvet Heels</a>
                                        <p class="price text-center m-0">
                                            <span class="red line-through me-2">$99</span>
                                            <span>$59</span>
                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="row mt-1-9 mt-lg-6">
                            <div class="col-12">
                                <div class="pagination text-small text-uppercase text-extra-dark-gray">
                                    <ul>
                                        <li><a href="#!"><i class="fas fa-long-arrow-alt-left me-1 d-none d-sm-inline-block"></i> Prev</a></li>
                                        <li class="active"><a href="#!">1</a></li>
                                        <li><a href="#!">2</a></li>
                                        <li><a href="#!">3</a></li>
                                        <li><a href="#!">Next <i class="fas fa-long-arrow-alt-right ms-1 d-none d-sm-inline-block"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end right panel section -->

                </div>
            </div>
        </section>

@endsection
