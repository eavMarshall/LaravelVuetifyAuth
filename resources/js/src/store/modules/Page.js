const MODULE_NAME = 'Page.';
export const setPageDimensions = MODULE_NAME + 'setPageDimensions';

export default {
    state: () => ({
        pageData: {
            width: 0,
            height: 0,
        },
    }),
    mutations: {
        [setPageDimensions](state, pageData) {
            state.pageData = pageData;
        },
    }
};
