
<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){

    $Nome = $_POST["NomePaci"];
    $NCross = $_POST["NCross"];
    $cartNacio = $_POST["cartNacio"];
    $DateNasc = $_POST["DateNasc"];
    $sexo = $_POST["sexo"];
    $raca = $_POST["raca"];
    $MomName = $_POST["MomName"];
    $rg = $_POST["rg"];
    $cpf = $_POST["cpf"];
    $telefone1 = $_POST["telefone1"];
    $telefone2 = $_POST["telefone2"];
    $MunResid = $_POST["MunResid"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];
    $adress = $_POST["adress"];


    $CodProcediment1 = $_POST["CodProcediment1"];
    $procedimentName1 = $_POST["procedimentName1"];
    $qtt1 = $_POST["qtt1"];

    $CodProcediment2 = $_POST["CodProcediment2"];
    $procedimentName2 = $_POST["procedimentName2"];
    $qtt2 = $_POST["qtt2"];

    $CodProcediment3 = $_POST["CodProcediment3"];
    $procedimentName3 = $_POST["procedimentName3"];
    $qtt3 = $_POST["qtt3"];

    $description = $_POST["description"];
    $ProfessionalName = $_POST["ProfessionalName"];
    $crm = $_POST["crm"];
    $hospitExecut = $_POST["hospitExecut"];
    $CnesExecut = $_POST["CnesExecut"];
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivo Pdf(SADT)</title>
    <link rel="stylesheet" href="SADT.css">
</head>


<style>

*{
    margin: 0%;
  padding: 0;
}

body{
    margin: 20px;
    border: solid 2px black;
}

#Head-All{
    text-align: center;
    align-items: center;
    height: 10%;
    width: auto;
}

.Container-Pacient-data{
    width: 100%;
    padding: 10px;
}

.topic{
    font-size: small;
    text-align: center;
    justify-content: center;
    font-family: sans-serif;
    background-color: black;
    height: 2% ;
    width: 100%;
}

.box{
   display: inline-block;
}

table{
    min-height: 20px;
}




p{
    font-size: 13.5px;
}

.data{
    font-size: 14px;
    text-decoration: underline;
}

.table{
    border: solid 2px black;
}

#half-table{
    border-left: solid 2px black;
    border-right: solid 2px black;
    min-height:20px;
}

td{
    padding: 2px;
}

table{
    margin: 0;
    padding: 0;
}



</style>


