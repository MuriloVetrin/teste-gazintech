# Objetivo: 
Criar um sistema de cadastro de Desenvolvedores, que deverá obrigatóriamente, estar associado a um determinado nível.

É preciso conter dois crud's:

- CRUD de níveis
- CRUD dos desenvolvedores

# Fases do Desenvolvimento:

### FASE 1 -> Escolher a linguagem para trabalhar: 
-> Laravel

### FASE 2 -> Esboçar o projeto e como provavelmente ele deve ficar: 

-> Protótipo

![Inserir um título](https://user-images.githubusercontent.com/93444811/229107810-725cffd7-bd46-4d13-b73d-c3c9a0ce81f6.png)

### FASE 3 -> Ver o que precisa ser feito para chegar nesse resultado: 

:white_check_mark: Como rodar Laravel em Docker, pois até agora só vimos em Xampp; <br />
:white_check_mark: Como configurar o Laravel para ser uma SPA; <br />
:white_check_mark: Como fazer os Crud's se interligarem através de uma FK; <br />
:white_check_mark: O que devo fazer primeiro: criar o projeto com o docker, criar com o livewire instalado ou fazer isso depois em um prjeto já existente?

### FASE 4 -> Desenvolvimento:

:white_check_mark: Montar os Models e consecutivamente as Migrations, junto com o banco de dados e as tabelas; <br />
:white_check_mark: Criar as Controllers junto com as rotas; <br />
:black_square_button: Configurar para ser uma SPA; <br />
:white_check_mark: Configurar para rodar em Docker. 

### Coisas para arrumar: 

## 02/04

- Ajustar para ser uma SPA;
- Colocar para não poder apagar um nivel pois está atrelado a um desenvolvedor.

Provavelmente esses erros se originam desse erro -> Ao clicar no botão enviar do forulario novo desenvolvedor ele da erro
- Não aparece o nível dele na lista do crud;
- Erro ao clicar no botão enviar do editar desenvolvedor;
- Erro ao clicar no botão apagar desenvolvedor;
- Ao clicar no usuario da lista da esse erro: Undefined constant "id";
