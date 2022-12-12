<!-- Aqui entra o header -->
<?php
include "nav.php";

?>
<!-- Aqui entra o carousel -->
<?php

include "carousel.php";

?>
<!-- Aqui sai o carousel -->
<!-- Aqui entra os cards -->

<div class="container mt-5" id="about">
    <div class="container mt-5">
        <h1>Sobre nós</h1>
    </div>
    <div class="container mt-5">
        <p><strong>O intuito do blog é atualizar o público sobre o que acontece no mundo dos esportes.</strong></p>
    </div>
</div>
<!--<div class="container mt-5" id="about">
    <div class="container mt-5">
        <h1>Instruções</h1>
    </div>
    <div class="container mt-5">
        <h5>Para o bom uso deste blog e como forma de ajudar você usuário a utiliza-lo, segue as seguintes instruções:</h3>
        <ul>
            <li>Para visualizar o post em sua pasta, basta clicar no olho dentro do seu card</li>
            <li>Na barra de pesquisa você pode filtrar ou simplismente deixar vazio para verificar todos os posts.</li>
            <li>No botão de login, apenas os funcionários do blog podem acessa-lo</li>
            <li>Você pode filtrar os posts por categoria</li>
            <li>E é isto, interaja com o nosso blog</li>
        </ul>
    </div>
</div>-->

<div class="container mt-5" id="posts">
   <div class="container mt-5">
        <h1>Posts</h1>
   </div>
</div>

<?php

include "cards.php";

?>
<?php 

include "footer.php";

?>
