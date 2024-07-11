<!-- Modal -->
<div class="modal fade" id="popupModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Title -->
            <div class="modal-header">
                <!-- <h1 class="modal-title fs-5" id="ModalLabel">Modal title</h1> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <div class="container text-center">
                    <img src="img/logo/logo3.png" alt="" height="50px" />
                    <p class="mt-2">Register Here And Avail The Best Offers!!</p>
                </div>
                <div class="container">
                    <!--Enquire Form  -->
                    <div class="enquire-section">
                        <span class="d-block text-center fw-bold my-2">
                            Get The Best Quote
                        </span>
                        <div class="container">
                            <!-- Form -->
                            <form id="contact-form-modal" class="text-center">
                                <div class="mb-3">
                                    <label for="user_name_modal" class="form-label">Name</label>
                                    <input type="text" class="form-control inputStyle shadow-none" name="user_name" id="user_name_modal" placeholder="Name" autocomplete="off" required />
                                </div>

                                <div class="mb-3">
                                    <label for="user_email_modal" class="form-label">Email address</label>
                                    <input type="email" class="form-control inputStyle shadow-none" name="user_email" id="user_email_modal" placeholder="Email Address" autocomplete="off" />
                                </div>

                                <div class="mb-3">
                                    <label for="contact_number_modal" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control inputStyle shadow-none" name="contact_number" id="contact_number_modal" pattern="[0-9]{10}" placeholder="Phone Number" oninvalid="setCustomValidity('Please enter a valid phone number. e.g., 12345-67890')" oninput="setCustomValidity('')" required />
                                </div>

                                <div class="d-flex ps-1 pb-2" style="font-size: 9px; color: #bfbfbf">
                                    <input type="checkbox" checked="" required="" class="custom-control-input custom-control-input-green" id="privacy_check_modal" data-gtm-form-interact-field-id="0" />

                                    <label class="ps-2 pb-2 custom-control-label" for="privacy_check_modal">
                                        I consent to the use of my provided data in accordance
                                        with the
                                        <a href="privacy_policy.html" target="_blank" style="font: inherit; color: inherit">privacy policy</a>.</label>
                                </div>

                                <button type="submit" class="btn btn-primary submit-btn">
                                    Submit
                                </button>
                                <p class="m-2 form_norms">
                                    <span>
                                        Your contact details are safe with us. <br />
                                    </span>
                                    <span> Our team will be in touch with you soon.</span>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer"></div>
        </div>
    </div>
</div>