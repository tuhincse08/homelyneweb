@extends('front.layouts.layout')

@section('content')

    <!-- Breadcrumb Section Start -->
    <!--section class="faq-breadscrumb pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>Help Center</h2>
                        <p>We are glad having you here looking for the answer. As our team hardly working on the
                            product, feel free to ask any questions. We Believe only your feedback might move us
                            forward.</p>
                        <div class="faq-form-tag">
                            <div class="input-group">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <input type="search" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com">
                                <div class="dropdown">
                                    <button class="btn btn-md faq-dropdown-button dropdown-toggle" type="button"
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown">All
                                        Product <i class="fa-solid fa-angle-down ms-2"></i></button>
                                    <ul class="dropdown-menu faq-dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section-->
    <!-- Breadcrumb Section End -->

    <!-- Faq Question section Start -->
    <!--section class="faq-contain">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="slider-4-2 product-wrapper">
                        <div>
                            <div class="faq-top-box">
                                <div class="faq-box-icon">
                                    <img src="../assets/images/inner-page/faq/start.png" class="blur-up lazyload"
                                        alt="">
                                </div>

                                <div class="faq-box-contain">
                                    <h3>Getting Started</h3>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="faq-top-box">
                                <div class="faq-box-icon">
                                    <img src="../assets/images/inner-page/faq/help.png" class="blur-up lazyload" alt="">
                                </div>

                                <div class="faq-box-contain">
                                    <h3>Sales Question</h3>
                                    <p>Lorizzle ipsizzle boom shackalack sit get down get down.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="faq-top-box">
                                <div class="faq-box-icon">
                                    <img src="../assets/images/inner-page/faq/price.png" class="blur-up lazyload"
                                        alt="">
                                </div>

                                <div class="faq-box-contain">
                                    <h3>Pricing & Plans</h3>
                                    <p>Curabitizzle fizzle break yo neck, yall quis fo shizzle mah nizzle fo rizzle.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="faq-top-box">
                                <div class="faq-box-icon">
                                    <img src="../assets/images/inner-page/faq/contact.png" class="blur-up lazyload"
                                        alt="">
                                </div>

                                <div class="faq-box-contain">
                                    <h3>Support Contact</h3>
                                    <p>Gizzle fo shizzle bow wow wow bizzle leo bibendizzle check out this.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section-->
    <!-- Faq Question section End -->

    <!-- Faq Section Start -->
    <section class="faq-box-contain section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="faq-contain">
                        <h2>Frequently Asked Questions Buyers</h2>
                        <p>We are answering most frequent questions. No worries if you not find exact one. You can find
                            out more by searching or continuing clicking button below or directly <a
                                href="contact-us" class="theme-color text-decoration-underline">contact our
                                support.</a></p>
                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="faq-accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        1. What is HomeLyne.shop? <i
                                            class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>HomeLyne.shop is a digital marketplace that provides a
                                            convenient and accessible way to buy locally grown vegetables,
                                            home-cooked food, home-made products, and other non-food and
                                            general merchandise items from homepreneurs and smallholders in the Philippines.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        2. What type of products can I buy from HomeLyne.shop? <i
                                            class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>You can buy locally grown vegetables, home-cooked food, home-made products,
                                            and other non-food and general merchandise items from a variety of
                                            homepreneurs and smallholders on HomeLyne.shop.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        3. How do I order products on HomeLyne.shop? <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>To order products on HomeLyne.shop, visit homelyne.shop and browse the available products.
                                            Once you have found the items you would like to purchase, simply add them to your cart,
                                            select a payment method, and complete the checkout process. You will need to create an
                                            account to be able to place the order.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="true"
                                        aria-controls="collapseFour">
                                        4. What payment options are available on HomeLyne.shop? <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>HomeLyne.shop offers secure payment options such as credit/debit cards, online bank transfers, and cash on delivery (COD).</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        5. How long does it take for my order to be delivered? <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Delivery time may vary based on your location and the availability of the
                                            products you have ordered. However, HomeLyne.shop strives to deliver orders
                                            as quickly as possible and usually within 1 to 2 days.</p>

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        6. What is the delivery fee for HomeLyne.shop? <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>The delivery fee for HomeLyne.shop depends on the size and weight of your order,
                                            as well as the delivery location. Our delivery fee is competitive and designed
                                            to provide a convenient and affordable delivery service for our customers.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="true"
                                        aria-controls="collapseSeven">
                                        7. How do I track my order on HomeLyne.shop? <i
                                            class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Once you have placed your order, you will receive a confirmation email with a tracking number.
                                            You can use this tracking number to monitor the progress of your delivery through the
                                            HomeLyne.shop website or mobile app.
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="false"
                                        aria-controls="collapseEight">
                                        8. Can I return or exchange items I have purchased on HomeLyne.shop? <i
                                            class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse"
                                    aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>HomeLyne.shop offers a 14-day return or exchange policy for all products.
                                            If you are not completely satisfied with your purchase, please contact us for assistance. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingNine">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseNine" aria-expanded="false"
                                        aria-controls="collapseNine">
                                        9. Is it safe to use my credit/debit card on HomeLyne.shop? <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Yes, it is safe to use your credit/debit card on HomeLyne.shop.
                                            We use secure payment gateways and encrypted connections to ensure
                                            that all personal and financial information is protected.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTen" aria-expanded="false"
                                        aria-controls="collapseTen">
                                        10. Can I cancel my order on HomeLyne.shop? <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Yes, you can cancel your order on HomeLyne.shop, however, there may be some restrictions
                                            on cancellations depending on the status of your order and the time elapsed since it was
                                            placed. Please contact us for more information on canceling your order.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq Section End -->

     <!-- Faq Section Start -->
     <section class="faq-box-contain section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="faq-contain">
                        <h2>Frequently Asked Questions Sellers</h2>
                        <p>We are answering most frequent questions. No worries if you not find exact one. You can find
                            out more by searching or continuing clicking button below or directly <a
                                href="contact-us" class="theme-color text-decoration-underline">contact our
                                support.</a></p>
                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="faq-accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                        1. What are the requirements to become a seller on HomeLyne.shop? <i
                                            class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseOne1" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne1" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Sellers must have a valid ID, and a bank account for receiving payments,
                                            and should be able to provide necessary documentation such as business
                                            permits (if applicable) and product information.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                        2. Is there a fee for joining as a seller on HomeLyne.shop? <i
                                            class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>HomeLyne.shop does not charge any upfront fees to join as a seller.
                                            However, a small commission fee is taken from each sale made through the platform.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree1" aria-expanded="false"
                                        aria-controls="collapseThree1">
                                        3. Can I list any products on HomeLyne.shop? <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseThree1" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree1" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>HomeLyne.shop focuses on selling home-grown vegetables, home-cooked food,
                                            homemade products, and other non-food and general merchandise items.
                                            Products that are illegal, hazardous, or inappropriate are not allowed on the platform.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour1" aria-expanded="true"
                                        aria-controls="collapseFour1">
                                        4. What support will I receive as a seller on HomeLyne.shop? <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour1"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>HomeLyne.shop provides support to its sellers through various channels including email,
                                            phone, and live chat. The support team will assist with listing products, managing orders,
                                            and resolving any issues.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive1" aria-expanded="false"
                                        aria-controls="collapseFive1">
                                        5. How will I get paid for my sales on HomeLyne.shop? <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseFive1" class="accordion-collapse collapse" aria-labelledby="headingFive1"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Payments for sales made through HomeLyne.shop are deposited directly into
                                            the seller's bank account. The payment is processed within a specified
                                            timeframe after the delivery of the product.
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix1" aria-expanded="false" aria-controls="collapseSix1">
                                        6. Who takes care of delivery for my products? <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseSix1" class="accordion-collapse collapse" aria-labelledby="headingSix1"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>HomeLyne.shop has a network of delivery riders who can handle the delivery
                                            of products from sellers to buyers. Sellers can also choose to handle
                                            delivery themselves if they prefer.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven1" aria-expanded="true"
                                        aria-controls="collapseSeven1">
                                        7. How can I track my sales on HomeLyne.shop? <i
                                            class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseSeven1" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven1" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Sellers can access a dashboard that provides real-time updates on
                                            their sales and performance. The dashboard allows sellers to view
                                            order history, manage product listings, and update their account information.
                                        </p>

                                    </div>
                                </div>
                            </div>






                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq Section End -->

    @endsection
