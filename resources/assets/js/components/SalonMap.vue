<template>
    <div>
        <gmap-map
                :center="position"
                map-type-id="roadmap"
                :zoom="15"
                :options="{styles: mapStyle, scrollwheel: false}"
                style="width: 100%; height: 400px"
                class="form-control"
        >
            <gmap-marker
                    :position="position"
                    :clickable="true"
                    :draggable="false"
            ></gmap-marker>
        </gmap-map>
    </div>
</template>

<script>
    export default{
        props: ['lat', 'long'],
        data(){
            return {
                position: {},
                mapStyle: [{
                    "stylers": [
                        {"saturation": -100}
                    ]
                }]
            }
        },
        created: function () {
            this.position = {lat: parseFloat(this.lat), lng: parseFloat(this.long)};
        },

    }
</script>
