<h1> 🎲 Criação do Banco de Dados </h1>

<h3> 1. Introdução </h3>

<p> Este documento apresenta o processo de concepção e criação de um banco de dados para o sistema fictício de compartilhamento de vagas de estágio denominado "JoinUp". O objetivo fundamental deste banco de dados é centralizar e disponibilizar informações atualizadas sobre diversas vagas de estágio disponíveis, facilitando a busca e aplicação por parte dos candidatos. </p>

<p> O sistema "JoinUp" visa conectar estudantes em busca de oportunidades de estágio com empresas e organizações que oferecem tais oportunidades. O banco de dados desempenha um papel crucial na eficiência e funcionalidade do sistema, permitindo o armazenamento e recuperação de informações sobre vagas, empresas, candidatos e interações entre eles. </p>

<h3> 2. Fase 1: Modelagem Entidade-Relacionamento (MER) </h3>

<h4> 2.1. Definição das entidades </h4>

<p> Na fase de modelagem ER, foram indetificadas as principais entidades que irão compor o banco de dados do sistema: </p>

<ul>
    <li> <b>Administrador:</b> perfil de usuário que possui privilégios e responsabilidades especiais relacionadas à administração e gerenciamento do sistema, neste ele terá o papel de inserir as empresas e as oportunidades no sistema; </li>
    <li> <b>Empresa:</b> contém informações sobre as empresas que oferecem vagas de estágio, como nome, setor de atuação e localização; </li>
    <li> <b>Oportunidade:</b> representa informações específicas sobre cada vaga, incluindo título, descrição, requisitos, localização e datas de aplicação. </li>
</ul>

<h4> 2.2. Definição de relacionamentos </h4>

<p> A seguir, foram estabeelcidos os relacionamentos entre as entidades: </p>

<ul>
    <li> Cada <b>administrador cadastra</b> várias <b>empresas</b> ou várias <b>oportunidades</b>; </li>
    <li> Uma ou várias <b>oportunidades são oferecidas</b> por uma ou várias <b>empresas</b>. </li>
</ul>

<h4> 2.3. Diagrama ER </h4>

<p> O diagrama Entidade-Relacionamento resultante do projeto é apresentado na imagem a seguir: </p>

<img src="./img/ProjetoBD - Modelo Entidade-Relacionamento.jpg">