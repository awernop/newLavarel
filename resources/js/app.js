import './bootstrap';
import './statusColor.js';
import Alpine from 'alpinejs';
import mask from '@alpinejs/mask'
import 'flowbite';
import.meta.glob([
      '../images/**',
   ]);

window.Alpine = Alpine;
Alpine.plugin(mask);

Alpine.start();
