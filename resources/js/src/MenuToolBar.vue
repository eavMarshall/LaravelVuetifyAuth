<template>
  <v-app id="inspire">

    <v-app-bar
        app
        clipped-right
    >
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
      <v-toolbar-title>{{!isDraw ? title : ''}}</v-toolbar-title>
      <v-spacer></v-spacer>

      <v-btn icon>
        <v-icon>mdi-magnify</v-icon>
      </v-btn>

      <v-btn icon>
        <v-icon>mdi-heart</v-icon>
      </v-btn>

      <v-btn icon>
        <v-icon>mdi-dots-vertical</v-icon>
      </v-btn>
    </v-app-bar>

    <v-navigation-drawer
        v-model="drawer"
        app
    >
      <v-list-item>
        <v-list-item-content>
          <v-list-item-title class="title">
            {{isDraw ? title : ''}}
          </v-list-item-title>
          <v-list-item-subtitle>
            Webpack, Vue, Vueify and more
          </v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>

      <v-divider></v-divider>
      <v-list
          nav
      >
        <div v-for="menuGroup in listGroups">
          <v-list-group
              v-if="menuGroup.grouped"
              :key="menuGroup.name"
              prepend-icon="mdi-book-open-page-variant"
              value="false"
              v-model="menuGroup.isOpen"
          >
            <template v-slot:activator>
              <v-list-item-title>{{menuGroup.name}}</v-list-item-title>
            </template>
            <v-list-item
                v-for="item in menuGroup.items"
                :key="item.title"
                link
                :to="item.to"
            >
              <v-list-item-content class="sub-menu-icon">
                <v-list-item-title>{{ item.title }}</v-list-item-title>
              </v-list-item-content>
            </v-list-item>
          </v-list-group>
          <v-list-item
              v-if="!menuGroup.grouped"
              v-for="item in menuGroup.items"
              :key="item.title"
              link
              :to="item.to"
          >
            <v-list-item-icon>
              <v-icon v-text="item.icon"></v-icon>
            </v-list-item-icon>

            <v-list-item-content>
              <v-list-item-title>{{ item.title }}</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </div>
      </v-list>
    </v-navigation-drawer>

    <v-main>
      <v-container>
        <router-view></router-view>
      </v-container>
    </v-main>

    <v-footer
        app
    >
      <span>Vuetify</span>
      <v-spacer></v-spacer>
      <span>&copy; {{ new Date().getFullYear() }}</span>
    </v-footer>
  </v-app>
</template>

<script>
import '@/sass/main.scss';

export default {
  name: "MenuToolBar",
  props: {
    source: String,
  },
  data: () => ({
    title: 'Vuetifyjs starter',
    listGroups: [
      {
        name: 'page 1-3',
        grouped: true,
        isOpen: true,
        items: [
          { title: 'Page1', icon: 'mdi-view-dashboard', to:"/app/page1" },
          { title: 'Page2', icon: 'mdi-image', to:"/app/page2" },
          { title: 'Page3', icon: 'mdi-help-box', to:"/app/page3" },
        ],
      },
      {
        name: 'page 4-5',
        grouped: true,
        isOpen: false,
        items: [
          { title: 'Page4', icon: 'mdi-coffee', to:"/app/page4" },
          { title: 'Page5', icon: 'mdi-google-controller', to:"/app/page5" },
        ],
      },
      {
        name: 'page 6-?',
        grouped: false,
        isOpen: false,
        items: [
          { title: 'Page6', icon: 'mdi-coffee', to:"/app/page6" },
          { title: 'Settings', icon: 'mdi-wrench', to:"/app/settings" },
        ],
      }
    ],
    drawer: null,
    drawerRight: null,
    right: false,
    left: false,
  }),
  computed: {
    isDraw() { return this.drawer; },
  }
}
</script>

<style scoped style="scss">
  .sub-menu-icon {
    padding-left: 56px;
  }
  .v-application a {
    color: var(--v-primary-base)!important;
  }
</style>
