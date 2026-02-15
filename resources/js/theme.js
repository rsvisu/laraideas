export function initThemeToggle() {
    // Determinamos el tema inicial
    const isDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
    let theme = localStorage.getItem("theme");
    if (!theme) {
        theme = isDarkMode ? "dark" : "light";
    }

    const themeSwitch = document.getElementById("themeSwitch");
    if (!themeSwitch) {
        return;
    }

    // Retiramos la animación al cargar para minimizar el efecto de que
    // justo se activa el toggle si la pagina esta en dark al cargar la pagina
    themeSwitch.style.transition = "none";

    // Sincronizamos el toogle con el tema
    themeSwitch.checked = theme === "dark";

    // Aplicamos el cambio de tema al cambiar el toogle
    themeSwitch.addEventListener("change", () => {
        themeSwitch.style.transition = null;
        let theme = themeSwitch.checked ? "dark" : "light";
        document.documentElement.setAttribute("data-theme", theme);
        localStorage.setItem("theme", theme);
    })

}
