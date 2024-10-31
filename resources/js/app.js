import { createApp } from 'vue'
import Button from './components/ui/button/Button.vue'
import Skeleton from './components/ui/skeleton/Skeleton.vue'
import '../css/app.css'
import HeaderPage from './components/header-page/HeaderPage.vue'


const app = createApp()

app.component('header-page', HeaderPage)
    .component('app-button', Button)
    .component('app-skeleton', Skeleton)

app.mount('#app')
