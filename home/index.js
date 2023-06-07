//este codigo se ejecuta hasta que haya cargado toda la pagina

setTimeout(() => {
    console.log("Delayed for 1 second.");
    window.scrollTo(0, 0);
}, "1000");

window.onload = function () {

    console.log("Hola mundo");
    window.scrollTo(0, document.body.scrollHeight);
};