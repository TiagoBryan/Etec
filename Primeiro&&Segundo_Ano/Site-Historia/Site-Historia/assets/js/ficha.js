const inputFile = document.querySelector("#picture__input");
const pictureImage = document.querySelector(".picture__image");
const pictureImageTxt = "Choose an image";
pictureImage.innerHTML = pictureImageTxt;

inputFile.addEventListener("change", function (e) {
  const inputTarget = e.target;
  const file = inputTarget.files[0];

  if (file) {
    const reader = new FileReader();

    reader.addEventListener("load", function (e) {
      const readerTarget = e.target;

      const img = document.createElement("img");
      img.src = readerTarget.result;
      img.classList.add("picture__img");

      pictureImage.innerHTML = "";
      pictureImage.appendChild(img);
    });

    reader.readAsDataURL(file);
  } else {
    pictureImage.innerHTML = pictureImageTxt;
  }
});


function adicionarEscola() {
  var escolasContainer = document.getElementById('escolasContainer');

  var novaEscolaDiv = document.createElement('div');
  novaEscolaDiv.classList.add('escola');

  var novaEscolaLabel = document.createElement('label');
  novaEscolaLabel.textContent = 'Escola do Fundamental II:';
  
  var novaEscolaInput = document.createElement('input');
  novaEscolaInput.type = 'text';
  novaEscolaInput.name = 'escola[]';
  novaEscolaInput.required = true;

  var tipoEscolaLabel = document.createElement('label');
  tipoEscolaLabel.textContent = 'Tipo de escola:';
  
  var tipoEscolaSelect = document.createElement('select');
  tipoEscolaSelect.name = 'tipo[]';
  
  var opcaoPublica = document.createElement('option');
  opcaoPublica.value = 'publica';
  opcaoPublica.textContent = 'Pública';
  
  var opcaoParticular = document.createElement('option');
  opcaoParticular.value = 'particular';
  opcaoParticular.textContent = 'Particular';
  
  tipoEscolaSelect.appendChild(opcaoPublica);
  tipoEscolaSelect.appendChild(opcaoParticular);

  novaEscolaDiv.appendChild(novaEscolaLabel);
  novaEscolaDiv.appendChild(novaEscolaInput);
  novaEscolaDiv.appendChild(tipoEscolaLabel);
  novaEscolaDiv.appendChild(tipoEscolaSelect);

  escolasContainer.appendChild(novaEscolaDiv);
}






/*const btn_imp = document.getElementById("btn-imp")
btn_imp.addEventListener("click",(evt)=>{


    const conteudo = document.getElementById("capturar-impressao").innerHTML;
    

    let estilo = "<style>";
    estilo += "#picture__input{display:none}.teste2{display: flex;justify-content: space-between;}.teste{display: flex;justify-content: center;}.picture{width:150px;height:150px;aspect-ratio:16/9;background:#ddd;display:flex;align-items:center;justify-content:center;color:#aaa;border:2px solid currentcolor;cursor:pointer;font-family:sans-serif;transition:color 300ms ease-in-out,background 300ms ease-in-out;outline:none;overflow:hidden;border-radius:100%;font-size:15px}.picture:hover{color:#777;background:#ccc}.picture:active{border-color:turquoise;color:turquoise;background:#eee}.picture:focus{color:#777;background:#ccc;box-shadow:0 0 10px rgba(0,0,0,0.3)}.picture__img{width:150px;height:150px;border-radius:100%}h1{font-size:20px;color:#9A6B6B;font-weight:600}.area-form{background-color:#AB8B8B;border-radius:25px;width:70%;padding:0 100px}.area-tite-fi{background-color:#FDEEE7;width:35%;text-align:center;padding:15px;border-radius:10px}.tite-fi{font-size:35px;color:#4B3B33;font-family:'Darker Grotesque',sans-serif}.div-com-linha::after{content:'';display:block;border-bottom:6px solid #655656;margin-top:10px}";
    estilo += ".label{color:#FDEEE7;font-size:25px;font-family:'Darker Grotesque',sans-serif}.input{background-color:#D9D9D9;border-radius:10px;width:52%;height:35px;border:none}.input.formatacao{width:85%}.radio-form{width:25px}.irm{width:20%}.textarea{background-color:#D9D9D9;width: 52%;border-radius:10px;border:none}.final-form-cont{width:100%}.forma-text-fx{color:#9A6B6B;font-size:20px;font-weight:bold}";
    estilo += "</style>";

    const win = window.open('','', 'height=9000, width=1000');

    win.document.write('<html><head>');
    win.document.write('<title>Ficha Técnica</title>');
    win.document.write('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">');
    win.document.write('<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@400;700&display=swap">');
    win.document.write(estilo);
    win.document.write('</head>');
    win.document.write('<body>');
    win.document.write('<div class="teste">');
    win.document.write(conteudo);
    win.document.write('</div></body><html>');
   
   win.print();
   win.close();
    
})*/

