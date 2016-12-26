<template>
    <div>
        <div v-if="!image && !imageSrc" class="dropzone-area" @dragenter="hovering = true" @dragleave="hovering = false" :class="{'dropzone-hover': hovering}">
            <div class="dropzone-text">
                <span class="dropzone-title">Drop image here or click to select</span>
                <span class="dropzone-info" v-if="info">{{ info }}</span>
            </div>
            <input type="file" @change="onFileChange">
        </div>
        <div class="dropzone-preview " v-else>

            <img :src="image ? image : imageSrc" />
            <div class="dropzone-close" @click="removeImage">
                <button class="btn btn-danger">remove</button>
            </div>
        </div>
        <input type="hidden" name="image" :value="image">
    </div>

</template>

<script>
    export default {
        props: ['info', 'imageSrc'],

        created() {
            this.setImage();
        },
        data() {
            return {
                image: '',
                hovering: false
            }
        },
        methods: {
            onFileChange(e) {
                var files = e.target.files || e.dataTransfer.files;
                if (!files.length) return;
                this.createImage(files[0]);
            },
            createImage(file) {
                var image = new Image();
                var reader = new FileReader();
                var vm = this;
                reader.onload = (e) => {
                    vm.image = e.target.result;
                    vm.hovering = false;
                };
                reader.readAsDataURL(file);

            },
            removeImage: function (e) {
                this.image = '';
                this.imageSrc = '';
            },
            setImage: function () {
            }
        }
    };
</script>