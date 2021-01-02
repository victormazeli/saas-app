const state = () => ({
    orders: [],
    summary:[]

})

const getters = {

    orderSummary(state, getters, rootState){
        const now = new Date();
        return state.orders.filter((order) => order.customer.email === rootState.Auth.user.email && order.status.status === 'open' && order.created_at === now.toDateString());
       
    },
    
    
}

const actions = {
    
//fetch order where status equal to 1 or open and where equals current logged in user
// action to redirect to payement gateway after user has clicked pay button

async getOrders({ commit }){
    const response = await axios.get('/api/orders')
    
    if (response.status == 200 ) {
        // let now = new Date();
        // console.log(now.toDateString())
        commit('setOrders', response.data.data)
        
    }else{
        console.log(response.status)
    }
    
},

// resetSummary({ commit }){
//     commit('reset', { res:[] })
// }

}

const mutations = {
    setOrders(state, order){
        state.orders = order
    },
    // setSummary(state, sum){
    //     state.summary = sum
    // },
    // reset(state, { res }){
    //     state.summary = res
    // }
  
}

export default{
    namespaced: true,
    state,
    getters,
    mutations,
    actions
}