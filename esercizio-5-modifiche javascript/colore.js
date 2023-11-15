function colora(idElemento, classeColore){
    let elemento = document.getElementsByTagName(idElemento);
    elemento.classList.add(classeColore);
}

function reset(){
    document.getElementsByTagName('elemento').classList.remove('giallo');
}

function resetByFor(){
    let elements = document.getElementsByTagName("td");
    for ( let i=0; i < elements.length; i++){
        let element = elements[i];
        element.classList.remove("giallo");
    }
}

function resetByForEach(){
    let elements = document.getElementsByTagName("td");
    Array.from(elements).forEach(function(element){
        element.classList.remove("giallo");
    });
}


let button1 = document.getElementById("button1");
let button2 = document.getElementById("button2");


button1.addEventListener("click", function(){
    colora('td', 'giallo');
});

button2.addEventListener("click", function(){
    colora('paragrafo2', 'verde');
});



