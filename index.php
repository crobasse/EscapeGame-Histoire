<?php

session_start();

$msg = "";
$valid = FALSE;
$codeMsg = "";
$codeValid = FALSE;



if (isset($_POST['motCode']) && $_POST['motCode'] !== null) {
    $code = $_POST['motCode'];
    $answer = "guillotine";

    if (strtolower($code) === $answer) {
        $msg = "Bonne réponse ! ";
        $valid = TRUE;
        $_SESSION["motCode"] = TRUE;
    } else {
        $msg = "Essaie encore";
    }
}

if (isset($_POST['codeSub'])) {
    if (isset($_POST['code1']) && isset($_POST['code2']) && isset($_POST['code3']) && isset($_POST['code4'])) {
        $code = $_POST['code1'] . $_POST['code2'] . $_POST['code3'] . $_POST['code4'];
        $answer = "apsc";

        if (strtolower($code) === $answer) {
            $codeMsg = "Bonne réponse ! ";
            $codeValid = TRUE;
            $_SESSION["code"] = TRUE;
        } else {
            $codeMsg = "Essaie encore";
        }
    }

}

if ($_SESSION["motCode"] == TRUE && $_SESSION["code"] == TRUE) {
    echo "<script>alert('Seuls les faits survenus après le tournant de 2015 comptent. Une fois isolés, que les noms suivent le fil du temps, du plus récent au plus ancien.');</script>";
    session_destroy();
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peine de Mort - Escape Game</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
</head>

<body data-bs-theme="dark">

    <div class="container text-center">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card p-4 bg-body-tertiary" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Entrez le mot code</h4>
                        <form method="post">
                            <div class="input-group mb-3  has-validation">
                                <input type="text" name="motCode" id="motCode"
                                    class="form-control <?= isset($_POST['motCode']) ? $valid ? 'is-valid' : 'is-invalid' : ''; ?>"
                                    placeholder="Mot Code" aria-label="Mot code">
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
            <div class="col d-flex justify-content-center">
                <div class="card p-4 bg-body-tertiary" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Entrez le code</h4>
                        <form method="post">
                            <div class="row">
                                <div class="col-3">
                                    <div class="input-group code-part">
                                        <input type="other" maxlength="1" next="code2" name="code1" id="code1"
                                            class="form-control p-2 px-O code-part-input">
                                    </div>
                                </div>


                                <div class="col-3">
                                    <div class="input-group code-part">
                                        <input type="other" maxlength="1" next="code3" name="code2" id="code2"
                                            class="form-control p-2 px-O code-part-input">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="input-group code-part">
                                        <input type="other" maxlength="1" next="code4" name="code3" id="code3"
                                            class="form-control p-2 px-O code-part-input">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="input-group code-part">
                                        <input type="other" maxlength="1" next="codeSub" name="code4" id="code4"
                                            class="form-control p-2 px-O code-part-input">
                                    </div>
                                </div>
                            </div>

                            <div class="text-success mt-2 mb-1">
                                <?= $codeMsg; ?>
                            </div>

                            <div class=" col-12">
                                <button class="btn btn-primary" id="codeSub" name="codeSub" type=" submit">Essayer le
                                    code</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="JS/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu"
        crossorigin="anonymous"></script>
</body>

</html>