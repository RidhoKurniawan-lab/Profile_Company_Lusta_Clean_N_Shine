<?php ob_start(); ?>

<section class="py-5 bg-white" id="contact">
    <div class="container pt-5">
        <div class="row align-items-center g-5 pt-5">
            <div class="col-12 col-md-6 text-center text-md-start">
                <h2 class="fw-bold mb-3">Get in Touch</h2>
                <p class="text-muted mb-4">
                    We’d love to hear from you! Feel free to contact us through the form beside or via the following social media.
                </p>
                <div class="d-flex justify-content-center justify-content-md-start gap-3">
                    <a href="#" class="text-dark fs-4"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-dark fs-4"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-dark fs-4"><i class="bi bi-whatsapp"></i></a>
                    <a href="#" class="text-dark fs-4"><i class="bi bi-envelope"></i></a>
                </div>
                <div class="mt-4">
                    <p class="mb-1"><i class="bi bi-geo-alt-fill text-warning me-2"></i>Jalan Jepun Pipil,
                        Denpasar Bali</p>
                    <p class="mb-1"><i class="bi bi-telephone-fill text-warning me-2"></i>+62 800 000 0000</p>
                    <p class="mb-0"><i class="bi bi-envelope-fill text-warning me-2"></i>lusta@gmail.com.id</p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card border-0 shadow-lg p-4 rounded-4">
                    <h4 class="fw-semibold mb-3 text-center">Contact Form</h4>
                    <form id="formContact">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your name">
                            <p id="validasi-name" class="ps-2 text-danger hidden"></p>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="example@email.com">
                            <p id="validasi-email" class="ps-2 text-danger hidden"></p>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label fw-semibold">Message</label>
                            <textarea name="message" class="form-control" id="message" rows="4"
                                placeholder="Write your message here..."></textarea>
                            <p id="validasi-message" class="ps-2 text-danger hidden"></p>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-warning px-5 rounded-pill fw-semibold">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean();
include '../app/views/layout/main.php'; ?>