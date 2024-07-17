<x-landing.landing-layout>
    <div class="price-grid section-padding bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-title">
                        <h2>Latest price</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="price-widget bg-btc">
                        <a href="{{ url('price-details') }}">
                            <div class="price-content">
                                <div class="icon-title">
                                    <i class="cc BTC"></i>
                                    <span>Bitcoin</span>
                                </div>
                                <h5>$ 11,785.10</h5>
                            </div>
                            <div id="chart"></div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="price-widget bg-eth">
                        <a href="{{ url('price-details') }}">
                            <div class="price-content">
                                <div class="icon-title">
                                    <i class="cc ETH"></i>
                                    <span>Ethereum</span>
                                </div>
                                <h5>$ 11,785.10</h5>
                            </div>
                            <div id="chart2"></div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="price-widget bg-usdt">
                        <a href="{{ url('price-details') }}">
                            <div class="price-content">
                                <div class="icon-title">
                                    <i class="cc USDT"></i>
                                    <span>Tether</span>
                                </div>
                                <h5>$ 11,785.10</h5>
                            </div>
                            <div id="chart3"></div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="price-widget bg-xrp">
                        <a href="{{ url('price-details') }}">
                            <div class="price-content">
                                <div class="icon-title">
                                    <i class="cc XRP"></i>
                                    <span>Ripple</span>
                                </div>
                                <h5>$ 11,785.10</h5>
                            </div>
                            <div id="chart4"></div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="price-widget bg-ltc">
                        <a href="{{ url('price-details') }}">
                            <div class="price-content">
                                <div class="icon-title">
                                    <i class="cc LTC"></i>
                                    <span>Litecoin</span>
                                </div>
                                <h5>$ 11,785.10</h5>
                            </div>
                            <div id="chart5"></div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="price-widget bg-ada">
                        <a href="{{ url('price-details') }}">
                            <div class="price-content">
                                <div class="icon-title">
                                    <i class="cc ADA"></i>
                                    <span>Cardano</span>
                                </div>
                                <h5>$ 11,785.10</h5>
                            </div>
                            <div id="chart6"></div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="price-widget bg-eos">
                        <a href="{{ url('price-details') }}">
                            <div class="price-content">
                                <div class="icon-title">
                                    <i class="cc EOS"></i>
                                    <span>EOS</span>
                                </div>
                                <h5>$ 11,785.10</h5>
                            </div>
                            <div id="chart7"></div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="price-widget bg-xmr">
                        <a href="{{ url('price-details') }}">
                            <div class="price-content">
                                <div class="icon-title">
                                    <i class="cc XMR"></i>
                                    <span>Monero</span>
                                </div>
                                <h5>$ 11,785.10</h5>
                            </div>
                            <div id="chart8"></div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="price-widget bg-xtz">
                        <a href="{{ url('price-details') }}">
                            <div class="price-content">
                                <div class="icon-title">
                                    <i class="cc XTZ"></i>
                                    <span>Tezos</span>
                                </div>
                                <h5>$ 11,785.10</h5>
                            </div>
                            <div id="chart9"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section("extra-js")
    <script src="./vendor/apexchart/apexcharts.min.js"></script>
    <script src="./js/plugins/apex-price.js"></script>
    @stop
</x-landing.landing-layout>
