//Muestra la Imagen en el formulario
function archivo(evt) {
    var files = evt.target.files; // FileList object

    // Obtenemos la imagen del campo "file".
    for (var i = 0, f; f = files[i]; i++) {
        //Solo admitimos imágenes.
        if (!f.type.match('image.*')) {
            continue;
        }
        var reader = new FileReader();
        reader.onload = (function (theFile) {
            return function (e) {
                // Insertamos la imagen
                document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result, '" title="', escape(theFile.name), ' "height=160px width=200px   border: 1px solid #000  margin: 10px 5px 0 0', '"/>'].join('');
             
            };
        })(f);
        reader.readAsDataURL(f);
    }
}

document.getElementById('files').addEventListener('change', archivo, false);