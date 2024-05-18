<section class="py-4" style="background-color: #f8f9fa;">
    <style>
        .card-img-top {
            width: 100%;
            height: 100%; /* ou a altura desejada */
            object-fit: scale-down;
        }

        .rating {
            unicode-bidi: bidi-override;
            direction: rtl;
            text-align: center;
        }

        .rating span {
            font-size: 24px;
            color: #ccc; /* cor das estrelas vazias */
            cursor: pointer;
        }

        .rating span:hover,
        .rating span.checked {
            color: #ff9800; /* cor das estrelas preenchidas */
        }
    </style>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
            <?php
            // Conectar com o banco
            include('conectdb.php');

            // Coletar todas as clínicas do Firebase
            try {
                $clinicas = $database->getReference('dbClinicas/Clinicas')->getValue();
            } catch (\Exception $e) {
                echo 'Erro ao conectar ao Firebase: '.$e->getMessage();
                $clinicas = null;
            }
            

            if ($clinicas) {
                foreach ($clinicas as $id => $clinica) {
                    $nome = isset($clinica['nome']) ? $clinica['nome'] : 'Nome não disponível';
                    $telefone = isset($clinica['telefone']) ? $clinica['telefone'] : 'Telefone não disponível';
                    $cidade = isset($clinica['cidade']) ? $clinica['cidade'] : 'Cidade não disponível';
                    $endereco = isset($clinica['endereco']) ? $clinica['endereco'] : 'Endereço não disponível';
                    $especialidades = isset($clinica['especialidades']) ? $clinica['especialidades'] : 'Especialidades não disponíveis';
                    // Buscar o primeiro arquivo de imagem na pasta específica para a clínica
                    $imagem_files = glob("static/$id/{$id}_*.{jpg,jpeg,png}", GLOB_BRACE);
                    $imagem = $imagem_files ? $imagem_files[0] : 'static/default.png'; // caminho para a imagem da clínica ou imagem padrão
 

                    echo "
                    <div class='col'>
                        <div class='card h-100'>
                            <img src='$imagem' class='card-img-top' alt='Imagem da Clínica'>
                            <div class='card-body'>
                                <h5 class='card-title'>$nome</h5>
                            
                                <br>
                                <p class='card-text'><strong>Cidade:</strong> $cidade</p>
                                <p class='card-text'><strong>Endereço:</strong> $endereco</p>
                                <p class='card-text'><strong>Telefone:</strong> $telefone</p>
                                <p class='card-text'><strong>Especialidades:</strong> $especialidades</p>

                                <div class='rating'>
                                    <span class='fa fa-star'></span>
                                    <span class='fa fa-star'></span>
                                    <span class='fa fa-star'></span>
                                    <span class='fa fa-star'></span>
                                    <span class='fa fa-star'></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
                }
            } else {
                echo "<p class='text-center'>Nenhuma clínica encontrada.</p>";
            }
            ?>
        </div>
    </div>
</section>
