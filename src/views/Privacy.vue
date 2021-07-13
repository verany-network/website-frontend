<template>

  <main class="main-content">

    <!-- content area -->
    <section class="content-section">
      <div class="container">
        <div class="row gutters-y">
          <div class="col-lg-7 text-light">
            <div class="mb-6">
              <h3>Privacy Policy</h3>
              <p class="lead-1">Types of data processed:</p>
              <ul>
                <li>Inventory data (e.g., names, addresses).</li>
                <li>Contact details (e.g., e-mail, telephone numbers).</li>
                <li>Content data (e.g., text and chat entries, photographies, videos).</li>
                <li>Usage data (e.g., websites visited, interest in content, access times).</li>
                <li>Meta / communication data (e.g., device information, IP addresses).</li>
              </ul>
            </div>
          </div>
          <ContactOptions/>
        </div>
      </div>
    </section>
    <!-- /.content area -->

    <!-- content area -->
    <!--
    <div class="map_box">
      <div class="py-13" data-map="true" data-map-style="custom" data-lat="35.61030245" data-lng="140.11365268" data-marker-lat="35.61030245" data-marker-lng="140.11365268" data-marker-animation="drop" data-marker-title="Office" data-zoom="12"></div>
    </div>
    -->
    <!-- /.content area -->

  </main>
</template>
<script>
import ContactOptions from "../components/ContactOptions";
export default {
  components: {ContactOptions}
}
</script>