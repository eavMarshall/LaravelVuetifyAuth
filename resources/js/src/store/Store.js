import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const modules = {};

const importAll = r => r.keys().forEach(key => modules[key.split('/').pop().split('.')[0]] = r(key).default);

importAll(require.context('./modules/', true, /\.js$/i)); //dynamically import all modules

export default new Vuex.Store({
    modules: modules, // all modules in the ./modules folder
});
