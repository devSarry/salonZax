<template>
    <div>

        <div class="form-group">
            <label for="address">Address</label>
            <gmap-autocomplete
                    :value="dbLocation"
                    class="form-control"
                    :types="types"
                    id="address"
                    @place_changed="setPlace"

            >
            </gmap-autocomplete>
        </div>

        <div class="form-group map-container">
            <gmap-map
                    :center="position"
                    map-type-id="roadmap"
                    :zoom="15"
                    style="width: 100%; height: 100%"
                    class="form-control"
            >

                <gmap-marker
                        :position="position"
                        :clickable="true"
                        :draggable="false"
                ></gmap-marker>
            </gmap-map>
        </div>

        <input type="hidden" name="location" :value="formData">

    </div>
</template>

<style>
    .map-container {
        width: 100%;
        height: 300px;
    }
</style>

<script>
    import * as VueGoogleMaps from 'vue2-google-maps';
    export default{
        props: ['dbLocation', 'lat', 'lng'],
        data(){
            return {
                types: ['address'],
                view: {},
                place: {},
                position: {},
                formData: {}
            }
        },
        created: function () {
            this.position = {lat: parseFloat(this.lat), lng: parseFloat(this.lng)};
        },
        methods: {
            setPlace(place) {
                this.place = place;
                this.position = {
                    lat: place.geometry.location.lat(),
                    lng: place.geometry.location.lng(),
                };

                this.formatData();
            },
            formatData() {
                let address = this.place.address_components;
                let data = {
                    formated_address: this.place.formatted_address,
                    wrapped_address: this.place.adr_address,
                    street_number: address[0].short_name,
                    route: address[1].short_name,
                    locality: address[2].long_name,
                    country: address[4].long_name,
                    postal_code: address[5].long_name,
                    lat: this.position.lat,
                    long: this.position.lng
                };
                this.formData = JSON.stringify(data);
                console.log(this.formData);
            }
        }
    }
</script>
