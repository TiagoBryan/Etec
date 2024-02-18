function exibirCartas() {
    const cartasContainer = document.getElementById('cartasContainer');
    cartasContainer.innerHTML = '';
  
    // Recupere todos os baralhos do localStorage
    const baralhosSalvos = JSON.parse(localStorage.getItem('baralhos')) || [];
  
    // Itere sobre cada baralho e exiba suas cartas
    baralhosSalvos.forEach(baralho => {
      cartasContainer.innerHTML += `<h3>${baralho.nome}</h3>`;
      
      if (baralho.cartas.length === 0) {
        cartasContainer.innerHTML += '<p>Este baralho não contém cartas.</p>';
      } else {
        baralho.cartas.forEach((carta, index) => {
          cartasContainer.innerHTML += `<p><strong>Pergunta ${index + 1}:</strong> ${carta.pergunta}<br><strong>Resposta:</strong> ${carta.resposta}</p>`;
        });
      }
    });
  }

function limparDados() {
    localStorage.removeItem('baralhos');
    alert('Todos os baralhos e cartas foram removidos.');
  }

function criarBaralho() {
    const nomeBaralho = prompt("Digite o nome do baralho:");
    if (!nomeBaralho) return;
  
    const baralho = { nome: nomeBaralho, cartas: [] };
  
    // Verifica se já existem baralhos salvos no localStorage
    const baralhosSalvos = JSON.parse(localStorage.getItem('baralhos')) || [];
  
    // Adiciona o novo baralho à lista de baralhos
    baralhosSalvos.push(baralho);
  
    // Salva a lista atualizada de baralhos no localStorage
    localStorage.setItem('baralhos', JSON.stringify(baralhosSalvos));
  
    alert('Baralho criado com sucesso!');
  }
  
  function exibirBaralhosParaAdicionarCarta() {
    const baralhosSalvos = JSON.parse(localStorage.getItem('baralhos')) || [];
  
    if (baralhosSalvos.length === 0) {
      alert('Crie pelo menos um baralho antes de adicionar cartas.');
      return;
    }
  
    const opcoesBaralhos = baralhosSalvos.map((baralho, index) => `${index + 1}. ${baralho.nome}`).join('\n');
    const escolhaBaralho = prompt(`Escolha um baralho para adicionar carta(pelo índice):\n${opcoesBaralhos}`);
  
    const indexEscolhido = parseInt(escolhaBaralho) - 1;
  
    if (isNaN(indexEscolhido) || indexEscolhido < 0 || indexEscolhido >= baralhosSalvos.length) {
      alert('Escolha de baralho inválida.');
      return;
    }
  
    const baralhoEscolhido = baralhosSalvos[indexEscolhido];
    adicionarCarta(baralhoEscolhido);
  }
  
  function adicionarCarta(baralho) {
    console.log('Função adicionarCarta chamada para o baralho:', baralho);
    const pergunta = document.getElementById('area-pergunta').value;
    const resposta = document.getElementById('area-resposta').value;
  
    if (pergunta && resposta) {
      // Certifica-se de que a propriedade 'cartas' existe no objeto baralho
      baralho.cartas = baralho.cartas || [];
  
      const carta = { pergunta, resposta };
      baralho.cartas.push(carta);
  
      // Atualiza os baralhos salvos no localStorage
      const baralhosSalvos = JSON.parse(localStorage.getItem('baralhos')) || [];
      const indiceBaralho = baralhosSalvos.findIndex(b => b.nome === baralho.nome);
  
      if (indiceBaralho !== -1) {
        // Atualiza apenas o baralho específico no array de baralhos
        baralhosSalvos[indiceBaralho] = baralho;
  
        // Salva a lista atualizada de baralhos no localStorage
        localStorage.setItem('baralhos', JSON.stringify(baralhosSalvos));
  
        alert('Carta adicionada com sucesso!');
        const removeP = document.getElementById('area-pergunta');
        const RemovC = document.getElementById('area-resposta');
        removeP.value = "";
        RemovC.value = "";
      } else {
        alert('Erro ao adicionar carta. Baralho não encontrado.');
      }
    }
  }
  
  function praticar() {
    const baralhosSalvos = JSON.parse(localStorage.getItem('baralhos')) || [];
  
    if (baralhosSalvos.length === 0) {
      alert('Crie pelo menos um baralho antes de praticar.');
      return;
    }
  
    const opcoesBaralhos = baralhosSalvos.map((baralho, index) => `${index + 1}. ${baralho.nome}`).join('\n');
    const escolhaBaralho = prompt(`Escolha um baralho para praticar (pelo índice):\n${opcoesBaralhos}`);
  
    const indexEscolhido = parseInt(escolhaBaralho) - 1;
  
    if (isNaN(indexEscolhido) || indexEscolhido < 0 || indexEscolhido >= baralhosSalvos.length) {
      alert('Escolha de baralho inválida.');
      return;
    }
  
    const baralhoSelecionado = baralhosSalvos[indexEscolhido];
    praticarBaralho(baralhoSelecionado);
  }
  
  function praticarBaralho(baralho) {
    const cartas = baralho.cartas.slice(); // Copia as cartas para evitar modificar o array original
  
    if (cartas.length === 0) {
      alert('O baralho selecionado não contém cartas para praticar.');
      return;
    }
  
    let cartaAtual;
    let respostaMostrada = false;
    const textareaPergunta = document.getElementById('area-pergunta');
    function mostrarProximaCarta() {
      if (cartas.length === 0) {
        alert('Prática concluída. Todas as cartas foram exibidas.');
        return;
      }
  
      respostaMostrada = false;
      cartaAtual = cartas.splice(Math.floor(Math.random() * cartas.length), 1)[0];
  
      textareaPergunta.value = `Pergunta: ${cartaAtual.pergunta}`;
    }
  
    mostrarProximaCarta();
  
    const botaoMostrarResposta = document.getElementById('mostr_respost');
    const textareaResposta = document.getElementById('area-resposta');
    botaoMostrarResposta.addEventListener('click', () => {
      if (!respostaMostrada) {
        textareaResposta.value = `Resposta: ${cartaAtual.resposta}`;
        
        respostaMostrada = true;
      } else {
        mostrarProximaCarta();
      }
    });
  
   
  }
  