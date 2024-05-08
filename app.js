const { createApp } = Vue

  createApp({
    data() {
      return {

        diskArray: [],

      }
    },
    methods: {
        fetchData(){
            //axios recuperiamo i dati
            axios.get('disks.json').then((res) => {
                this.diskArray = res.data.results
                console.log(res)
            })
        }
    },
    created() {
        this.fetchData()
    },
  }).mount('#app')
