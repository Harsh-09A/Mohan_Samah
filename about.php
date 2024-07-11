   <!-- About Section -->
   <section id="about_section" class="container-fluid p-4 ">
       <div class="about_overlay">
           <div class="container pt-2">
               <div class="row">
                   <div class="col-12 col-lg-6 p-5 about-para-container">
                       <div class="text-center">
                           <h2 class="section-heading text-white">
                               VM Construction
                           </h2>

                           <div class="text-white about-para">
                               <p>
                                   At VM Construction, we believe in creating spaces that reflect our commitment to quality, innovation, and excellence. With over two decades of experience in the real estate industry, we have successfully delivered a series of landmark projects in Navi Mumbai, establishing ourselves as a trusted name in residential development.
                               </p>
                               <span id="dots8" style="display: inline"></span>
                               <span id="more8" style="display: none">
                                   <p>
                                       VM Construction is led by Mr. Mohan Nagdev as a chairman & Vinit Nagdev, as a Managing Director since from 2004 a visionary entrepreneur with a passion for building extraordinary homes. Under his leadership, the company has grown from strength to strength, always prioritizing customer satisfaction and attention to detail in every project.
                                   </p>
                               </span>
                           </div>
                           <button onclick="toggleContent('dots8','more8', 'myBtn8')" class="read_more" id="myBtn8">
                               Read More
                           </button>
                           <br />
                       </div>
                   </div>

                   <div class="col-12 col-lg-6 p-5">
                       <div class="text-center">
                           <h3 class="section-heading text-white">CONTACT US</h3>
                           <!-- Form -->
                           <div class="enquire-section ps-5 pe-5">
                               <div class="container">
                                   <form id="contact-form" class="text-center">
                                       <div class="mb-3">
                                           <label for="user_name" class="form-label">Name</label>
                                           <input type="text" class="form-control inputStyle shadow-none" name="user_name" id="user_name" placeholder="Name" autocomplete="off" required />
                                       </div>
                                       <div class="mb-3">
                                           <label for="user_email" class="form-label">Email address</label>
                                           <input type="email" class="form-control inputStyle shadow-none" name="user_email" id="user_email" placeholder="Email Address" autocomplete="off" />
                                       </div>
                                       <div class="mb-3">
                                           <label for="contact_number" class="form-label">Phone Number</label>
                                           <input type="tel" class="form-control inputStyle shadow-none" id="contact_number" name="contact_number" pattern="[0-9]{10}" placeholder="Phone Number" oninvalid="setCustomValidity('Please enter a valid phone number. e.g., 12345-67890')" oninput="setCustomValidity('')" required />
                                       </div>

                                       <div class="d-flex ps-1 pb-2" style="font-size: 9px; color: #bfbfbf">
                                           <input type="checkbox" checked="" required="" class="custom-control-input custom-control-input-green" id="privacy_check" data-gtm-form-interact-field-id="0" />

                                           <label class="ps-2 pb-2 custom-control-label" for="privacy_check">
                                               I consent to the use of my provided data in
                                               accordance with the
                                               <a href="privacy_policy.html" target="_blank" style="font: inherit; color: inherit">privacy policy</a>.</label>
                                       </div>

                                       <button type="submit" class="btn btn-primary submit-btn w-100">
                                           Submit
                                       </button>
                                   </form>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>