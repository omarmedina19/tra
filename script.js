document.getElementById("registerForm").addEventListener("submit", function(event) {
    event.preventDefault();
    alert("¡Registro exitoso! Se ha aplicado el 10% de descuento.");
    window.location.href = "products.html"; // Redirige a la página de productos después de registrarse
});

document.getElementById("facebookLogin").addEventListener("click", function() {
    alert("Iniciando sesión con Facebook...");
    window.location.href = "products.html"; // Redirige a productos después del login
});
