<template>
    <div class="alert alert-success" role="alert">
        <strong>Success!</strong> {{ body }}
    </div>
</template>
 
<script>
    export default {
        props: ['message'],
 
        data() {
            return {
                body: this.message
            }
        }
    }
</script>