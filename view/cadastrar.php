<div class="contato">
    <form method="post">
    	<p class="noticia-texto">Digite seu Nome completo</p>
        <input type="text" name="nome" size="40" class="digite-nome"></input>
        <p class="noticia-texto">Digite seu E-mail</p>
        <input type="text" name="email" id="email" size="40" class="digite-nome"oninput="validate()"></input>
        <h2 id='result'></h2>
        <p class="noticia-texto">Digite seu password</p>
        <input type="password" name="password" size="40" class="digite-nome"></input>
        <button type="submit" formaction="cadastro" class="botao-enviar">Cadastrar</button>
    </form>
</div>