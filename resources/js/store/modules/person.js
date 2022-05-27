const state = {
    person: null
}

const getters = {
    person: () => state.person
}



const actions = {
    getPerson({dispatch,commit,state}, id) {
        axios.get(`/api/people/${id}`)
            .then( res => {
                commit(`setPerson`, res.data.data)
            })
    },
}


const mutations = {
    setPerson(state, person) {
        state.person = person
    }
}



export default {
    state, mutations, getters, actions
}
