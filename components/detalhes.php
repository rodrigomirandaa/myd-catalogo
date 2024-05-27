<div class="center">
    <div class="details">

        <h1>
            <?php echo $data['nome']; ?>
        </h1>

        <h3>
            Especialidades: <span class="caracteristica"><?php echo $data['especialidades']; ?></span>
        </h3>
        <p> <?php echo $data['descricao']; ?> </p>


        <h2>Contatos</h2>
        <h3>
            Telefone: <span class="caracteristica"><?php echo $data['telefone']; ?></span>
        </h3>
        <h3>
            Email: <span class="caracteristica"><?php echo $data['email']; ?></span>
        </h3>

        <h2>Endereço</h2>
        <h3>
            <?php echo $data['endereco']; ?>
        </h3>
        <h3>
            CEP: <span class="caracteristica"><?php echo $data['cep']; ?></span>
        </h3>
        <h3>
            <span class="caracteristica"><?php echo $data['cidade'] ?> - <?php echo $data['uf'] ?></span>
        </h3>


    </div>
</div>