<template>
<div>
  <hooper style="height: 45vh" :progress="true" :autoPlay="true" :playSpeed="4000">
    <slide>
      <img class="img" :src="imgsrc_1" alt="">
    </slide>
    <slide>
      <img class="img" :src="imgsrc_2" alt="">
    </slide>

    <!-- <hooper-pagination slot="hooper-addons"></hooper-pagination>   -->
  </hooper>
  </div>
</template>

<script>
import 'hooper/dist/hooper.css';
import './../../css/slider.css';

import {
    Hooper,
    Slide,
    Pagination as HooperPagination
    } from 'hooper';

export default {
    props: ['topimg1', 'topimg2'],
  components: {
    Hooper,
    Slide,
    //HooperPagination
  },
  data (){
      return {
          imgsrc_1: this.topimg1,
          imgsrc_2: this.topimg2
      }
  }
};
</script>