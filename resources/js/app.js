/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
import IndexComponent from './components/index-view.vue';
import SliderComponent from './components/slider-component.vue';
import CommentsComponent from './components/comments-component.vue';


app.component('example-component', ExampleComponent);
app.component('index-component', IndexComponent);
app.component('slider-component', SliderComponent);
app.component('comments-component', CommentsComponent);

app.mount('#app');

