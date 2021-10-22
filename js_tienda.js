;

function sumaCarrito() {
    document.querySelector("#labelCarrito").innerHTML = (parseInt(document.querySelector("#labelCarrito").innerHTML) + 1);

}

function restaCarrito() {
    if ( document.querySelector("#labelCarrito").innerHTML<=0 ){

        document.querySelector("#labelCarrito").innerHTML=0;
    } else {
    document.querySelector("#labelCarrito").innerHTML = (parseInt(document.querySelector("#labelCarrito").innerHTML) - 1);
}
}