<template>
    <gmap-map
            :center="center"
            :zoom="7"
    >
        <gmap-marker
                v-for="m in markers"
                :position="m.position"
                :clickable="true"
                :draggable="true"
                @click="center=m.position"
        ></gmap-marker>
    </gmap-map>
</template>

<script>
    /////////////////////////////////////////
    // New in 0.4.0
    import * as VueGoogleMaps from 'vue2-google-maps';
    import Vue from 'vue';

    Vue.use(VueGoogleMaps, {
        load: {
            key: 'AIzaSyCl2kU_z6xAOhTlO5PQ7EgvUpkNF9Ebb8g',
            // libraries: 'places', //// If you need to use place input
        }
    });

    export default {
        data () {
            return {
                center: {lat: 10.0, lng: 10.0},
                markers: [{
                    position: {lat: 10.0, lng: 10.0}
                }, {
                    position: {lat: 11.0, lng: 11.0}
                }]
            }
        }
    }
</script>