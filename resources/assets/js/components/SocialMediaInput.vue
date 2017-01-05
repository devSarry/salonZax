<template>
    <div class="row">
        <div class="form-group col-sm-4">
            <div class="input-group">
                <span class="input-group-addon"><i :class="faIcon"></i></span>
                <input type="text"
                       class="form-control"
                       :name="labelField"
                       :id="labelField"
                       placeholder="label"
                       :value="old_label"
                >
            </div>
        </div>
        <div class="form-group col-sm-8">
            <input type="text"
                   class="form-control"
                   :name="urlField"
                   :id="urlField"
                   placeholder="link"
                   :value="old_url"
            >
        </div>
    </div>
</template>

<script>

    export default{
        props: ['icon', 'name', 'url_field', 'old_url', 'old_label', 'errors'],
        data(){
            return {
                msg: 'hello vue'
            }
        },
        computed: {
            faIcon() {
                return 'fa ' + this.icon;
            },
            labelField() {
                return this.name + '_label'
            },
            urlField(){
                return this.name + '_url'
            }
        }

    }
</script>
