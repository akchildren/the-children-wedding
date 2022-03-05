<!-- Contact-->
<section class="page-section" id="rsvp">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase mb-5">RSVP</h2>
            <h3 class="section-subheading text-muted mb-0">If you are able to attend the wedding, please use the RSVP form
                below to let us know :)</h3>
            <h3 class="section-subheading text-muted"
                style="
                        color: #d37b83 !important;
                        margin-bottom: 15px;">
                Please contact us for children's menu, vegan/vegetarian menu or if you have any food allergies.</h3>
        </div>
        <form id="contactForm" method="post" action="{{ route('contact') }}">
            @csrf
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="name" name="name" type="text" placeholder="Full Name *"
                               required="required" data-validation-required-message="Please enter your name."/>
                        @if ($errors->has('name'))
                            <p class="help-block text-danger">
                                {{ $errors->first('name') }}
                            </p>
                        @endif
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="email" name="email" type="email" placeholder="Email *"
                               required="required" data-validation-required-message="Please enter your email address."/>
                        @if ($errors->has('email'))
                            <p class="help-block text-danger">
                                {{ $errors->first('email') }}
                            </p>
                        @endif
                    </div>
                    <div class="form-group mb-md-0">
                        <input class="form-control" id="phone" name="phone" type="tel" placeholder="Phone *"
                               required="required" data-validation-required-message="Please enter your phone number."/>
                        @if ($errors->has('phone'))
                            <p class="help-block text-danger">
                                {{ $errors->first('phone') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea class="form-control" id="food" name="food" rows="3" placeholder="Food Selection"
                                  data-validation-required-message="Any allergies?"></textarea>
                        @if ($errors->has('food'))
                            <p class="help-block text-danger">
                                {{ $errors->first('food') }}
                            </p>
                        @endif
                    </div>
                    <div class="form-group form-group-textarea mb-md-0 mt-3">
                        <textarea class="form-control" id="message" name="message" rows="1"
                                  placeholder="Optional Message"
                                  data-validation-required-message="Any Questions?"></textarea>
                        @if ($errors->has('message'))
                            <p class="help-block text-danger">
                                {{ $errors->first('message') }}
                            </p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send
                    Message
                </button>
            </div>
        </form>
    </div>
</section>
