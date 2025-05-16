<?php

session_start();

$msg = "";
$valid = FALSE;
$codeMsg = "";
$codeValid = FALSE;



if (isset($_POST['motCodeSub']) && $_POST['motCodeSub'] !== null) {
    if (isset($_POST['motCode1']) && isset($_POST['motCode2']) && isset($_POST['motCode3']) && isset($_POST['motCode4']) && isset($_POST['motCode5']) && isset($_POST['motCode6']) && isset($_POST['motCode7']) && isset($_POST['motCode8']) && isset($_POST['motCode9']) && isset($_POST['motCode10'])) {
        $code = $_POST['motCode1'] . $_POST['motCode2'] . $_POST['motCode3'] . $_POST['motCode4'] . $_POST['motCode5'] . $_POST['motCode6'] . $_POST['motCode7'] . $_POST['motCode8'] . $_POST['motCode9'] . $_POST['motCode10'];
    }
    $code = $_POST['motCode1'] . $_POST['motCode2'] . $_POST['motCode3'] . $_POST['motCode4'] . $_POST['motCode5'] . $_POST['motCode6'] . $_POST['motCode7'] . $_POST['motCode8'] . $_POST['motCode9'] . $_POST['motCode10'];
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
    echo "<script>alert('Seuls les faits survenus après le tournant de 2015 comptent. Une fois isolés, que les noms suivent le fil du temps, du plus récent au plus ancien, chacun porte une lettre en tête, rassemble les pour trouver le nom du dernier fusillé.'); window.location = window.location.href;</script>";
    session_destroy();

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
                <div class="card p-4 bg-body-tertiary">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Entrez le mot code</h4>
                        <form method="post">
                            <div class="row ">
                                <div class="col px-1">
                                    <div class="input-group code-part">
                                        <input type="other" maxlength="1" next="motCode2" name="motCode1" id="motCode1"
                                            class="form-control p-2 px-O code-part-input"
                                            <?= isset($_SESSION['motCode']) ? 'value="G"' : ''; ?>>
                                    </div>
                                </div>


                                <div class="col px-1">
                                    <div class="input-group code-part">
                                        <input type="other" maxlength="1" next="motCode3" name="motCode2" id="motCode2"
                                            class="form-control p-2 px-O code-part-input" <?= isset($_SESSION['motCode']) ? 'value="U"' : ''; ?>>
                                    </div>
                                </div>

                                <div class="col px-1">
                                    <div class="input-group code-part">
                                        <input type="other" maxlength="1" next="motCode4" name="motCode3" id="motCode3"
                                            class="form-control p-2 px-O code-part-input" <?= isset($_SESSION['motCode']) ? 'value="I"' : ''; ?>>
                                    </div>
                                </div>


                                <div class="col px-1">
                                    <div class="input-group code-part">
                                        <input type="other" maxlength="1" next="motCode5" name="motCode4" id="motCode4"
                                            class="form-control p-2 px-O code-part-input" <?= isset($_SESSION['motCode']) ? 'value="L"' : ''; ?>>
                                    </div>
                                </div>
                                <div class="col px-1">
                                    <div class="input-group code-part">
                                        <input type="other" maxlength="1" next="motCode6" name="motCode5" id="motCode5"
                                            class="form-control p-2 px-O code-part-input" <?= isset($_SESSION['motCode']) ? 'value="L"' : ''; ?> >
                                    </div>
                                </div>
                                <div class="col px-1">
                                    <div class="input-group code-part">
                                        <input type="other" maxlength="1" next="motCode7" name="motCode6" id="motCode6"
                                            class="form-control p-2 px-O code-part-input" <?= isset($_SESSION['motCode']) ? 'value="O"' : ''; ?>>
                                    </div>
                                </div>
                                <div class="col px-1">
                                    <div class="input-group code-part">
                                        <input type="other" maxlength="1" next="motCode8" name="motCode7" id="motCode7"
                                            class="form-control p-2 px-O code-part-input" <?= isset($_SESSION['motCode']) ? 'value="T"' : ''; ?>>
                                    </div>
                                </div>
                                <div class="col px-1">
                                    <div class="input-group code-part m-0">
                                        <input type="other" maxlength="1" next="motCode9" name="motCode8" id="motCode8"
                                            class="form-control p-2 px-O code-part-input" <?= isset($_SESSION['motCode']) ? 'value="I"' : ''; ?>>
                                    </div>
                                </div>
                                <div class="col px-1">
                                    <div class="input-group code-part m-0">
                                        <input type="other" maxlength="1" next="motCode10" name="motCode9" id="motCode9"
                                            class="form-control m-0 p-2 px-O code-part-input" <?= isset($_SESSION['motCode']) ? 'value="N"' : ''; ?>>
                                    </div>
                                </div>
                                <div class="col m-0">
                                    <div class="input-group code-part">
                                        <input type="other" maxlength="1" next="motCodeSub" name="motCode10"
                                            id="motCode10" class="form-control p-2 px-O code-part-input" <?= isset($_SESSION['motCode']) ? 'value="E"' : ''; ?>>
                                    </div>
                                </div>
                            </div>
                            <div class="<?= $valid ? 'text-success' : 'text-danger'; ?> mt-2 mb-1">
                                <?= $msg; ?>
                            </div>

                            <div class=" col-12">
                                <button class="btn btn-primary" id="motCodeSub" name="motCodeSub" type=" submit">Essayer
                                    le
                                    code</button>
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
                                            class="form-control p-2 px-O code-part-input" <?= isset($_SESSION['code']) ? 'value="A"' : ''; ?>>
                                    </div>
                                </div>


                                <div class="col-3">
                                    <div class="input-group code-part">
                                        <input type="other" maxlength="1" next="code3" name="code2" id="code2"
                                            class="form-control p-2 px-O code-part-input" <?= isset($_SESSION['code']) ? 'value="P"' : ''; ?>>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="input-group code-part">
                                        <input type="other" maxlength="1" next="code4" name="code3" id="code3"
                                            class="form-control p-2 px-O code-part-input" <?= isset($_SESSION['code']) ? 'value="S"' : ''; ?>>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="input-group code-part">
                                        <input type="other" maxlength="1" next="codeSub" name="code4" id="code4"
                                            class="form-control p-2 px-O code-part-input" <?= isset($_SESSION['code']) ? 'value="C"' : ''; ?>>
                                    </div>
                                </div>
                            </div>

                            <div class="<?= $codeValid ? 'text-success' : 'text-danger'; ?> mt-2 mb-1">
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