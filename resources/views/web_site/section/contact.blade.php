<section id="contact" class="contact section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
            <p>
                I am here to assist you with any questions or concerns. Whether you want to inquire about my services
                or need help with an issue, feel free to get in touch with me. Just fill out the form below, and we’ll respond as soon as possible.
            </p>
        </div>

        <div class="row">

            <div class="col-lg-4 col-md-4">
                <div class="contact-about">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1626.909741676568!2d90.43013682156469!3d23.737079325820336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b84021a27441%3A0xeb353a7f06a7ad40!2sBashabo%20Balur%20Math!5e0!3m2!1sen!2sbd!4v1727253978979!5m2!1sen!2sbd"
                            width="600"
                            height="450"
                            style="border: 0; width: 100%"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">>
                    </iframe>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="info">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-geo-alt"></i>
                        <p>Bashaboo<br>Shabujbagh, Dhaka-1214</p>
                    </div>

                    <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-envelope"></i>
                        <p>thorat.pwad03@gmail.com</p>
                    </div>

                    <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-phone"></i>
                        <p>+8801517123534</p>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-phone"></i>
                        <p>+8801322920575</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-5 col-md-8">
                    <form action="{{ route('maildata') }}" method="post" class="php-email-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="number" name="phone" class="form-control" id="phone" placeholder="Your Phone" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has landed safely in my inbox, like a gentle breeze on a sunny day. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</section>
