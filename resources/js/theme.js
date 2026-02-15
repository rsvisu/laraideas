export function initThemeToggle() {
    const themeSwitch = document.getElementById("themeSwitch");

    // Retiramos la animación al cargar para minimizar el efecto de que
    // justo se activa el toggle si la pagina esta en dark al cargar la pagina
    themeSwitch.style.transition = "none";

    // Sincronizamos el toogle con el tema
    themeSwitch.checked = savedTheme === "dark";

    // Aplicamos el cambio de tema al cambiar el toogle
    themeSwitch.addEventListener("change", () => {
        themeSwitch.style.transition = null;
        let theme = themeSwitch.checked ? "dark" : "light";
        document.documentElement.setAttribute("data-theme", theme);
        localStorage.setItem("theme", theme);
    })

}
