import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus'
 
Alpine.plugin(focus)

window.Alpine = Alpine;

Alpine.start();

function scrollTo(id) {
    document.getElementById(id).scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
}
