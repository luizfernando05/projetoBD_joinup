<h1>
    <img align="center" width="40px" src="./joinup/view/images/logoIncon.svg">
    <span>JoinUp - Projeto FBD - UFERSA/2023.1</span>
</h1>

<h3> Informações iniciais: </h3>

<p> O repositório remoto a seguir corresponde ao projeto da disciplina "Fundamentos de Banco de Dados" do curso de Bacharelado em Sistemas de Informação, situado na Universidade Federal Rural do Semi-Árido (UFERSA), campus Angicos. Este projeto foi concebido e desenvolvido pelo estudante Luiz Fernando da Cunha Silva, sob a orientação da Professora Dra. Samara Martins Nascimento Gonçalves. </p>

<p> O foco primordial deste projeto foi a concepção de um sistema de integração com um banco de dados PostgreSQL. A partir dessa premissa, surgiu o "JoinUp," um site dedicado à divulgação de oportunidades de estágio. Para a concretização desse sistema, foram utilizadas as linguagens HTML e CSS para criar a interface de usuário, enquanto o PHP desempenhou um papel fundamental na integração e manipulação dos dados no banco de dados. </p>

<h3> Índice: </h3>

1. [Instalação](#instalacao)
2. [Licença](./LICENSE.md)
3. [Introdução ao Projeto](#introducao)
3. [Criação do Banco de dados](./doc/bandoDados.md)
4. [Manipulação dos Dados](./doc/maniDados.md)
5. [Referências]()

<div id='instalacao'>  

<h3> 🔧 Instalação </h3>

Para visualizar esta aplicação na sua máquina local, siga os seguintes passos:

1. <b>Clone o Repositório:</b> Clone este repositório em sua máquina local usando o seguinte comando no terminal:

```
   git clone https://github.com/luizfernando05/projetoBD_joinup
```

2. <b>Crie o Banco de Dados:</b> Acesse seu sistema PostgreSQL e crie um banco de dados para a aplicação. Você pode fazer isso copiando e colando o conteúdo do arquivo [joinup.sql](./sql/joinup.sql) fornecido neste repositório.

3. <b>Configure o Arquivo config.php:</b> Abra o arquivo [config.php](./joinup/model/config.php) e insira suas informações de conexão ao banco de dados, incluindo host, porta, nome do banco de dados, nome de usuário e senha.

4. <b>Execute o Arquivo loginAdm.php:</b> Execute o arquivo [loginAdm.php](./joinup/view/loginAdm.php) utilizando um servidor PHP. Se você estiver usando o Visual Studio Code, pode experimentar a [extensão](https://marketplace.visualstudio.com/items?itemName=brapifra.phpserver) de servidor PHP disponível.

5. <b>Faça o Login como Administrador:</b> Use as informações de login que você cadastrou anteriormente no banco de dados para acessar a página de administração da aplicação.

6. <b>Cadastre Dados Genéricos:</b> Complete o cadastro de informações genéricas, começando pelo cadastro de empresas e, em seguida, pelas oportunidades disponíveis, seguindo essa ordem (é possível cadastrar pelo PostgreSQL, ou pelas páginas de cadastro do site).

7. <b>Visualize o Site:</b> Por fim, vá até o arquivo [index.php](./joinup/view/index.php) e você poderá visualizar o funcionamento do site.

Com essas etapas, você estará pronto para explorar a aplicação localmente em sua máquina.

</div>  

<div id='introducao'>  

<h3> 🎯 Introdução ao Projeto </h3>

<p> A crescente demanda por uma educação prática e voltada para o mercado de trabalho tem levado as instituições de ensino e os alunos a buscarem oportunidades de estágio como parte integrante do processo de formação acadêmica. Em paralelo, as empresas reconhecem a importância de recrutar talentos em fase de formação, visando o desenvolvimento de profissionais alinhados com suas necessidades e cultura organizacional. Nesse contexto, a criação de um sistema de divulgação de vagas de estágio se apresenta como uma proposta relevante. </p>

<p> Atualmente, muitos estudantes enfrentam desafios na busca por oportunidades de estágio, como a falta de informações sobre vagas disponíveis e a dificuldade em encontrar empresas que ofereçam programas de estágio alinhados com seus interesses e competências. Dessa forma, o sistema proposto visa simplificar esse processo, proporcionando um único local para acessar informações atualizadas sobre vagas de estágio. </p>

<p> Ademais, vê-se que empresas muitas vezes enfrentam dificuldades em divulgar suas vagas de estágio de forma eficaz para o público-alvo. Assim, um sistema centralizado ajudaria a reduzir assimetrias de informação, permitindo que as empresas alcancem um público mais amplo de estudantes e, ao mesmo tempo, proporcionando aos alunos uma visão mais clara das oportunidades disponíveis. </p>

<p> Em resumo, a concepção e implementação de um Sistema de Compartilhamento de Vagas de Estágio são justificadas pela necessidade de melhorar o acesso dos estudantes a oportunidades de estágio, além de reduzir assimetrias de informação. Dessa maneira, esse projeto está alinhado com os princípios e conceitos fundamentais de banco de dados e oferece uma oportunidade única de aplicação prática do conhecimento adquirido na disciplina de Fundamentos de Banco de Dados. </p>

</div>  

<div id='rodape'>

------
<h4> Projeto da Disciplina Fundamentos de Banco de Dados </h4>
<p> Universidade Federal Rural do Semi-Árido (UFERSA), Angicos-RN - Bacharelado em Sistemas de Informação</p>
<p> © Luiz Fernando, 2023 </p>
<img src="./joinup/view/images/logoLuizFernandov2.svg">

</div>  





















































































































