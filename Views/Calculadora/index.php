<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?= $data['page_title']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /*Estilos login*/
        #divLoading {
            position: fixed;
            top: 0;
            width: 100%;
            height: 100%;
            background: blue;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(254, 254, 255, .65);
            z-index: 9999;
            display: none;

        }

        #divLoading img {
            width: 50px;
            height: 50px;
        }
    </style>
    <!--Toastr alertas-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>

<body>
    <div id="divLoading">
        <div>
            <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
        </div>
    </div>
    <div class="container mt-5">
        <h1><?= $data['page_title']; ?></h1>
        <form id="formConversion">
            <div class="mb-3">
                <label for="nombre" class="form-label">Seleccione el tipo de conversión</label>
                <select class="form-select" aria-label="Default select example" id="tipo" name="tipo" required>
                    <option value="Longitud">Longitud</option>
                    <option value="Masa">Masa</option>
                    <option value="Volumen">Volumen</option>
                    <option value="Moneda">Moneda</option>
                    <option value="Tiempo">Tiempo</option>
                </select>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label class="control-label" for="valor">Valor</label>
                        <input type="number" class="form-control" id="valor" name="valor" required>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="control-label" for="unidad1">Unidad</label>
                        <div>
                            <select name="unidad1" id="unidad1" class="form-control" style="width: 100%;">
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                        <label class="control-label" for="unidad2">a</label>

                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="control-label" for="unidad2">Unidad</label>
                        <div>
                            <select name="unidad2" id="unidad2" class="form-control" style="width: 100%;">
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Convertir</button>
        </form>

        <br>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label" for="rol">Resultado</label>
                    <input type="number" class="form-control" id="resultado" name="resultado" required>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label" for="ud_final">Unidad</label>
                    <input type="text" class="form-control" id="ud_final" name="ud_final" disabled>
                </div>
            </div>
        </div>
    </div>
    <script>
        const base_url = "<?= base_url(); ?>";
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!--Toastr alertas-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        toastr.options = {
            closeButton: true,
            debug: false,
            newestOnTop: false,
            progressBar: true,
            positionClass: "toast-top-right",
            preventDuplicates: false,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            timeOut: "5000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
        };
    </script>
    <script src="<?= media(); ?>/js/calculadora.js"></script>

</body>

</html>