export function initThemeToggle() {
    // Determinamos el tema inicial
    const isDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
    let savedTheme = localStorage.getItem("theme");
    if (!savedTheme) {
        savedTheme = isDarkMode ? "dark" : "light";
    }

    // Aplicamos el tema
    document.documentElement.setAttribute("data-theme", savedTheme);

    const themeSwitch = document.getElementById("themeSwitch");
    if (!themeSwitch) return;

    // Sincronizamos el toogle con el tema
    themeSwitch.checked = savedTheme === "dark";

    // Aplicamos el cambio de tema al cambiar el toogle
    themeSwitch.addEventListener("change", () => {
        let theme = themeSwitch.checked ? "dark" : "light";
        document.documentElement.setAttribute("data-theme", theme);
        localStorage.setItem("theme", theme);
    })

}
