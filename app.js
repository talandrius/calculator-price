const vm = Vue.createApp ({
    
    data() {
        return {
    proposition: 1,
        message13: "€ -  le tarif étant de 13 €/Unité",
		message16: "€ -  le tarif étant de 16 €/Unité",
		message10: "€ -  le tarif étant de 10 €/Unité",
        }
    },
computed: {
    // un accesseur (getter) calculé
    calcmin: function () {
      // `this` pointe sur l'instance vm
      return this.proposition * 16 + this.message16
         },
		calcmed: function () {
      // `this` pointe sur l'instance vm
      return this.proposition * 13 + this.message13
        },
		calcsup: function () {
      // `this` pointe sur l'instance vm
      return this.proposition * 10 + this.message10
        }
       
      
    }
		
    

}).mount('#app');