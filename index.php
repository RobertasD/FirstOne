<?php
$answer1 = "";
$answer2 = "";
$answer3 = "";
$correct1 = 2;
$correct2 = 6;
$correct3 = 7;
$score1 = "";
$score2 = "";
$score3 = "";
$total = "";
$sumOfAnswers = "0";
$style1 = "display: none;";
$style2 = "display: none;";
$style3 = "display: none;";
$wrong1 = "display: none;";
$wrong2 = "display: none;";
$wrong3 = "display: none;";
$wrong4 = "display: none;";
$wrong5 = "display: none;";
$wrong6 = "display: none;";

if (isset($_POST["question1"])){
    $answer1 = $_POST["question1"];
}

if (isset($_POST["question2"])){
    $answer2 = $_POST["question2"];
}

if (isset($_POST["question3"])){
    $answer3 = $_POST["question3"];
}

if ($answer1 == $correct1){
    $score1 = 33;
    $sumOfAnswers += 1;
    $style1 = "display: inline-block;";
}

if ($answer1 == 1){
    $wrong1 = "display: inline-block;";
}

if ($answer1 == 3){
    $wrong2 = "display: inline-block;";
}

if ($answer2 == 4){
    $wrong3 = "display: inline-block;";
}

if ($answer2 == 5){
    $wrong4 = "display: inline-block;";
}

if ($answer3 == 8){
    $wrong5 = "display: inline-block;";
}

if ($answer3 == 9){
    $wrong6 = "display: inline-block;";
}

if ($answer2 == $correct2) {
    $score2 = 33;
    $sumOfAnswers += 1;
    $style2 = "display: inline-block;";
}

if ($answer3 == $correct3){
    $score3 = 34;
    $sumOfAnswers += 1;
    $style3 = "display: inline-block;";
}

$total = $score1 + $score2 + $score3;

?>

<head>
    <link rel="stylesheet" href="style.css">

</head>

<div class="containerMain">

    <div class="inside">
        <h1>Apklausa</h1>
        <p>Teisingai atsakyta į <?php echo $sumOfAnswers; ?> klausimus (-ą) ir surinkta <?php echo $total; ?> %.</p>
        <div class="box left">
            <div class="image">
                <img src="https://timedotcom.files.wordpress.com/2017/11/lebron-james-cleveland-cavaliers-arthur-memes.jpg">
            </div>
            <div class="image">
                <img src="https://img00.deviantart.net/c65b/i/2004/02/4/b/3d_bender_model_from_futurama.jpg">
            </div>
            <div class="image">
                <img src="http://www.nrm.org/digital/hannabarbera/wp-content/uploads/sites/15/2016/09/YogiBear.jpg">
            </div>
        </div>

        <div class="box right">
            <div>
                <form action="index.php" method="post">
                    <p>Kas čia per padaras?</p>
                    <input type="radio" name="question1" value="1" <?php echo $answer1 == 1 ? 'checked' : ''; ?>> Elnias <span style="<?php echo $wrong1; ?> background-color: red;"> - atsakymas neteisingas.</span><br>
                    <input type="radio" name="question1" value="2" <?php echo $answer1 == 2 ? 'checked' : ''; ?>> Lebronas <span style="<?php echo $style1; ?> background-color: green;"> - atsakymas teisingas.</span><br>
                    <input type="radio" name="question1" value="3" <?php echo $answer1 == 3 ? 'checked' : ''; ?>> Katinas <span style="<?php echo $wrong2; ?> background-color: red;"> - atsakymas neteisingas.</span><br><br><br><br>

                    <p>Kas čia per dalykas?</p>
                    <input type="radio" name="question2" value="4" <?php echo $answer2 == 4 ? 'checked' : ''; ?>> Skalbiankė <span style="<?php echo $wrong3; ?> background-color: red;"> - atsakymas neteisingas.</span><br>
                    <input type="radio" name="question2" value="5" <?php echo $answer2 == 5 ? 'checked' : ''; ?>> Metalo laužas <span style="<?php echo $wrong4; ?> background-color: red;"> - atsakymas neteisingas.</span><br>
                    <input type="radio" name="question2" value="6" <?php echo $answer2 == 6 ? 'checked' : ''; ?>> Benderis <span style="<?php echo $style2; ?> background-color: green;"> - atsakymas teisingas.</span><br><br><br><br><br><br>

                    <p>Kas čia per fruktas?</p>
                    <input type="radio" name="question3" value="7" <?php echo $answer3 == 7 ? 'checked' : ''; ?>> Meška Jogis <span style="<?php echo $style3; ?> background-color: green;"> - atsakymas teisingas.</span><br>
                    <input type="radio" name="question3" value="8" <?php echo $answer3 == 8 ? 'checked' : ''; ?>> Meras <span style="<?php echo $wrong5; ?> background-color: red;"> - atsakymas neteisingas.</span><br>
                    <input type="radio" name="question3" value="9" <?php echo $answer3 == 9 ? 'checked' : ''; ?>> Pakalikas <span style="<?php echo $wrong6; ?> background-color: red;"> - atsakymas neteisingas.</span><br><br>
                    <input type="submit" value="Atsakyti">
                </form>
            </div>
        </div>
    </div>

</div>