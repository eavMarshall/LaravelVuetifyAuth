import UserModel from "@/app/model/UserModel";

const MODULE_NAME = 'User.';
export const setUser= MODULE_NAME + 'setUser';
export const resetUser= MODULE_NAME + 'resetUser';

export default {
  state: () => ({
    user: new UserModel(),
  }),
  mutations: {
    [setUser](state, userData) {
      state.user = new UserModel(userData);
    },
    [resetUser]() {
      state.user = new UserModel();
    }
  }
};
