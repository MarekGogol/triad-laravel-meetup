<template>
    <div class="form-group">
        <label>{{ field.name }}</label>

        <input type="text" :name="field_key" :value="value" @keyup="onChange" placeholder="Wohoo,,, this is my first custom component field!!" class="form-control">

        <ul>
            <li>This is my first custom component for field <strong>{{ field.name }}</strong>, with <strong>{{ field.value || 'empty' }}</strong> value.</li>
            <li>Is this field required? <strong>{{ field.required ? 'Yes' : 'No' }}</strong></li>
            <li>For other field properties check <strong>field</strong> property</li>
        </ul>
    </div>
</template>

<script type="text/javascript">
export default {
    props : ['field_key', 'field', 'row'],

    data(){
        return {

        }
    },

    mounted(){
        console.log('Your field component is mounted!!', this.field_key, this.row, this.field);

        /*
         * You can watch actual field value, or other form fields in row variable
         */
        this.$watch('row.' + this.field_key, function(value){
            console.log(value);
        });
    },

    computed : {
        //Get input value
        value(){
            return this.field.value || this.field.default;
        },
    },

    methods : {
        //Update input value
        onChange(e){
            this.field.value = e.target.value;
        },
    }
}
</script>