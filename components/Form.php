<?php include('conectdb.php'); ?>
<?php include('EnviarDados.php'); ?>

<div class="container">
      <form method="post" class="row g-3 fomulario">
        <div class="col-md-6">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" name="nome" class="form-control" id="nome">
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="col-8">
          <label for="endereco" class="form-label">Endereço</label>
          <input name="endereco" type="text" class="form-control" id="endereco" placeholder="Rua benfica,1022" >
        </div>
        <div class="col-6">
          <label for="telefone" class="form-label">Telefone</label>
          <input name="telefone" type="tel" class="form-control" id="telefone" placeholder="(xx) xxxxx-xxxx">
        </div>
        <div class="col-md-6">
          <label for="cidade" class="form-label">Cidade</label>
          <input name="cidade" type="text" class="form-control" id="cidade">
        </div>
        <div class="col-md-6">
          <label for="uf" class="form-label ">Estado</label>
          <select name="uf" id="uf" class="form-select" required>
            <option>...</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="cep" class="form-label">Cep</label>
          <input name="cep" type="text" class="form-control" id="cep" required>
        </div>
        <div class="col-md-6 upload w-80 p-3">
          <div class="card w-100 p-3">
            <div class="card-body w-100 p-3" >
              <h5 class="card-title ">Upload de Imagens</h5>
              <label for="imagem">Selecione uma imagem:</label>
              <input name="file" type="file" class="form-control-file" id="imagem" accept="image/*" multiple required >
            </div>
          </div>
        </div>
        <button type="submit" name='submit' class="btn btn-primary overflow-hidden">Enviar</button>
      </form>
</div>