function aoSelecionarInput (event) {
  const inputClicado = event.target
  var meuInput2 = document.getElementById("Pai");
  var meuInput3 = document.getElementById("mae");

  function removeSelecao () {
      inputClicado.checked = false
      meuInput2.disabled = false;
    meuInput3.disabled = false;
   
  }
  
  inputClicado.addEventListener('click', removeSelecao, { once: true })
}

function aoSelecionarInputDois (event) {
  const inputClicado = event.target

  var meuInput4 = document.getElementById("O-Pai");
  var meuInput5 = document.getElementById("O-mae");
  function removeSelecao () {
      inputClicado.checked = false
    meuInput4.disabled = false;
    meuInput5.disabled = false;
  }
  
  inputClicado.addEventListener('click', removeSelecao, { once: true })
}

function aoSelecionarInputTres (event) {
  const inputClicado = event.target

  var meuInput4 = document.getElementById("digt-fu");
 
  function removeSelecao () {
      inputClicado.checked = false
    meuInput4.disabled = false;

  }
  
  inputClicado.addEventListener('click', removeSelecao, { once: true })
}

function aoSelecionarInputQuatro (event) {
  const inputClicado = event.target

  var meuInput5 = document.getElementById("dig-reli");
  function removeSelecao () {
      inputClicado.checked = false
    meuInput5.disabled = false;
  }
  
  inputClicado.addEventListener('click', removeSelecao, { once: true })
}

function checkRadioButtonDois(clickedRadio) {
  var meuInput = document.getElementById("Nimr");
  
  // Verifica se o radio button clicado tem o ID "sFi"
  if (clickedRadio.id === "sFi" && clickedRadio.checked) {
    meuInput.disabled = true;
    meuInput.value = ""; 
  }else{
    meuInput.disabled = false;
  }
 
}

function checkRadioButton(clickedRadioDois) {

  var meuInput2 = document.getElementById("Pai");
  var meuInput3 = document.getElementById("mae");
  var meuInput4 = document.getElementById("O-Pai");
  var meuInput5 = document.getElementById("O-mae");
  var meuInput6 = document.getElementById("digt-fu");
  var meuInput7 = document.getElementById("dig-reli");

  if (clickedRadioDois.id === "nomeDosPais") {
    meuInput2.disabled = clickedRadioDois.checked;
    meuInput3.disabled = clickedRadioDois.checked;
      meuInput2.value = ""; 
      meuInput3.value = "";
  }
  if (clickedRadioDois.id === "orgigemDosPais") {
    meuInput4.disabled = clickedRadioDois.checked;
    meuInput5.disabled = clickedRadioDois.checked;
    meuInput4.value = ""; 
      meuInput5.value = "";
  }
  if (clickedRadioDois.id === "time-futsin") {
    meuInput6.disabled = clickedRadioDois.checked;
    meuInput6.value = ""; 
  }
  if (clickedRadioDois.id === "religiao") {
    meuInput7.disabled = clickedRadioDois.checked;
    meuInput7.value = ""; 
  }

  
}