const userTheme = localStorage.getItem("theme");
const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;
// initial Theme check
const themeCheck = () => {
if(userTheme === "dark" || (!userTheme && systemTheme)){
    document.documentElement.classList.add('dark');
    return;

}else {
    document.documentElement.classList.remove('dark');
    return;
}

};

// manual Theme Switch
const themeSwitch = () => {
if(document.documentElement.classList.contains("dark")){
    document.documentElement.classList.remove("dark");
    localStorage.setItem("theme","light");

    return;
}
document.documentElement.classList.add("dark");
localStorage.setItem("theme","dark");

}
themeCheck();