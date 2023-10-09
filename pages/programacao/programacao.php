<?php

$title_page = "Programação - Manhattan Café Theatro";
include dirname(__FILE__) . '/../includes/header.php';

$area["topo"] = true;
$area["programacao"] = true;

if (!$area["topo"]) {
  echo '<style>body {background: #000} .navegation,.bg-topo {display:none;}</style>';
}

?>


<main class="main mb-0">

  <?php if ($area["programacao"]) : ?>
    <section class="py-5" data-animate="top" data-delay="3" id="programacao">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">


            <div class="row mb-5">
              <div class="col-sm-6">
                <h1 class="text-warning">Programação</h1>
              </div>
              <div class="col-sm-6 text-lg-end">
                <div class="bg-dark text-warning p-2 d-inline-block">
                  <label class="d-flex align-items-center"><span class="me-3">FILTRAR&nbsp;POR:</span> <select class="form-control" name="" id="">
                      <option value="">Mês</option>
                      <option value="0">Todos</option>
                      <option value="1">Janeiro</option>
                      <option value="2">Fevereiro</option>
                      <option value="3">Março</option>
                      <option value="4">Abril</option>
                      <option value="5">Maio</option>
                      <option value="6">Junho</option>
                      <option value="7">Julho</option>
                      <option value="8">Agosto</option>
                      <option value="9">Setembro</option>
                      <option value="10">Outubro</option>
                      <option value="11">Novembro</option>
                      <option value="12">Dezembro</option>
                    </select>
                  </label>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-lg-12">

                <?php for ($i = 0; $i < 5; $i++) : ?>

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

                          <a href="vendas-online/comprar" class="btn btn-outline-primary mb-2">COMPRAR </a>

                        </div>
                      </div>
                    </div>
                  </div>

                <?php endfor; ?>

              </div>
            </div>

          </div>
        </div>


      </div>
    </section>
  <?php endif; ?>








</main>


<?php

include dirname(__FILE__) . '/../includes/footer.php';

?>