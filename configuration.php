<style>
    #configuration_section {
        background: url(../img/extra/Bg-1.jpg);
        padding: 40px;
    }


    .pricing_cards {
        background-color: white;
        border-radius: 10px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    }

    .Pricing_Header {
        background-color: black;
        color: var(--colorPrimary);
        padding: 40px 0px;
        border-radius: 10px;
        font-size: 1.5em;
    }

    .Pricing_Header:hover {
        background-color: var(--colorPrimary);
        color: var(--colorWhite);
    }

    .Pricing_body {
        padding: 40px;
        border-radius: 10px;
    }

    .Pricing_body p {
        font-size: 1.5em;
        font-weight: bold;
    }

    .price {
        font-size: 2rem;
    }
</style>


<section id="configuration_section">
    <div class="overlay">
        <div>
            <h3 class="section-heading pt-3 ">Configuration</h3>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 justify-content-center align-items-center">
                <div class="col-md-4">
                    <div class="pricing_cards text-center">
                        <div class="Pricing_Header">
                            <p class="type">Apartment</p>
                            <p class="price">₹ 1.53Cr + Tax** </p>
                        </div>
                        <div class="Pricing_body">
                            <p class="Size">Size: 1280.00 sq. Ft.</p>
                            <hr>
                            <p class="flat-type">Type: 2 BHK</p>
                            <button class="btn btn-dark download_btn" data-bs-toggle="modal" data-bs-target="#popupModal">
                                Know More
                            </button>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="pricing_cards text-center">
                        <div class="Pricing_Header">
                            <p class="type">Apartment</p>
                            <p class="price">₹ 2.50Cr + Tax** </p>
                        </div>
                        <div class="Pricing_body">
                            <p class="Size">Size: 2080.00 Sq.Ft.</p>
                            <hr>
                            <p class="flat-type">Type: 3 BHK</p>
                            <button class="btn btn-dark download_btn" data-bs-toggle="modal" data-bs-target="#popupModal">
                                Know More
                            </button>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="pricing_cards text-center">
                        <div class="Pricing_Header">
                            <p class="type">Apartment</p>
                            <p class="price">₹ 3.30Cr + Tax** </p>
                        </div>
                        <div class="Pricing_body">
                            <p class="Size">Size: 2750.00 Sq.Ft.</p>
                            <hr>
                            <p class="flat-type">Type: 4 BHK</p>
                            <button class="btn btn-dark download_btn" data-bs-toggle="modal" data-bs-target="#popupModal">
                                Know More
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php include 'floor_plans.php'; ?>
</section>