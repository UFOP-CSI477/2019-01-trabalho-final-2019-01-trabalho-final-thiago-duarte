<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" />
    <link rel="stylesheet" href="css/pginicial.css" >
    <title>Registros</title>
</head>

<body>
    <!-- Main Container -->
    <div class="container">
        <!-- Main Table -->
        <div class="card">
            <div class="card-header">
                Lista de Registros
            </div>
            <div class="card-body">
                <div class="row">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- End Main Table -->
    </div>
    <!-- End Main Container -->

    <!-- ModalRemove -->
    <div class="modal fade" id="ModalRemove" tabindex="-1" role="dialog" aria-labelledby="ModalRemove"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Remover registro?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Tem certeza que deseja remover o registro.</p>
                    <input id="idDrop" type="hidden" />
                    <strong id="descriptionDrop">registro</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" name="btnDrop">Remover</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End ModalRemove -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="js/produtos.js"></script>
</body>

</html>