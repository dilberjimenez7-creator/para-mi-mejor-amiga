document.addEventListener("DOMContentLoaded", () => {
    const boton = document.getElementById("miBoton");
    const mensaje = document.getElementById("mensaje");
    const contenedor = document.getElementById("contenedorImagen");

    boton.addEventListener("click", () => {
        mensaje.textContent = "QUE QUIERO MUCHO SARI!!!";
        mensaje.textContent = "“Gracias por ser una gran amiga, Sarita.Aunque a veces escondas lo que sientes para no mostrar tus heridas, siempre has estado ahí con una sonrisa, con tu paciencia y tu manera única de escuchar. Tu bondad y tu sinceridad hacen que quienes te rodeamos nos sintamos afortunados de tenerte cerca. No hace falta que lo digas todo; tu forma de ser ya habla por ti, y demuestra lo increíble persona que eres.” "
        
        const img = document.createElement("img");
        img.src = "https://media.tenor.com/T0RTUOjZcb4AAAAM/hug-love.gif";
        img.alt = "Imagen mostrada por el botón";
        img.style.width = "250px";
        img.style.marginTop = "10px";
        img.style.borderRadius = "10px";
        img.style.boxShadow = "0 4px 6px rgba(0,0,0,0.2)";

        contenedor.innerHTML = "";
        contenedor.appendChild(img);
    });
});
