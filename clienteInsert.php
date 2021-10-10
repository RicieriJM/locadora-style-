<html lang="en" dir="ltr">
 <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 </head>
<body>

<?php

helper('form');

echo '<pre>';

$styleInputs = [
    'maxlength' => '100',
    'size'      => '20',
    'style'     => 'width:25%',
    'class'     => 'form-control',
];

$styleLabels = [
    'style' => 'color: black;',
    'style' => 'font-size: 20;',
];

$styleButtons = [
    'style' => 'width: 10%;',
];

echo form_open('cliente/insert');

echo form_label('Digite o nome do cliente: ', '', $styleLabels);
echo form_input('TB_CLIENTE_NOME', '', $styleInputs);

echo form_label('Digite o telefone: ', '', $styleLabels);
echo form_input('TB_CLIENTE_TEL', '', $styleInputs);

echo form_label('Digite o sexo: ', '', $styleLabels);
echo form_input('TB_CLIENTE_SEXO', '', $styleInputs);

echo form_label('Digite o e-mail: ', '', $styleLabels);
echo form_input('TB_CLIENTE_EMAIL', '', $styleInputs);

echo form_label('Digite a senha: ', '', $styleLabels);
echo form_input('TB_CLIENTE_SENHA', '', $styleInputs);

echo form_label('Digite o endereco: ', '', $styleLabels);
echo form_input('TB_CLIENTE_ENDERECO', '', $styleInputs);

echo form_label('Digite o complemento: ', '', $styleLabels);
echo form_input('TB_CLIENTE_COMPLEMENTO', '', $styleInputs);

echo form_label('Digite o bairro: ', '', $styleLabels);
echo form_input('TB_CLIENTE_BAIRRO', '', $styleInputs);

echo form_label('Digite a cidade: ', '', $styleLabels);
echo form_input('TB_CLIENTE_CIDADE', '', $styleInputs);

echo form_label('Digite o estado: ', '', $styleLabels);
echo form_input('TB_CLIENTE_UF', '', $styleInputs);

echo form_label('Digite a data de nascimento: ', '', $styleLabels);
echo form_input('TB_CLIENTE_DT_NASC', '', $styleInputs);

echo form_label('Digite a data de cadastro: ', '', $styleLabels);
echo form_input('TB_CLIENTE_DT_CAD', '', $styleInputs);

echo form_submit('mysubmit','OK', $styleButtons);

echo form_close();

?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>