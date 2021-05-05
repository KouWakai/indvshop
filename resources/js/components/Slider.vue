<template>
<div>
  <hooper style="height: 45vh" :progress="true" :autoPlay="true" :playSpeed="4000">
    <slide>
      <img class="img" :src="imgsrc_1" alt="">
    </slide>
    <slide>
      <img class="img" :src="imgsrc_2" alt="">
    </slide>

    <hooper-navigation slot="hooper-addons"></hooper-navigation>
  </hooper>
  </div>
</template>

<script>
import 'hooper/dist/hooper.css';
import './../../css/slider.css';

import {
    Hooper,
    Slide,
    Navigation as HooperNavigation
    } from 'hooper';

export default {
    props: ['topimg1', 'topimg2'],
  components: {
    Hooper,
    Slide,
    HooperNavigation
  },
  data (){
      return {
          imgsrc_1: this.topimg1,
          imgsrc_2: this.topimg2
      }
  }
};
</script>