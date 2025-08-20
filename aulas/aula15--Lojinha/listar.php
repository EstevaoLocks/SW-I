<?php
    include 'pedaco.php';
?>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preco</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Teclado Gamer</td>
                    <td>123,53</td>
                    <td>7</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="#" type="button" class="btn btn-danger">Editar</a>
                            <a href="#" type="button" class="btn btn-warning">Excluir</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>