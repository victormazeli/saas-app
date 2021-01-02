import Axios from "axios"

const state = () => ({
    items: [],
    itemCount: 0,
})

const getters = {
    cartProducts: (state, getters, rootState)=>{
        // console.log(rootState.product)
        return state.items.map(({id, quantity}) =>{
            const product = rootState.Product.all.find(product => product.id == id)
            return {
                id: product.id,
                image: product.image,
                title: product.name,
                price: product.price,
                quantity
            }
        })
    },

    cartTotalPrice: (state, getters) =>{
        return getters.cartProducts.reduce((total, product) =>{
            return total + product.price * product.quantity
        }, 0)
    }
    
}

const actions = {
    addProductToCart({state, commit}, product){
        //rember to increment product sales when executing this function
        const cartItem = state.items.find(item => item.id === product.id)
        if (!cartItem) {
            commit('pushProductToCart', {id: product.id})
            commit('increment')
        }else{
            commit('incrementItemQuantity', cartItem)
        }
    },
    checkout({state, commit, getters, rootState}, products){
        const savedCartItems = [...state.items]
        // console.log(products)
        //add user details here
        let data = {
            // 'user_id': rootState.Auth.user.id,
            'order_status_id': 1,
            'totalcost': getters.cartTotalPrice
        }
        Axios.post('/api/orders', data)
        .then(response => {
            console.log(response.data)
            commit('setCartItems', {items:[]})
            commit('setItemCount', {items:0})
            for (let index = 0; index < products.length; index++)  {
                // console.log(products[index])
                const element = {
                    'order_id':response.data.data.id,
                    'product_id':products[index].id,
                    'quantity':products[index].quantity,
                    
                };
                // console.log(element);
                Axios.post('/api/orderitems', element)
                .catch((error)=> console.log(error))
                
            }
    
        }).catch((error) => console.log(error))
       
        // for (let index = 0; index < products.length; index++) {
        //     const element = {
        //         'product':products[index].id,
        //         'quantity':products[index].quantity
        //     };
        //     Axios.post('/api/cartitems', element)
        //     .catch((error)=> console.log(error))
            
        // }
    


    },
    removeItemFormCart({state, commit}, id){
        const cartItem = state.items.filter((item) => item.id !==id);
        commit('resetItems', cartItem);
        commit('decrement');

        // const cartItemIndex = cartItem.indexOf(id);
        // if (cartItemIndex > -1) {
        //     cartItem.splice(cartItemIndex, 1);
        //     commit('resetItems', cartItem);
        // }
    }

}

const mutations = {
    increment: state => state.itemCount++,
    decrement: state => state.itemCount--,
    pushProductToCart: (state, {id}) => {
        state.items.push({
            id,
            quantity: 1
        })
    },
    incrementItemQuantity: (state, { id }) => {
        const cartItem = state.items.find(item => item.id === id)
        cartItem.quantity++
      },
      setCartItems (state, { items }) {
        state.items = items
      },
      setItemCount(state, { items }){
        state.itemCount = items
      },
      resetItems(state, items){
          state.items = items
      }
}

export default{
    namespaced: true,
    state,
    getters,
    actions,
    mutations

}