<template>
    <div>
        <gmap-map
                :center="center"
                map-type-id="roadmap"
                :zoom="15"
                :options="{styles: mapStyle, scrollwheel: false}"
                style="width: 100%; height: 400px"
                class="form-control"
        >
            <gmap-marker
                    :key="index"
                    v-for="(m, index) in markers"
                    :position="m.position"
                    :clickable="true"
                    :draggable="false"
                    @click="center=m.position"
            ></gmap-marker>

        </gmap-map>
    </div>
</template>

<script>
    export default{
        props: ['lat', 'long', 'secondLat', 'secondLong'],
        data(){
            return {
                markers: [],
                center: {},
                mapStyle: [{
                    "stylers": [
                        {"saturation": -100}
                    ]
                }]
            }
        },
        created: function () {
            this.center = {lat: parseFloat(this.lat), lng: parseFloat(this.long)};
            this.markers.push({position: {lat: parseFloat(this.lat), lng: parseFloat(this.long)}});
            this.markers.push({position: {lat: parseFloat(this.secondLat), lng: parseFloat(this.secondLong)}});

            console.log(this.secondLong)
        },

    }
</script>
