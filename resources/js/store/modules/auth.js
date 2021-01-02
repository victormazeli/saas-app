const state = () => ({
    token: '',
    user: {},

})

const getters = {
    user: state => state.user,
    token: state => state.token
}

const actions = {
     login({state, commit}, form){
        axios.get('/sanctum/csrf-cookie').then(response => {
            form.post('/login').then(response => {
                console.log(response);

            }).catch((err) => {
                console.log(err);
            });
        });
    //    const data = await 
    //    console.log(data)
    //     commit('setToken', data.data.access_token)
    //     commit('setUserDetails', data.data.user)

    },

     register({state, commit}, form){
        // form.post('/register').then
        // const data = await 
        // console.log(data)
        //  commit('setToken', data.data.access_token)
        //  commit('setUserDetails', data.data.user)
 
     }


}

const mutations = {
    setToken:(state, token)=>{
        state.token = token
    },
    setUserDetails: (state, details)=>{
        state.user = details
    }
}

export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions
}