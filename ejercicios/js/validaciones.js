/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


//Funcion en tiempo real para bloquear el ingreso de caracteres diferentes a numeros
function solo_numero(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if ((tecla==8)||(tecla==9)||(tecla==10)||(tecla==11)||(tecla==0)) return true; // 3
    if (e.ctrlKey && tecla==86) { return true }; //Ctrl v
    if (e.ctrlKey && tecla==67) { return true }; //Ctrl c
    if (e.ctrlKey && tecla==88) { return true }; //Ctrl x
    patron =/[0-9\s]/; // 4
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
}

//Funcion en tiempo real para bloquear el ingreso de caracteres diferentes a numeros y puntos "."
function solo_numero_2(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if ((tecla==8)||(tecla==9)||(tecla==10)||(tecla==11)||(tecla==0)) return true; // 3
    patron =/[0-9.\s]/; // 4
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
}
function solo_numero_dec(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if ((tecla==8)||(tecla==9)||(tecla==10)||(tecla==11)||(tecla==0)) return true; // 3
    patron =/[0-9,\s]/; // 4
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
}

//Funcion en tiempo real para bloquear el ingreso de caracteres diferentes a numeros y barras "/"
function numero_barra(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if ((tecla==8)||(tecla==9)||(tecla==10)||(tecla==11)||(tecla==0)) return true; // 3
    patron =/[0-9-\/\s]/; // 4
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
}

//Funcion en tiempo real para bloquear el ingreso de caracteres diferentes a letras de la a-z
function solo_letras(e) { // 1
tecla = (document.all) ? e.keyCode : e.which; // 2
if ((tecla==8)||(tecla==9)||(tecla==10)||(tecla==11)||(tecla==0)) return true; // 3
patron =/^[a-zA-Z\s\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+$/; // 4
te = String.fromCharCode(tecla); // 5
return patron.test(te); // 6
}
////////////////////////////////////