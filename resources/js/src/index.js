import 'core-js/es/symbol';
import Vue from 'vue';
import Vuex from 'vuex';
import router from '@/router';
import vuetify from '@/plugins/vuetify';
import store from '@/store/Store';
import App from '@/App.vue';
import {setPageDimensions} from '@/store/modules/Page';
import {setUser, resetUser} from '@/store/modules/User';
import FetchLibrary from "@/app/library/FetchLibrary";

Vue.use(Vuex);
Vue.config.productionTip = false;

const settWindowSize = () => store.commit(setPageDimensions, {height: window.innerHeight, width: window.innerWidth});
window.addEventListener('resize', settWindowSize);
settWindowSize();

FetchLibrary.getApi("/api/users/getAuthUser")
  .then(response => {
    if (response.status !== 200) {
      throw Error(response.status);
    }
    return response.json();
  })
  .then(json => store.commit(setUser, json))
  .catch(error => {
    console.error(error);
    store.commit(resetUser);
  });

new Vue({
  render: h => h(App),
  router,
  vuetify,
  store,
}).$mount('#app');
