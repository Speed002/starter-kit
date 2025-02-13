import './bootstrap';

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
// import { ZiggyVue } from 'ziggy';
// import { Ziggy } from './ziggy'; // This is where your route definitions are loaded
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/index.esm'
import { modal } from 'momentum-modal'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

const appName = import.meta.env.VITE_APP_NAME

createInertiaApp({
  title: (title) => `${title} - ${appName}`,
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(modal, {
          resolve: (name) => resolvePageComponent(`./Modals/${name}.vue`, import.meta.glob("./Modals/**/*.vue")),
        })
      .use(ZiggyVue, Ziggy)
      .mount(el)
  },
  progress: {
    color: '#4B5563',
  },
})
