<template>

  <main class="main-content" style="height: 100vh">

    <!-- content area -->
    <section class="content-section">
      <div class="container">
        <div class="row gutters-y">
          <div class="col-lg-7 text-light">
            <div class="mb-6">
              <h3>Contact Us</h3>
              <p class="lead-1">If you have any questions to the team that cannot be answered in the forum, please contact us using this contact form.</p>
            </div>
            <form data-form="contact_form" action="./../assets/php/contact-form.php" class="input-transparent" method="POST">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input class="form-control form-control-lg" type="text" name="name" placeholder="Your Name" required>
                </div>

                <div class="form-group col-md-6">
                  <input class="form-control form-control-lg" type="email" name="email" placeholder="Your Email Address" required>
                </div>
              </div>

              <div class="form-group">
                <input name="subject" type="text" class="form-control" placeholder="Subject" required>
              </div>

              <div class="form-group">
                <textarea class="form-control form-control-lg" rows="4" placeholder="Your Message" name="message" required></textarea>
              </div>
              <button class="btn btn-lg btn-warning" type="submit">Send it over</button>
            </form>
          </div>
          <ContactOptions/>
        </div>
      </div>
    </section>
    <!-- /.content area -->
  </main>
</template>
<script>
import ContactOptions from "../components/ContactOptions";
export default {
  components: {ContactOptions}
}
</script>