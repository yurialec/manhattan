<?php 

$title_page = "Programação / Comprar - Manhattan Café Theatro";
include dirname(__FILE__). '/../includes/header.php'; 

$area["topo"] = true;
$area["programacao"] = true;

if(!$area["topo"]) { echo '<style>body {background: #000} .navegation,.bg-topo {display:none;}</style>'; }

?>


<main class="main mb-0">

	<?php if($area["programacao"]) : ?>
	<section class="py-5"  data-animate="top" data-delay="3" id="programacao">
		<div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">

                
                    <div class="row mb-5">
                        <div class="col-sm-6">
                            <h1 class="text-warning">Programação / Comprar</h1>
                        </div>
                        
                    </div>


                    <div class="row gx-0">
                        <div class="col-lg-1">
                            <div class="d-block bg-black text-center fw-bold text-warning fs-2">1</div>
                        </div>
                        <div class="col-lg-11">



<div class="card mb-3 bg-dark text-white mb-4">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="assets/img/programacao/2.jpg" class="img-fluid rounded-start w-100" alt="18 AGO / SEXTA UMA NOITE ITALIANA">
    </div>
    <div class="col-md-8">
      <div class="card-body ps-lg-5">
        <h5 class="card-title text-warning mb-4"><span class="text-secondary">18 AGO / SEXTA</span> <br>
UMA NOITE ITALIANA</h5>
        <p class="card-text text-secondary">Romero Guimarães e Garçons Cantores.</p>
        <p class="card-text text-white">Uma Noite italiana para você curtir Juntamente com Romero Guimarães e Garçons Cantores. A parti das 20hrs.</p>

        
      </div>
    </div>
  </div>
</div>



                        </div>
                    </div>



                    <div class="row gx-0">
                        <div class="col-lg-1">
                            <div class="d-block bg-black text-center fw-bold text-warning fs-2">2</div>
                        </div>
                        <div class="col-lg-11">



<div class="card mb-3 bg-dark text-white mb-4">

      <div class="card-body">
        <p class="text-warning">SELECIONE A QUANTIDADE DESEJADA</p>
        
        <div class="table-responsive">
        <table class="table table-bordered text-secondary border-secondary">
						<tbody><tr>
							<th id="col_ingresso">Ingresso</th>
							<th id="col_valor">Valor Unitário</th>
							<th id="col_qtd">Quantidade</th>
							<th id="col_total">Total</th>
						</tr>	
						  <tr>
							<td>
                                <p class="text-warning">
                                    <strong>UMA NOITE ITALIANA</strong>
                                </p>
								<p class="artist"> <em>O couvert artístico individual está sujeito a compartilhamento de mesas.
                                Em caso de mesa compartilhada, o Manhattan reserva-se o direito de escolher a mesa à compartilhar.</em></p>
							</td>
							<td>
								<p class="text-warning">
									INGRESSO: R$ 80,00 
								</p>
							</td>
							<td>
								<input type="hidden" name="quantidade_ingressos" data-tipo="mesa" id="quantidade_ingressos" value="00">
								<select name="quantidade_ingressos" data-tipo="individual" id="quantidade_ingressos" class="custom">
									<option value="00">00</option>
									<option value="01">01</option>
									<option value="02">02</option>
									<option value="03">03</option>
									<option value="04">04</option>
									<option value="05">05</option>
									<option value="06">06</option>
									<option value="07">07</option>
									<option value="08">08</option>
									<option value="09">09</option>
									<option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option>
								</select>
							</td>
							<td class="total">
								<p class="text-warning">R$ <span id="totalIndividual">0,00</span></p>
							</td>
						</tr>
					</tbody></table>
                    </div>

        <p class="text-secondary">
        <strong>Observações:</strong> <br>
