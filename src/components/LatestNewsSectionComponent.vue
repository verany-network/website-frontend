<template>
  <section class="content-section text-light"
           style="background: linear-gradient(to bottom, #111931 0%, #0f131e 100%);">
    <div class="container">
      <header class="header text-left">
        <h2 class="mb-6">Latest News</h2>
      </header>
      <div class="row">
        <LatestNewsComponent
            imagehref="assets/img/content/news/application-phase.png"
            imagealt="News"
            headline="MOINSEN"
            date="30th Decemer 2020"
            type="Announcements"
            teaser="After a long preparation, we are now ready to take on more team members. If you would like to support us on our way and become part of our team, then apply now. "/>
        <LatestNewsComponent
            imagehref="assets/img/content/news/teamspeak-release.jpg"
            imagealt="News"
            headline="TeamSpeak release"
            type="Announcements"
            date="8th June 2020"
            teaser="Join our TeamSpeak to get support by our team and to talk with your friends or even find new people to talk with."
        />
        <LatestNewsComponent
            imagehref="assets/img/content/news/discord-release.jpg"
            imagealt="News"
            headline="Discord release!"
            type="Announcements"
            date="2th June 2020"
            teaser="Join our Discord to get the newest informations about Verany and to meet new people and make new friends."
        />
      </div>
    </div>
  </section>
</template>

<script>

import LatestNewsComponent from "../components/LatestNewsComponent";

export default {
  name: 'LatestNewsSectionComponent',
  components: {LatestNewsComponent}
}

</script>