
const state = () => ({
    all: [],
    productDetail:[]
})

const getters = {
    // allProduct: state => state.all
}

const actions = {
    async getAllProducts({ commit }){
        const response = await axios.get('/api/products')
        // console.log(response.data.data)
        if (response.status == 200) {
            commit('setProduct', response.data.data)
        }else{
            console.log(response.status)
        }
    },
    async getProductDetail({ commit },id){
        const response = await axios.get(`/api/products/${id}`)
        if(response.status == 200) {
            commit('setDetail', response.data.data)

        }else{
            console.log(response.status)
        }
    //    const productDetail = state.all.find((product) => product.id === id);
        

    }
}

const mutations = {
    setProduct(state, products) {
        state.all = products
    },
    setDetail(state, product) {
        state.productDetail = product
    }
}

export default{
    namespaced: true,
    state,
    getters,
    actions,
    mutations

}