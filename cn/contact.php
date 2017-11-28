<?php include '../partials/head.php' ?>

    <input type="text" value="contact" type="hidden" id="activeIdentifier" hidden>
 <!-- Contact -->
 <section class="contactSection">
    <div class="contactTopContainer">
        <div class="topText">
            <h1>联系我们</h1>
        </div>
    </div>
    <div class="contactContent">
        <h2>咨询事宜</h2>
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="form-group row">
                        <input class="col form-control form-control-lg" type="text" name="name" placeholder="你的名字">
                        <input class="col form-control form-control-lg ml-2" type="email" name="email" placeholder="你的邮箱">
                    </div>
                    <div class="form-group row">
                        <textarea class="col form-control form-control-lg" required name="message" placeholder="你的问题"></textarea>
                    </div>
                    <button type="submit" class="btn btn-shadow btn-md btn-simple btn-simple__blue">提交</button>
                </form>
            </div>
            <div class="col-md-12 contactInfo">
                <div class="row">
                    <div class="col-md-4">
                        <h6 class="text-uppercase">Address</h6>
                        <span>136-85 Roosevelt Ave. Flushing, N.Y. 11355</span>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-uppercase">Phone</h6>
                        <span>+1 646 XX5-29DF</span>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-uppercase">Email</h6>
                        <span><a href="mailto:qdonow@gmail.com">qdonow@gmail.com</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Contact -->

<?php include '../partials/footer.php' ?>