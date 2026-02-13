import './bootstrap';

import Alpine from 'alpinejs';
import {initThemeToggle} from "./theme.js";

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", () => {
   initThemeToggle();
});