1. Mesas exclusivas a partir da compra de 4 ingressos (couvert artístico).
        </p>


        <div class="row">
            <div class="col-lg-6">
                <p>
                <input type="checkbox" name="conditions"  checked="ckecked"> <a href="#" data-bs-toggle="modal" data-bs-target="#termos" class="text-warning"><small><small>Sujeito a termos e condições do Manhattan</small></small></a>
                </p>
            </div>

            <div class="col-lg-6 text-end">
            <button class="btn btn-warning confirmar" onclick="showDiv('.qrcodepix')">GERAR PIX (QR CODE)</button>
            </div>
        </div>

        <div class="qrcodepix d-none">

            <div class="row">
                <div class="col-lg-12 pt-5">

                <div class="bg-white text-black p-4 mb-4">
                    <div class="row">
                        <div class="col-lg-4">
                            <p class="fw-bold">Imagem de QRCode do Pix:</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPUAAAD1AQMAAACyfyEmAAAABlBMVEX///8AAABVwtN+AAACg0lEQVRYhe1YQY6jQAz0KAeOPKF/Ej6GBBIfG37ST+DIAcVbVSYB7TygfUgfEobqkTptV7lss+/6rqard/dXv7gNftg++Gz24wte8ikDjq+nPdx/bSQU22sAGfDF9ye+9ydedC+baufbo2JTIlz3uxHyueCSl2z4bLjfh+9mk7Ynwhn/3hFwJQHSFZf8+C8/WuJnQurUn48//GqGn5sY+qPwuqsNd6g1jmtkQvJqkZp4UUCnSX+mwBHrbgWhIT1H8XWzQhGq7pulwPtQbbIaqemgdvfqj7L/ZMHdI0nXbTS95dHz4Ag4VRusjp1I0oGbXpYDpzSuuFUemPGf6g4l92696nNbfAlq40eMpvzsUKkLctZS4HjeqT84v5hksekSodY4bhWGgSbi4WK6qH3Pj7a4pAeqLZx1BeVwLvI8GfD+CP7Iv2on/Nd4OtkM+AzBJmF+YQ1N9ZlODDtz4KbQj4VQODHpz54Gp1ajvqjSxMeTOXvL38Y4Yo0DR9UbtrHQJN7qd2M8eiWvqi9Ucle67u9/bo1TtZ2tic4P61XZCVSkaxYctYSGaw2TCBNGJl3+ujVuJQRx2KSPyFT61+7Kj7a4WjvFn7dK1uD8Vu79VVOc9XkIf30u0d1v8W+KgzXsikVoWv8D6So7dvV/TXHot1F15Lo0ZIC/wbs0OGOthAR/Qh8l3R9/0RinfyCX5Q8lPS6lvPq7tviZBJwq4GOISjhbGjzmH2w4qY8kOZ9qOIkM+Bzzy5gPcoip0cLVn7bG366LhBHTjZ385a8z4MrK0/9DKbcQ8US4seGc5GT5I8bgVApc8Zfh4vxDSapxZp8Ef/OHTUCM3jSf+cS/Mf5d39Vs/QPpKVPzHvxligAAAABJRU5ErkJggg==" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-8 text-center">
                        <textarea style="text-align: center; width: 100%;resize: none; padding: 15px; font-size: 12px" class="text-monospace" id="brcodepix" rows="2" cols="130" onclick="copiar()">00020126330014br.gov.bcb.pix011177184076400520400005303986540580.005802BR5925Ronald Tadeu Rego Menezes6006Recife620705033666304702C</textarea>

                            <p class="fw-bold">Linha do Pix (copia e cola):</p>
                            <p>
                            <button class="btn btn-warning" title="Copiar código pix" id="execCopy">COPIAR</button>
                            </p>
                        </div>
                    </div>
                </div>

                <p class="text-warning">
                <small>APÓS EFETUAR O PAGAMENTO, VOCÊ DEVE ENVIAR PARA O WHATSAPP (81) 98888-4818 OU PARA O E-MAIL EVENTOS@MANHATTANBAR.COM.BR.</small>
                </p>
                </div>
            </div>

        </div>

	<script>
const botaoCopiar = document.getElementById('execCopy');
botaoCopiar.addEventListener('click', execCopy);

function execCopy() {
  document.querySelector("#brcodepix").select();
  document.execCommand("copy");

  execTexto("COPIADO");
}

function execTexto(texto) {
    botaoCopiar.textContent = texto;
}

function showDiv(classDiv) {
    document.querySelector(classDiv).classList.remove('d-none');
}

    </script>		    
			

     
                    
						
					


      </div>

</div>
<p>
            <a href="javascript:history.go(-1);" class="btn btn-outline-primary">&laquo; Voltar</a>
        </p>


                        </div>
                    </div>

                </div>
            </div>


		</div>
	</section>
	<?php endif; ?>


	



	

</main>


<?php 

include dirname(__FILE__). '/../includes/footer.php';

?>