<body>
    
    
   
    <header class="containerHead">
        <div id="Head-Al l">
            <h1>SERVIÇO AUXILIAR DE DIAGNÓSTICO E TERAPIA - SADT</h1>
        </div>
    </header>

    <div class="topic">
          <div>
            <span style="color: white;">IDENTIFICAÇÃO DO ESTABELECIMENTO DE SAUDE (SOLICITANTE)   </span>
          </div>
    </div>

    <div class="Container-Pacient-data">  
        <div>
            <div style="width: 70%;" class="box" id="box1">
                <p><strong>1- NOME DO ESTABELECIMENTO DE SAÚDE</strong></p>
                <p class="data" >AME - ambulatório médico de especialidades</p>
            </div>
            <div class="box" id="box2">
                <p><strong>2 - CNES</strong></p>
                <p class="data" >2048167</p>
            </div>

        </div>      
    </div>

    

   
   
    <div class="topic">                            <!--TOPICO PRETO DE DEMARCAÇÃO-->
        <div>
          <span style="color: white;">IDENTIFICAÇÃO DO PACIENTE    </span>
        </div>
    </div>
 
    
    <div class="Container-Pacient-data">
        <div class="container-for-line">
            <div style="width: 33%;" class="box" id="box3">
                <p><strong>3- NOME DO PACIENTE</strong></p>
                <p class="data" >  <?php echo "$Nome"  ?> </p>
            </div>
            <div style="width: 33%;" class="box" id="box4">
                <p><strong>4- N CROSS</strong></p>
                <p class="data" ><?php echo "$NCross"  ?></p>
            </div>
            <div style="width: auto;" class="box" id="box5">
                <p><strong>5 -CARTEIRA NACIONAL DE SAÚDE</strong></p>
                <p class="data" ><?php echo "$cartNacio"  ?></p>
            </div>
        </div>   
    </div>


    <div class="Container-Pacient-data">
        <div class="container-for-line">
            <div style="width: 25%;" class="box" id="box6">
                <p><strong>6- DATA DE NASCIMENTO</strong></p>
                <p class="data" ><?php echo "$cartNacio"  ?></p>
            </div>
            <div style="width: 20%;" class="box" id="box7">
                <p> <strong>7 -SEXO</strong> </p>
                <p class="data" ><?php echo "$sexo"  ?></p>
            </div>
            <div style="width: 20%;" class="box" id="box8">
                <p><strong>8 -RAÇA</strong></p>
                <p class="data" ><?php echo "$raca"  ?></p>
            </div>
            <div style="width: 30%;" class="box" id="box9">
                <p><strong>9- NOME DA MÃE</strong></p>
                <p class="data" ><?php echo "$MomName"  ?></p>
            </div>
        </div>   
    </div>

    <div class="Container-Pacient-data">
        <div class="container-for-line">
            <div style="width: 25%;" class="box" id="box10">
                <p><strong>10- RG</strong></p>
                <p class="data" ><?php echo "$rg"  ?></p>
            </div>
            <div style="width: 20%;" class="box" id="bo11">
                <p> <strong>11 -CPF</strong> </p>
                <p class="data" ><?php echo "$rg"?></p>
            </div>
            <div style="width: 20%;" class="box" id="bo12">
                <p><strong>12 -TELEFONE </strong></p>
                <p class="data" ><?php echo "$telefone1"?></p>
            </div>
            <div style="width: 22%;" class="box" id="bo13">
                <p><strong>13- TELEFONE</strong></p>
                <p class="data"><?php echo "$telefone2"?></p>
            </div>
        </div>   
    </div>

    <div class="Container-Pacient-data">
        <div class="container-for-line">
            <div style="width: 33%;" class="box" id="bo11">
                <p> <strong>14- MUNÍPIO DE RESIDENCIA</strong> </p>
                <p class="data" ><?php echo "$MunResid "?></p>
            </div>
            <div  style="width: 33%;" class="box" id="bo12">
                <p><strong>15- UF </strong></p>
                <p class="data" ><?php echo "$estado" ?></p>
            </div>
            <div style="width: auto;" class="box" id="bo13">
                <p><strong>16- CEP</strong></p>
                <p class="data"><?php echo "$cep" ?></p>
            </div>
        </div>   
    </div>

    <div class="Container-Pacient-data">
        <div class="container-for-line">
            <div style="width: 100%;" class="box" id="box11">
                <p><strong>17- ENDEREÇO (RUA, N,BAIRRO)</strong></p>
                <p class="data" ><?php echo "$adress" ?></p>
            </div>
        </div>   
    </div>

    <div class="topic">                            <!--TOPICO PRETO DE DEMARCAÇÃO-->
        <div>
          <span style="color: white;">PROCEDIMENTO SOLICITADO</span>
        </div>
    </div>

    <div class="Container-Pacient-data">
        <div class="container-for-line">
            <div style="width: 20%;" class="box" id="bo11">
                <p class="p-tbl" style="font-size: 10px;"> <strong>18- COD DO PROCEDIMENTO</strong> </p>
            </div>
            <div style="width: 58%;" class="box" id="bo12">
                <p class="p-tbl" style="font-size: 10px;" ><strong>19- NOME DO PROCEDIMENTO </strong></p>
            </div>
            <div style="width: 20%;" class="box" id="bo13">
                <p class="p-tbl" style="font-size: 10px;" ><strong>20- QUANTIDADE</strong></p>
                
            </div>
        </div>   
    </div>


    <div class="Container-Pacient-data">
        <div class="container-for-line">
            <div style="width: 100%;" class="box" id="box11">
                <Table class="table" style="width: 97%">
                    <tr>
                        <td style="width: 20%;">
                            <p><?php echo "$CodProcediment1" ?></p>
                        </td>
                        <td id="half-table">
                            <p><?php echo "$procedimentName1" ?></p>
                        </td>
                        <td style="width: 20%;">
                            <p style="text-align: center;"><p class="data" ><?php echo "$qtt1" ?></p></p>
                        </td>
                    </tr>
                </Table>
            </div>
        </div>   
    </div>

    <div class="Container-Pacient-data">
        <div class="container-for-line">
            <div style="width: 100%;" class="box" id="box11">
                <Table class="table" style="width: 97%">
                    <tr style="min-height:20px;">
                        <td style="width: 20%;">
                            <p><?php echo "$CodProcediment2" ?></p>
                        </td>
                        <td  id="half-table">
                            <p><?php echo "$procedimentName2" ?></p>
                        </td>
                        <td style="width: 20%;">
                            <p style="text-align: center;"><p class="data" ><?php echo "$qtt2" ?></p></p>
                        </td>
                    </tr>
                </Table>
            </div>
        </div>   
    </div>

    <div class="Container-Pacient-data">
        <div class="container-for-line">
            <div style="width: 100%;" class="box" id="box11">
                <Table class="table" style="width: 97%">
                    <tr>
                        <td style="width: 20%;">
                            <p><?php echo "$CodProcediment3" ?></p>
                        </td>
                        <td id="half-table">
                            <p><?php echo "$procedimentName3" ?></p>
                        </td>
                        <td style="width: 20%; ">
                            <p style="text-align: center;"><p class="data" ><?php echo "$qtt3" ?></p></p>
                        </td>
                    </tr>
                </Table>
            </div>
        </div>   
    </div>
    
    <div class="topic">                            <!--TOPICO PRETO DE DEMARCAÇÃO-->
        <div>
          <span style="color: white;">HIPÓTESE DIAGNÓSTICA</span>
        </div>
    </div>

    <div class="Container-Pacient-data">
        <div class="container-for-line">
            <div style="width: 97%;" class="box" id="box11">
                <p><strong>21- DESCRIÇÃO DO DIAGNÓSTICO</strong></p>
                <p class="data" ><?php echo "$description " ?></p>
            </div>
        </div>   
    </div>

    <div class="topic">                            <!--TOPICO PRETO DE DEMARCAÇÃO-->
        <div>
          <span style="color: white;">SOLICITAÇÃO</span>
        </div>
    </div>

    <div class="Container-Pacient-data">
        <div class="container-for-line">
            <div style="width: 70%;" class="box" id="box11">
                <p><strong>22- NOME DO PROFISSIONAL SOLICITANTE</strong></p>
                <p class="data" > <?php echo "$ProfessionalName" ?></p>
            </div>
            <div style="width: 27%;" class="box" id="box11">
                <p><strong>23- CRM</strong></p>
                <p class="data" > <?php echo "$crm" ?></p>
            </div>
        </div>   
    </div>
    <br>
    <br><br>
    <div class="Container-Pacient-data">
        <div class="container-for-line">
            <div style="width: 32.6%;" class="box" id="box11">
            </div>
            <div style="width: 32.6%;" class="box" id="box11">
                <p>---------------------------------------------------</p>
                <p style="font-size:9px;">24- ASSINATURA/CARIMBO(N REGISTRO DO CONSELHO)</p>
            </div>
            <div style="width: 32.6%; text-align: center;" class="box" id="box11">
                <p> &nbsp; /  &nbsp; &nbsp; &nbsp; &nbsp; / &nbsp;</p> 
                <p>---------------------</p>
                <p style="font-size:9px;"> 25- DATA</p>
            </div>
        </div>   
    </div>

    <div class="topic">                            <!--TOPICO PRETO DE DEMARCAÇÃO-->
        <div>
          <span style="color: white;">IDENTIFICAÇÃO DO ESTABELECIMENTO DE SAÚDE (EXECUTANTE)</span>
        </div>
    </div>

    <div class="Container-Pacient-data">  
        <div><!---->
            <div style="width: 70%;" class="box" id="box1">
                <p><strong>1- NOME DO ESTABELECIMENTO DE SAÚDE</strong></p>
                <p class="data" ><?php echo "$hospitExecut " ?></p>
            </div>
            
            <div class="box" id="box2">
                <p><strong>2 - CNES</strong></p>
                <p class="data" ><?php echo "$CnesExecut " ?></p>
            </div>

        </div>      
    </div>



</body>
</html>