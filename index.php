<?php

$msg = "";
$valid = FALSE;

if (isset($_POST['code']) && $_POST['code'] !== null) {
    $code = $_POST['code'];
    $answer = "guillotine";

    if (strtolower($code) === $answer) {
        $msg = "Bonne réponse ! Le code est 2015 (la date du dernier comdamné)";
        $valid = TRUE;
    }else{
        $msg = "Essaie encore";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peine de Mort - Escape Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
</head>
<body data-bs-theme="dark">

    <div class="container text-center" >
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="card p-4 bg-body-tertiary" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Entrez le mot code</h4>
                        <form method="post">
                            <div class="input-group mb-3  has-validation">
                                <input type="text" name="code" id="code" class="form-control <?= isset($_POST['code']) ? $valid ? 'is-valid' : 'is-invalid' : ''; ?>" placeholder="Mot Code" aria-label="Mot code">
                                <div class="<?= $valid ? 'valid-feedback' : 'invalid-feedback'; ?>">
                                    <?= $msg; ?>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Essayer le code</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <style>
        body,html{
            width: 100%;
            height: 100%;
        }
        div.container{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous"></script>
</body>
</html>
