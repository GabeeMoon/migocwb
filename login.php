<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
    <script>
        function limpa_formulario_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value = "";
            document.getElementById('bairro').value = "";
            document.getElementById('cidade').value = "";
            document.getElementById('uf').value = "";
        }

        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.
                document.getElementById('rua').value = conteudo.logradouro;
                document.getElementById('bairro').value = conteudo.bairro;
                document.getElementById('cidade').value = conteudo.localidade;
                document.getElementById('uf').value = conteudo.uf;
            } else {
                //CEP não encontrado.
                limpa_formulario_cep();
                alert("CEP não encontrado.");
            }
        }

        function pesquisacep(valor) {
            //Nova variável "cep" somente com dígitos.
            var cep = valor.replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep !== "") {
                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {
                    //Preenche os campos com "..." enquanto consulta webservice.
                    document.getElementById('rua').value = "...";
                    document.getElementById('bairro').value = "...";
                    document.getElementById('cidade').value = "...";
                    document.getElementById('uf').value = "...";

                    //Cria um elemento javascript.
                    var script = document.createElement('script');

                    //Sincroniza com o callback.
                    script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                    //Insere script no documento e carrega o conteúdo.
                    document.body.appendChild(script);
                } else {
                    //CEP é inválido.
                    limpa_formulario_cep();
                    alert("Formato de CEP inválido.");
                }
            } else {
                //CEP sem valor, limpa formulário.
                limpa_formulario_cep();
            }
        }
    </script>
</head>
<body>
<div class="main-login">
    <div class="left-login">
        <h1>Conheça agora esta comunidade!</h1>
        <img class="left-login-image" src="image/Screenshot_191-semfundo.png" alt="">
    </div>
    <div class="right-login">
        <div class="card-login">
            <h1>LOGIN</h1>
            <form action="back/login_method.php" method="POST">
                <div class="textfield">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha" required>
                </div>
                <button type="submit" name="adiciona" value="adiciona" class="btn-login">Entrar</button>
            </form>
            <div class="col-12 centralizar">
                <a href="#" class="link-primary">
                    <p class="text-center">Esqueceu a senha?</p>
                </a>
            </div>
            <div class="col-6 centralizar">
                <button type="button" class="btn btn-success btn-xl col-12 btn-criarconta" data-bs-toggle="modal" data-bs-target="#exampleModal">Criar Conta</button>
            </div>
        </div>
    </div>
</div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Criar Conta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <form action="back/cadastro.php" method="POST">
                        <div class="mb-3">
                            <label for="inputEmail4" class="form-label">Nome</label>
                            <input name="nome" type="text" class="form-control" id="inputEmail4" placeholder="Nome">
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword4" class="form-label">Sobrenome</label>
                            <input name="sobrenome" type="text" class="form-control" id="inputPassword4" placeholder="Sobrenome">
                        </div>
                        <div class="mb-3">
                            <label for="inputAddress" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="inputAddress" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="inputAddress2" class="form-label">Senha</label>
                            <input name="senha" type="password" class="form-control" id="inputAddress2" placeholder="Senha">
                        </div>
                        <div class="mb-3">
                            <label for="inputAddress2" class="form-label">Confirmar Senha</label>
                            <input name="confirmar_senha" type="password" class="form-control" id="inputAddress2" placeholder="Confirmar Senha">
                        </div>
                        <div class="mb-3">
                            <label for="inputZip" class="form-label">CEP</label>
                            <input name="cep" type="text" class="form-control" id="inputZip" onblur="pesquisacep(this.value);">
                        </div>
                        <div class="mb-3">
                            <label for="inputCity" class="form-label">Cidade</label>
                            <input name="cidade" type="text" class="form-control" id="cidade" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">Estado</label>
                            <input name="uf" type="text" class="form-control" id="uf" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="inputAddress2" class="form-label">Rua</label>
                            <input name="rua" type="text" class="form-control" id="rua" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="inputAddress2" class="form-label">Bairro</label>
                            <input name="bairro" type="text" class="form-control" id="bairro" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="inputAddress2" class="form-label">Número</label>
                            <input name="numero" type="text" class="form-control" id="inputAddress2" placeholder="Número">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Criar Conta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
