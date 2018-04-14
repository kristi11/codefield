<template>
   <button class="btn btn-primary btn-block af" v-show="show">
       <strong>Success</strong> {{body}}
   </button>
</template>

<script>
    export default {
        props : ['message'],
       data(){
        return {
            body : '',
            show : false
        }
       },

       created(){
        if (this.message) {
        this.flash(this.message);
}
       window.events.$on('flash',message => {
        this.flash(message);
       });
       
       },

       methods:{
        flash(message){
            this.body = message;
            this.show = true;
            this.hide();
        },
        hide(){
             setTimeout(() => {
            this.show = false;
        }, 3000);
        }

       }
    }
</script>

<style>
    .af{
        position: fixed;
        right: 25px;
        bottom: 25px;
    }
</style>
