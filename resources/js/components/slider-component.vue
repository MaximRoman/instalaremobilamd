<template>
    <div class="slider" style="padding-top: 40px; padding-bottom: 40px;">
        <h1 style="text-align: center; margin-bottom: 40px;">Iată unele din montările noastre:</h1>
        <div class="slider-container">
            <div class="slider-wrapper" id="slider-wrapper">
                <div class="slider-component" v-for="item in images"> 
                    <div class="slider-image-container" :style="'background-image: url(' + item.url + ')'">
                        <img class="slider-image" :src="item.url" alt="" style="height: 300px; visibility: hidden;"> 
                    </div>        
                </div>
            </div>  
        </div>      
    </div>
</template>
<script>
import axios from 'axios';

    export default {
        data() {
            return {
                images: [],
                wrapper: undefined,
                pressed: false,
                startX: 0,
            }
        },  
        mounted() {
            this.wrapper = document.getElementById('slider-wrapper');
            this.getImages();
            this.wrapper.addEventListener('mousedown', (e) => {
                this.pressed = true;
                this.startX = e.clientX;
                this.wrapper.style.cursor = 'grabbing';
                console.log(this.startX);
            });
            this.wrapper.addEventListener('mouseleave', (e) => {
                this.pressed = false;
            });
            window.addEventListener('mouseup', (e) => {
                this.pressed = false;
                this.wrapper.style.cursor = 'grab';
            });
            this.wrapper.addEventListener('mousemove', (e) => {
                if (!this.pressed) {
                    return
                }

                this.wrapper.scrollLeft += this.startX - e.clientX
            });
        },
        methods: {
            async getImages() {
                await axios.get('/get-images').then((result) => {
                    this.images = result.data.images;
                }).catch((err) => {
                    console.log(err);
                });
            }
        }
    }
</script>
<style lang="scss">
    .slider-container {
        padding: 0;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .slider-wrapper {
        display: flex;
        gap: 20px;
        width: 100%;
        height: 400px;
        overflow-x: auto;
        scroll-snap-type: x;
        cursor: grab;
        scroll-behavior: smooth;
        scrollbar-width: none;
    }
    .slider-wrapper::-webkit-scrollbar {
        display: none;
    }
    .slider-component {
        height: 100%;
        aspect-ratio: 1 / 1;
        display: flex;
        align-items: center;
        justify-content: center;
        scroll-snap-align: start;
        user-select: none;
    }
    .slider-image-container {
        box-sizing: border-box;
        height: 300px;
        width: fit-content;
        overflow: none;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>