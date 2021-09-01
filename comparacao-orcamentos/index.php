<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

        <title>Comparação de orçamentos</title>

        <script type="text/javascript" src="js/jquery.min.js" ></script>
        <script type="text/javascript" src="js/jquery.maskMoney.js" ></script>
        <script src="js/validacao/jquery.validate.min.js"></script>
        <script src="js/validacao/additional-methods.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $( "#form" ).validate({
                    rules: {
                        largura: {       
                            required: true
                        }
                    },
                    messages: {
                        largura: "campo largura é obrigatório"
                    }
                });
                $("input.dinheiro").maskMoney({prefix:'R$ ', decimal:",", thousands:"."});
            });
        </script>       

        <link href="css/style.css" rel="stylesheet"/>
        <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
		<link rel="shortcut icon" href="img/logos/logo-pequeno.png" />
        <link rel="stylesheet" href="css/site-demos.css">
    </head>

    <body>
        <nav class="navbar navbar-light bg-light nav justify-content-center">
            <a class="navbar-brand" href="#">
                <img src="img/logos/logo.png" width="160" height="100" class="d-inline-block align-top" alt=""/>
            </a>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <form method="post" id="form" action="">
                        <div class="form-group">
                            <label>Comprimento do telhado:</label>
						    <select id="comprimento" class="form-control" name="comprimento">
                                <option value="1.0" <?php echo (isset($_POST["comprimento"]) && $_POST["comprimento"] == '1.0')? 'Selected' : '' ;?>>1,0</option>
                                <option value="1.5" <?php echo (isset($_POST["comprimento"]) && $_POST["comprimento"] == '1.5')? 'Selected' : '' ;?>>1,5</option>
                                <option value="2.0" <?php echo (isset($_POST["comprimento"]) && $_POST["comprimento"] == '2.0')? 'Selected' : '' ;?>>2,0</option>
                                <option value="2.5" <?php echo (isset($_POST["comprimento"]) && $_POST["comprimento"] == '2.5')? 'Selected' : '' ;?>>2,5</option>
                                <option value="3.0" <?php echo (isset($_POST["comprimento"]) && $_POST["comprimento"] == '3.0')? 'Selected' : '' ;?>>3,0</option>
                                <option value="3.5" <?php echo (isset($_POST["comprimento"]) && $_POST["comprimento"] == '3.5')? 'Selected' : '' ;?>>3,5</option>
                                <option value="4.0" <?php echo (isset($_POST["comprimento"]) && $_POST["comprimento"] == '4.0')? 'Selected' : '' ;?>>4,0</option>
                                <option value="4.5" <?php echo (isset($_POST["comprimento"]) && $_POST["comprimento"] == '4.5')? 'Selected' : '' ;?>>4,5</option>
                                <option value="5.0" <?php echo (isset($_POST["comprimento"]) && $_POST["comprimento"] == '5.0')? 'Selected' : '' ;?>>5,0</option>
                                <option value="5.5" <?php echo (isset($_POST["comprimento"]) && $_POST["comprimento"] == '5.5')? 'Selected' : '' ;?>>5,5</option>
                                <option value="6.0" <?php echo (!isset($_POST["comprimento"]) || $_POST["comprimento"] == '' || $_POST["comprimento"] == '6.0')? 'Selected' : '' ;?>>6,0</option>
                                <option value="6.5" <?php echo (isset($_POST["comprimento"]) && $_POST["comprimento"] == '6.5')? 'Selected' : '' ;?>>6,5</option>
                                <option value="7.0" <?php echo (isset($_POST["comprimento"]) && $_POST["comprimento"] == '7.0')? 'Selected' : '' ;?>>7,0</option>
                                <option value="7.5" <?php echo (isset($_POST["comprimento"]) && $_POST["comprimento"] == '7.5')? 'Selected' : '' ;?>>7,5</option>
                                <option value="8.0" <?php echo (isset($_POST["comprimento"]) && $_POST["comprimento"] == '8.0')? 'Selected' : '' ;?>>8,0</option>
                                <option value="8.5" <?php echo (isset($_POST["comprimento"]) && $_POST["comprimento"] == '8.5')? 'Selected' : '' ;?>>8,5</option>
                                <option value="9.0" <?php echo (isset($_POST["comprimento"]) && $_POST["comprimento"] == '9.0')? 'Selected' : '' ;?>>9,0</option>
                                <option value="9.5" <?php echo (isset($_POST["comprimento"]) && $_POST["comprimento"] == '9.5')? 'Selected' : '' ;?>>9,5</option>
                                <option value="10.0" <?php echo (isset($_POST["comprimento"]) && $_POST["comprimento"] == '10.0')? 'Selected' : '' ;?>>10,0</option>
                                <option value="10.5" <?php echo (isset($_POST["comprimento"]) && $_POST["comprimento"] == '10.5')? 'Selected' : '' ;?>>10,5</option>
                                <option value="11.0" <?php echo (isset($_POST["comprimento"]) && $_POST["comprimento"] == '11.0')? 'Selected' : '' ;?>>11,0</option>
                            </select> <br/>
                        </div>

                        <div class="form-group" name="largura">
							<label for="exampleInputEmail1 field">Largura do telhado:</label>
							<input type="number" class="form-control left" name="largura" id="largura" value="<?php echo (isset($_POST["largura"]) && $_POST["largura"] != "") ? $_POST["largura"] : "7"?>" /> <br/>
						</div>

						<div class="form-group">                  
							<label>Super Max: (Valor unitário da telha)</label>
							<input type="text" class="form-control dinheiro" name="supermax" id="supermax" <?php echo (isset($_POST["supermax"]) && $_POST["supermax"] != "") ? "value='".$_POST["supermax"]."'" : ""?> /> <br/>
						</div>

						<div class="form-group">
							<label>Max: (Valor unitário da telha)</label>
							<input type="text" class="form-control dinheiro" name="max" id="max" <?php echo (isset($_POST["max"]) && $_POST["max"] != "") ? "value='".$_POST["max"]."'" : ""?> /> <br/>
						</div>

						<div class="form-group">
							<label>Plus: (Valor unitário da telha)</label>
							<input type="text" class="form-control dinheiro" name="plus" id="plus" <?php echo (isset($_POST["plus"]) && $_POST["plus"] != "") ? "value='".$_POST["plus"]."'" : ""?>/> <br/>
						</div>

						<div class="form-group">
							<label>Coppo Venetto: (Valor unitário da telha)</label>
							<input type="text" class="form-control dinheiro" name="coppo" id="coppo" <?php echo (isset($_POST["coppo"]) && $_POST["coppo"] != "") ? "value='".$_POST["coppo"]."'" : ""?>/> <br/>
						</div>

                        <button type="submit" class="btn btn-primary" name="boton">Enviar</button>
                    </form> 
                </div>
            
				<?php
                if(isset($_POST["boton"])){
					$comprimento = $_POST["comprimento"];
					$largura = $_POST["largura"];
				?>
					<div class="col-sm-12 col-md-8">
						<div class="row">
							<p>
							<h3>Super Max</h3>
							
							<div class="row box">
								<img class="img-thumbnail" src="img/supermax.png" alt="">
							</div>
							
							<div class="col-12">
							<?php 
								$ripasSuperMax = ceil($comprimento / 0.50);
							?>
							<span class="btn btn-info" style="width:230px">Quantidade de Ripas - <?=$ripasSuperMax?></span> = <var>Comprimento do telhado / Comprimento da telha</var><br/>
							<?php 
								echo ("Ripas = <var>$comprimento / 0,50</var><br/>");
								
								$telhasSuperMax = $ripasSuperMax * ceil($largura/0.35);
							?>
								<span class="btn btn-warning" style="width:230px">Quantidade de telhas - <?=$telhasSuperMax?></span> = <var>Quantidade de ripas * (Largura do telhado / Largura da telha)</var><br/>
								
								<?php
								echo ("Telhas = <var>$ripasSuperMax * ($largura / 0,35)</var> <br/>");

								$pesoSuperMax = round($telhasSuperMax * 6.20);
								?>
								<span class="btn btn-danger" style="width:230px">Peso - <?=$pesoSuperMax?>kg</span> = <var>Quantidade de telhas * Peso da telha</var><br/>
								<?php 
								echo ("Peso = <var>$telhasSuperMax * 6,2kg</var><br/>");
								
								if(isset($_POST["supermax"]) && $_POST["supermax"] != ""){
									$supermax1 = str_replace("R$", "", $_POST["supermax"]);
									$supermax1 = str_replace(",", ".", $supermax1);
									$supermax = $_POST["supermax"];
									$valorSuperMax = $telhasSuperMax * $supermax1;
							?>
								
									<span class="btn btn-success" style="width:230px">Valor - R$ <span class='dinheiro'><?php echo number_format($valorSuperMax ,2, ',', '.')?></span></span> = <var>Quantidade de telhas * Valor informado</var><br/>
									<?php 
									echo "Total = <var>$telhasSuperMax * $supermax </var> <br/>";
							} 	?>	
							</div>
							</p>
							<hr/>
						</div>
						
						<div class="row">
							<p>
							<h3>Max</h3>
							
							<div class="row box">
								<img class="img-thumbnail" src="img/max.png" alt="">
							</div>
							
							<div class="col-12">
								
								<?php 
								$ripasMax = ceil($comprimento / 0.41);
								?>
								<span class="btn btn-info" style="width:230px">Quantidade de Ripas - <?=$ripasMax?></span> = <var>Comprimento do telhado / Comprimento da telha</var><br/>
								<?php 
								echo ("Ripas = <var>$comprimento / 0,41</var><br/>");
								
								$telhasMax = $ripasMax * ceil($largura/0.35);
								?>
								<span class="btn btn-warning" style="width:230px">Quantidade de telhas - <?=$telhasMax?></span> = <var>Quantidade de ripas * (Largura do telhado / Largura da telha)</var><br/>
								
								<?php
								echo ("Telhas = <var>$ripasMax * ($largura / 0,35)</var> <br/>");

								$pesoMax = round($telhasMax * 5.50);
								?>
								<span class="btn btn-danger" style="width:230px">Peso - <?=$pesoMax?>kg</span> = <var>Quantidade de telhas * Peso da telha</var><br/>
								<?php 
								echo ("Peso = <var>$telhasMax * 5,5kg</var><br/>");
								
								if(isset($_POST["max"]) && $_POST["max"] != ""){
									$max1 = str_replace("R$", "", $_POST["max"]);
									$max1 = str_replace(",", ".", $max1);
									$max = $_POST["max"];
									$valorMax = $telhasMax * $max1;
									?>
								
									<span class="btn btn-success" style="width:230px">Valor - R$ <span class='dinheiro'><?php echo number_format($valorMax ,2, ',', '.')?></span></span> = <var>Quantidade de telhas * Valor informado</var><br/>
									<?php 
									echo "Total = <var>$telhasMax * $max</var> <br/> <br/>";
								} ?>	
							</div>
							</p>
						
							<hr/>
						<div class="row">
							<p>
							<h3>Plus</h3>
							
							<div class="row box">
								<img class="img-thumbnail" src="img/pluss.png" alt="">
							</div>
							
							<div class="col-12">
								<?php 
								$ripasplus = ceil($comprimento / 0.53);
								?>
								<span class="btn btn-info" style="width:230px">Quantidade de Ripas - <?=$ripasplus?></span> = <var>Comprimento do telhado / Comprimento da telha</var><br/>
								<?php 
								echo ("Ripas = <var>$comprimento / 0,53</var><br/>");
								
								$telhasplus = $ripasplus * ceil($largura/0.30);
								?>
								<span class="btn btn-warning" style="width:230px">Quantidade de telhas - <?=$telhasplus?></span> = <var>Quantidade de ripas * (Largura do telhado / Largura da telha)</var><br/>
								
								<?php
								echo ("Telhas = <var>$ripasplus * ($largura / 0,30)</var> <br/>");

								$pesoplus = round($telhasplus * 6.20);
								?>
								<span class="btn btn-danger" style="width:230px">Peso - <?=$pesoplus?>kg</span> = <var>Quantidade de telhas * Peso da telha</var><br/>
								<?php 
								echo ("Peso = <var>$telhasplus * 6,2kg</var><br/>");
								
								if(isset($_POST["plus"]) && $_POST["plus"] != ""){
									$plus1 = str_replace("R$", "", $_POST["plus"]);
									$plus1 = str_replace(",", ".", $plus1);
									$plus = $_POST["plus"];
									$valorplus = $telhasplus * $plus1;
									?>
								
									<span class="btn btn-success" style="width:230px">Valor - R$ <span class='dinheiro'><?php echo number_format($valorplus ,2, ',', '.')?></span></span> = <var>Quantidade de telhas * Valor informado</var><br/>
									<?php 
									echo "Total = <var>$telhasplus * $plus</var> <br/> <br/>";
								} ?>	
							</div>
							</p>
							
							<hr/>
						</div>
						
						<div class="row">
							<p>
							<h3>Coppo Venetto</h3>
							
							<div class="row box">
								<img class="img-thumbnail" src="img/coppo.png" alt="">
							</div>
							
							<div class="col-12">
								<?php 
								$ripascoppo = ceil($comprimento / 0.32);
								?>
								<span class="btn btn-info" style="width:230px">Quantidade de Ripas - <?=$ripascoppo?></span> = <var>Comprimento do telhado / Comprimento da telha</var><br/>
								<?php 
								echo ("Ripas = <var>$comprimento / 0,32</var><br/>");
								
								$telhascoppo = $ripascoppo * ceil($largura/0.30);
								?>
								<span class="btn btn-warning" style="width:230px">Quantidade de telhas - <?=$telhascoppo?></span> = <var>Quantidade de ripas * (Largura do telhado / Largura da telha)</var><br/>
								
								<?php
								echo ("Telhas = <var>$ripascoppo * ($largura / 0,30)</var> <br/>");

								$pesocoppo = round($telhascoppo * 4.70);
								?>
								<span class="btn btn-danger" style="width:230px">Peso - <?=$pesocoppo?>kg</span> = <var>Quantidade de telhas * Peso da telha</var><br/>
								<?php 
								echo ("Peso = <var>$telhascoppo * 4,7kg</var><br/>");
								
								if(isset($_POST["coppo"]) && $_POST["coppo"] != ""){
									$coppo1 = str_replace("R$", "", $_POST["coppo"]);
									$coppo1 = str_replace(",", ".", $coppo1);
									$coppo = $_POST["coppo"];
									$valorcoppo = $telhascoppo * $coppo1;
									?>
								
									<span class="btn btn-success" style="width:230px">Valor - R$ <span class='dinheiro'><?php echo number_format($valorcoppo ,2, ',', '.')?></span></span> = <var>Quantidade de telhas * Valor informado</var><br/>
									<?php 
									echo "Total = <var>$telhascoppo * $coppo</var> <br/>";
								} ?>
							</div>
							</p>

							<div>

					<table class="table table-bordered table-striped">
  						<thead>
    						<tr>
      							<th scope="col">#</th>
      							<th scope="col">Coppo</th>
      							<th scope="col">Max</th>
      							<th scope="col">Plus</th>
								<th scope="col">Super Max</th>
    						</tr>
  						</thead>

						<tbody>
							<tr class="btn-info">
      							<th scope="row">Quantidade de Ripas</th>
      							<td><?=$ripascoppo?></td>
      							<td><?=$ripasMax?></td>
      							<td><?=$ripasplus?></td>
								<td><?=$ripasSuperMax?></td>
    						</tr>

							<tr class="btn-warning">
      							<th scope="row">Quantidade de Telhas</th>
      							<td><?=$telhascoppo?></td>
      							<td><?=$telhasMax?></td>
      							<td><?=$telhasplus?></td>
								<td><?=$telhasSuperMax?></td>
    						</tr>

							<tr class="btn-danger">
      							<th scope="row">Peso total</th>
      							<td><?=number_format($pesocoppo, 0, '', '.')?> kg</td>
      							<td><?=number_format($pesoMax, 0, '', '.')?> kg</td>
      							<td><?=number_format($pesoplus, 0, '', '.')?> kg</td>
								<td><?=number_format($pesoSuperMax, 0, '', '.')?> kg</td>
    						</tr>

							<tr class="btn-success">
      							<th scope="row">Valor</th>
      							<td>R$ <span class='dinheiro'><?php echo number_format($valorcoppo ,2, ',', '.')?></span> </td>
								<td>R$ <span class='dinheiro'><?php echo number_format($valorMax ,2, ',', '.')?></span> </td>
      							<td>R$ <span class='dinheiro'><?php echo number_format($valorplus ,2, ',', '.')?></span> </td>
								<td>R$ <span class='dinheiro'><?php echo number_format($valorSuperMax ,2, ',', '.')?></span> </td>
    						</tr>

						</tbody>
					</table>
				</div>

							<hr/>
						</div>
					</div>
				<?php
			 } ?>

			</div>
        </div>

    </body>
</html>