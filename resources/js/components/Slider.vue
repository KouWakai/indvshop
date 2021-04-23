<template>
<div>
  <hooper style="height: 400px" :progress="true" :autoPlay="true" :playSpeed="4000">
    <slide>
      <img src="/IMG_0477.JPG" alt="">
    </slide>
    <slide>
      <img src="/IMG_0478.JPG" alt="">
    </slide>

    <hooper-pagination slot="hooper-addons"></hooper-pagination>
  </hooper>
  </div>
</template>

<script>
import {
    Hooper,
    Slide,
    Pagination as HooperPagination
    } from 'hooper';
import 'hooper/dist/hooper.css';

export default {
  components: {
    Hooper,
    Slide,
    HooperPagination
  }
};
</script>