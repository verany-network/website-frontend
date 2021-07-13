<template>
  <div>
    <main class="main-content">
      <CarouselComponent :items="items"/>
      <TabCarouselComponent :items="tabItems"/>
      <LatestNewsSectionComponent/>
      <section class="section gs_features">
        <div class="row no-gutters">
          <div class="col-xl-6 py-6 px-4 px-sm-8 6 px-md-9 " data-overlay="7">
            <div class="row align-items-center h-100">
              <div class="col-sm-6 col-md-4 order-md-2 mb-6 mb-md-0">
                <figure class="position-relative my-0">
                  <div style="background-image: url('assets/img/content/cont/partnerLaby.png'); width: 280px;"
                       class="main-fb-product bp-c br-n">
                  </div>
                </figure>
              </div>
              <div class="col-md-8 order-md-1 text-light text-md-right">
                <h2 class="mb-4">LabyMod</h2>
                <p class="mb-7">Thanks to our closer collaboration with LabyMod, we are able to offer a customized
                  gaming experience for everyone.</p>
              </div>
            </div>
          </div>

          <div class="col-xl-6 py-6 px-4 px-sm-8 py-md-6 px-md-9 " data-overlay="7">
            <div class="row align-items-center h-100">
              <div class="col-sm-6 col-md-4 order-md-2 mb-6 mb-md-0">
                <figure class="position-relative my-0">
                  <div style="background-image: url('assets/img/content/cont/partnerCloudNet.png'); width: 280px;"
                       class="main-fb-product bp-c br-n">
                  </div>
                </figure>
              </div>
              <div class="col-md-8 order-md-1 text-light text-md-right">
                <h2 class="mb-4">CloudNet</h2>
                <p class="mb-7">Thanks to our closer collaboration with CloudNet, we are able to offer you a
                  high-performance music experience around the clock.</p>
              </div>
            </div>
          </div>

          <div class="row no-gutters"></div>
        </div>
      </section>
    </main>
  </div>
</template>
<script>
import LatestNewsSectionComponent from "../components/LatestNewsSectionComponent";
import CarouselComponent from "../components/CarouselComponent";
import TabCarouselComponent from "../components/TabCarouselComponent";

export default {
  data() {
    return {
      items: [
        {
          id: 0,
          name: 'TeamSpeak Release!',
          background: '../assets/img/content/carousel/home-slide_01.png',
          description: 'Come to our TeamSpeak to talk with your friends or to meet new friends!',
          leftButtonIcon: 'fab fa-teamspeak',
          rightButtonHref: 'ts3server://verany.net',
          rightButtonText: 'Join'
        },
        {
          id: 1,
          background: '../assets/img/content/carousel/home-slide_discord.png',
          name: 'Discord release!',
          description: 'Enter our Discord to participate in giveaways or to get in touch with our team.',
          leftButtonIcon: 'fab fa-discord',
          rightButtonHref: 'https://discord.gg/Yn9Ws9w6d5',
          rightButtonText: 'Join'
        },
        {
          id: 2,
          background: '../assets/img/content/carousel/home-slide_03.png',
          name: 'Follow us on Twitter',
          description: '',
          leftButtonIcon: 'fab fa-twitter',
          rightButtonHref: 'http://twitter.com/intent/user?screen_name=VeranyNET',
          rightButtonText: 'Follow'
        }
      ],
      tabItems: [
        {
          id: 0,
          name: 'Our Games',
          items: [
            {
              id: 0,
              imagelink: 'assets/img/content/cont/games/flagwars.png',
              clicklink: '#',
              type: 'more',
              name: 'FLAGWARS',
              text: 'If you enjoy games like BedWars and Tower Defense, you will love FlagWars.',
            },
            {
              id: 1,
              imagelink: 'assets/img/content/cont/games/snowwars.png',
              clicklink: '#',
              type: 'more',
              name: 'SNOWWARS',
              text: 'A snowball fight with up to 12 players: alone or in a team, fun is guaranteed.',
            },
            {
              id: 2,
              imagelink: 'assets/img/content/cont/games/duels.png',
              clicklink: '#',
              type: 'more',
              name: 'DUELS',
              text: 'From classic kit fights to sumo, oneline and SkyWars to personalized tournaments, everyone will find their luck in duels.',
            },
            {
              id: 3,
              imagelink: 'assets/img/content/cont/games/rpg.png',
              clicklink: '#',
              type: 'more',
              name: 'RPG',
              text: 'New quests every day, a breathtaking, living map with a comprehensive infrastructure.',
            },
          ]
        },
        {
          id: 1,
          name: 'Popular Store Items',
          items: [
            {
              id: 0,
              imagelink: 'assets/img/content/cont/store/rank-vip_lifetime.png',
              clicklink: '#',
              type: 'buy',
              name: 'VIP (LIFETIME)',
              price: '40,00 €',
            }
          ]
        }
      ],
    }
  },
  components: {TabCarouselComponent, CarouselComponent, LatestNewsSectionComponent}
}
</script>