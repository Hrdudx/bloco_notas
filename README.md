
## Funcionalidades

- **Criação de Notas**: O usuário pode digitar suas anotações em uma área de texto.
- **Armazenamento de Notas**: Ao clicar no botão "Salvar", as notas são armazenadas em um arquivo de texto no servidor (`notas.txt`).
- **Visualização das Notas Salvas**: As notas salvas são exibidas na página logo abaixo do formulário.

## Tecnologias Utilizadas

- **PHP**: Para processar as anotações e gravá-las em um arquivo de texto no servidor.
- **HTML**: Para estruturar o conteúdo da página web.
- **CSS**: Para estilizar a interface e tornar o aplicativo mais agradável visualmente.

## Como Rodar o Projeto Localmente

### Pré-requisitos

1. **XAMPP**: Este projeto foi desenvolvido e testado usando o XAMPP, que inclui o Apache (servidor web) e o MySQL (banco de dados), mas para este caso, apenas o Apache é necessário.
   
2. **Instalação do XAMPP**:
   - Baixe e instale o [XAMPP](https://www.apachefriends.org/index.html) no seu computador.
   
### Passos para Rodar o Projeto

1. **Inicie o XAMPP**:
   - Abra o XAMPP Control Panel e inicie o Apache.
   
2. **Coloque os Arquivos no Diretório de Projeto**:
   - Copie os arquivos do projeto (index.php, style.css, e quaisquer outros arquivos) para o diretório `htdocs` no local onde o XAMPP foi instalado (normalmente `C:\xampp\htdocs`).

3. **Acesse o Projeto no Navegador**:
   - Abra o navegador e digite `http://localhost/nomedapasta` (substitua "nomedapasta" pelo nome da pasta onde você colocou os arquivos).
   - A página do bloco de notas será exibida, e você poderá começar a salvar suas notas.

## Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais informações.
