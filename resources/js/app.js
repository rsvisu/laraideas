import './bootstrap';

import Alpine from 'alpinejs';
import Swal from "sweetalert2";
import {initThemeToggle} from "./theme.js";

window.Swal=Swal;
window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", () => {
   initThemeToggle();
});
