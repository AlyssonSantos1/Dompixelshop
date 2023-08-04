Cadastro de Produtos Dompixelshop

Esse projeto é basicamente uma aplicaçao CRUD em Laravel onde basicamente usa-se a arquitetura MVC e onde faço as 4 operaçoes que é
Criar, Ler, Atualizar e Deletar arquivos e salva-los no Banco de Dados

o projeto basicamente ele foi criado utilizando o Laragon e para executar ele na tela eu usei o root para dar uma rota para o navegador e 
de acordo com as rotas definidas dentro da aplicaçao em cada parametro ele ira executar no navegador e mostrar na tela a funçao pedida,
Se eu quiser criar um cadastro de um produto a rota será /cadastrar-produto que vira depois do endereço base que é dompixelshop.test 
gerado pelo laragon e assim sucessivamente para as outras funçoes da crud.
Vale lembrar que em algumas funçoes dessa aplicaçao usei o formulario em html pois o navegador so consegue naturalmente acesar a rota GET,
ou seja se for um metodo fora desse é preciso criar um form pra puxar e usar o @csrf pra gerar o token de autorizaçao

Pra todas as rotas basicamente:
dompixelshop.test/cadastrar-produto
dompixelshop.test/editar-produto
dompixelshop.test/excluir-produto
dompixelshop.test/atualizar-produto

Obs:: Apenas como efeito de testagem eu criei um metodo onde vou exibir na tela apenas o nome do produto no qual é requisitado seu id,
portanto na tela vai exibir o nome do produto de acordo com o id requisitado pela rota.
Route::get('/mostrar-produto/{id_produto}'
Nao tem efeito pratico fiz apenas pra mostrar aos recrutadores um pouco do que sei fazer apesar de ser Junior



