<template>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <TiktokTrendingComponent></TiktokTrendingComponent>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from "axios";
    import TiktokTrendingComponent from './TiktokTrendingComponent';

    export default {
        components: {
            TiktokTrendingComponent,
        },
        mounted() {
        },
    }
</script>
