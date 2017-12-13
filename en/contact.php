<?php include '../partials/head_en.php' ?>

    <input type="text" value="contact" type="hidden" id="activeIdentifier" hidden>
 <!-- Contact -->
 <section class="contactSection">
    <div class="contactTopContainer">
        <div class="topText">
            <h1>Contact Us</h1>
        </div>
    </div>
    <div class="contactContent">
        <h2>Inquiries</h2>
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="form-group row">
                        <input class="col form-control form-control-lg" type="text" name="name" placeholder="Your Name">
                        <input class="col form-control form-control-lg ml-2" type="email" name="email" placeholder="Your Email">
                    </div>
                    <div class="form-group row">
                        <textarea class="col form-control form-control-lg"  name="message" placeholder="Your Question"></textarea>
                    </div>
                    <button type="submit" class="btn btn-shadow btn-md btn-simple btn-simple__blue">Submit</button>
                </form>
            </div>
            <div class="col-md-12 contactInfo">
                <div class="row">
                    <div class="col-md-4">
                        <h6 class="text-uppercase">Address</h6>
                        <span>136-21 Roosevelt Ave. Flushing, N.Y. 11355</span>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-uppercase">Phone</h6>
                        <span>+1 646-288-3191</span>
                        <br>
                        <span>+1 479-970-4683</span>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-uppercase">Email</h6>
                        <span><a href="mailto:pomelo31218@gmail.com">pomelo31218@gmail.com</a></span>
                        <span><a href="mailto:pomelo31218@hotmail.com">pomelo31218@hotmail.com</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--/ End Contact -->

<?php include '../partials/footer_en.php' ?>
<script>
    $('form').submit((e) => {
        e.preventDefault();
        alert('邮件已发送，感谢您的联系！')
    })
</script>