<template>
    <div>
        <div v-if="isLoading" class="text-center">
            <div class="spinner-border text-info" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div v-if="!isLoading">
            <div v-if="tiktokData.length > 0">
                <div class="input-group search-input">
                    <form v-on:submit.prevent="getTiktokData()">
                        <input
                            type="text"
                            class="form-control"
                            v-on:input="hashtag = $event.target.value"
                            placeholder="Enter hastasg"
                        />
                    </form>
                </div>
                <div v-for="item in tiktokData" class="card mb-3">
                    <img
                        class="card-img-top"
                        :src="item.authorMeta.avatar"
                        alt="Card image cap"
                    />
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ item.authorMeta.nickName }} ❤️
                            {{ item.authorMeta.heart }}
                        </h5>
                        <p class="card-text">{{ item.text }}</p>
                        <p class="card-text">
                            <small class="text-muted"
                                >Updated at
                                {{
                                    currentDateStr(new Date(item.createTime))
                                }}</small
                            >
                        </p>
                    </div>
                </div>
            </div>
            <div v-if="tiktokData.length <= 0">
                <div class="input-group search-input">
                    <form v-on:submit.prevent="getTiktokData()">
                        <input
                            type="text"
                            class="form-control"
                            v-on:input="hashtag = $event.target.value"
                            placeholder="Enter hastasg"
                        />
                    </form>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">No data with this hashtag</h5>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import TiktokTrendingComponent from "./TiktokTrendingComponent";

export default {
    name: "TiktokTrendingComponent",
    data() {
        return {
            isLoading: true,
            tiktokData: {},
            hashtag: "travel"
        };
    },
    created() {
        this.getTiktokData();
    },
    methods: {
        getTiktokData() {
            this.isLoading = true;
            const options = {
                method: "GET",
                url: "https://tiktok28.p.rapidapi.com/hashtag/" + this.hashtag,
                headers: {
                    "x-rapidapi-key":
                        "76c5c9f1e0mshcaf921728d9c50cp1d349fjsn7e74d11e08ea",
                    "x-rapidapi-host": "tiktok28.p.rapidapi.com"
                }
            };
            axios
                .request(options)
                .then(response => {
                    this.isLoading = false;
                    this.tiktokData = response.data;
                    console.log(this.tiktokData);
                })
                .catch(function(error) {
                    console.error(error);
                });
        },
        currentDateStr(date) {
            var dd = String(date.getDate()).padStart(2, "0");
            var mm = String(date.getMonth() + 1).padStart(2, "0");
            // var yyyy = date.getFullYear();

            date = dd + "/" + mm + "/" + 2021;
            return date;
        }
    }
};
</script>

<style lang="scss" scoped>
.search-input {
    padding-bottom: 10px;
}
</style>
