import Vue from 'vue'
import Router from 'vue-router'
import Ifooter from '@/components/footer'
import login from '@/components/login/login'
import index from '@/components/Index/index'
import Hello from '@/components/Hello'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Vue',
      component: Vue,
      children: [
        {path: 'footer',component: Ifooter}
      ],
    },
    {
    	path:'/login',
    	component:login
    },
    {
    	path:'/index',
    	component:index
    }
  ]
  
})
