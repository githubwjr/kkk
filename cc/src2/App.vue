<template>
  <div id="app">
  	<iheader>{{ IHeader }}</iheader>
    <!--<img src="./assets/logo.png">-->
    <router-view></router-view>
  </div>
</template>

<script>
	import Iheader from './components/header'
export default {
  name: 'app',
  components:
  	{
  		Iheader
  	}
}
</script>

<style>
/*#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}*/
</style>
