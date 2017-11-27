<?php include '../partials/head.php' ?>

    <input type="text" value="contact" type="hidden" id="activeIdentifier">
 <!-- Contact -->
 <section id="contact" class="contact section section-image" data-spy="scroll">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <!-- Contact Form -->
                <div class="section-title">
                    <h2 class="contact-form__title">Ask a Question</h2>
                </div>
                <form>
                    <div class="form-group row">
                        <input class="col form-control form-control-lg" type="text" name="name" placeholder="Your Name">
                        <input class="col form-control form-control-lg ml-2" type="email" name="email" placeholder="Your Email">
                    </div>
                    <div class="form-group row">
                        <textarea class="col form-control form-control-lg" required name="message" placeholder="Your Message"></textarea>
                    </div>
                    <div class="form-group row">
                        <button type="submit" class="btn btn-shadow btn-md btn-simple btn-simple__blue">Submit</button>
                    </div>
                </form>
                <!--/ End Contact Form -->
            </div>
            <div class="col-12 col-md-6 col-lg-4 ml-lg-auto">
                <!-- Contact Address -->
                <div class="section-title">
                    <h2 class="contact-address__title">Our Contacts</h2>
                </div>
                <div class="contact-address__info">
                    <div class="contact-address__info1 mb-3">
                        <h6 class="text-uppercase">Address</h6>
                        <span>657 Bedford Park Blvd W,<br>Bronx<br>New York, NY, ZXX68</span>
                    </div>
                    <div class="contact-address__info2 mb-3">
                        <h6 class="text-uppercase">Phone</h6>
                        <span>+1 646 XX5-29DF</span>
                    </div>
                    <div class="contact-address__info3 mb-3">
                        <h6 class="text-uppercase">Email</h6>
                        <span><a href="mailto:qdonow@gmail.com">qdonow@gmail.com</a></span>
                    </div>
                </div>
                <!--/ End Contact Address -->
            </div>
        </div>
    </div>
</section>
<!--/ End Contact -->

<?php include '../partials/footer.php' ?>