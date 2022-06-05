var img = document.querySelector(".img");

img.addEventListener("mouseover", function() {

    var hide = document.querySelector("#titulof");

    titulof.classList.remove("block");

});

img.addEventListener("mouseout", function() {

    var hide = document.querySelector("#titulof");

    hide.classList.add("none");

});