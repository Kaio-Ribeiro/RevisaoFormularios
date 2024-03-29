<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Delivery</title>
    <link href="css/pedidos.css" rel="stylesheet" type="text/css" />
    <meta charset="utf-8" />
</head>
<body >
    <div id="wrap">
        <form method="post" action='pedido/mostrar.php' id="delivery-form" >
        <div>
            <div class="cont_order">
               <fieldset>
                <legend>Monte sua refeição</legend>
                <div class='field_container'>
                <label >Acompanhamento</label>
                <label class='radiolabel'><input type="radio"  value="Arroz" name="acompanhamento"/>Arroz branco</label><br/>
                <label class='radiolabel'><input type="radio"  value="Macarrao"  name="acompanhamento"/>Macarrão alho-e-óleo</label><br/>
                <label class='radiolabel'><input type="radio"  value="Farofa"  name="acompanhamento"/>Farofa de calabreza</label><br/>
                <label class='radiolabel'><input type="radio"  value="Salada"  name="acompanhamento"/>Salada de folhas</label><br/>
                </div>
                
                <div class='field_container'>
                    <label for="flavor">Prato principal:</label >
                    <select id="flavor" name='prato_principal' >
                    <option value="">Escolha uma opção do prato principal</option>
                    <option value="bife_parmegiana">Bife à parmegiana</option>
                    <option value="frango_parmegiana">Frango à parmegiana</option>
                    <option value="lasanha_brocolis">Lasanha de brócolis</option>
                    <option value="peixe_frito">Peixe frito</option>
                   </select>
                </div>
                <div class='field_container'>
                    <label >Adicionais:</label>
                    <label><input type="checkbox" value="Batata-frita" name="adicionais[0]"/>Batata-frita</label>
                    <label><input type="checkbox" value="Batata-palha" name="adicionais[1]"/>Batata-palha</label>
                    <label><input type="checkbox" value="Oregano" name="adicionais[2]"/>Orégano</label>
                    <label><input type="checkbox" value="Vinagrete" name="adicionais[3]"/>Vinagrete</label>
                    <label><input type="checkbox" value="Tomate" name="adicionais[4]"/>Tomate</label>
                    <label><input type="checkbox" value="Cebola" name="adicionais[5]"/>Cebola</label>
               </div>
               <div class='field_container'>
                   <label class="inlinelabel"><input type="checkbox" id="agree" name="agree" value="true"/> Confirmo que as opções são verdadeiras e que está de acordo com o meu pedido.</label>
               </div>
              </fieldset>
            </div>
            
        	<div class="cont_details">
            	<fieldset>
                <legend>Informações do cliente</legend>
                <label for='name'>Nome completo</label>
                <input type="text" id="name" name="nome"/>
                <br/>
                <label for='address'>Endereço de entrega</label>
                <input type="text" id="address" name="address"/>
                <br/>
                <label for='phonenumber'>Telefone</label>
                <input type="text"  id="phonenumber" name="phonenumber"/>
                <br/>
                </fieldset>
            </div>
            <input type='submit' id='submit' name="enviado" value='Realizar pedido'  />
        </div>  
       </form>
	</div>

</body>
</html>