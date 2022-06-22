<?php 
?>
<!-- Search Modal -->
<div
    class="modal fade search-modal"
    id="search-modal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="searchModal"
    aria-hidden="true"
  >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content perfect-scrollbar">
      <div class="modal-body">
        <form role="search" id="search-form" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
          <div class="container">
            <div class="row variable-gutters">
              <div class="col">
                <div class="modal-title">
                  <button
                    class="search-link d-md-none"
                    type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#search-modal"
                    aria-label="Cerca nel sito"
                  >
                    <svg class="icon icon-md">
                      <use
                        href="#it-arrow-left"
                      ></use>
                    </svg>
                  </button>
                  <span><?php _e("Cerca","design_comuni_italia"); ?></span>
                  <button
                    class="search-link d-none d-md-block"
                    type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#search-modal"
                    data-dismiss="modal" 
                    aria-label="Close"
                  >
                    <svg class="icon icon-md">
                      <use
                        href="#it-close-big"
                      ></use>
                    </svg>
                  </button>
                </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <svg class="icon icon-md">
                            <use
                              href="#it-search"
                            ></use>
                          </svg>
                        </div>
                      </div>
                      <label for="search">Con Etichetta</label>
                      <input
                        type="search"
                        class="form-control"
                        id="search"
                        name="s"
                        placeholder="<?php _e("Cerca nel sito","design_comuni_italia"); ?>"
                        value="<?php echo get_search_query(); ?>"
                      />
                    </div>
                    <button
                      type="submit"
                      class="btn btn-primary"
                      data-bs-toggle="modal"
                      data-bs-target="#"
                    >
                      <span class="">Cerca</span>
                    </button>
                  </div>
              </div>
            </div>
            <div class="row variable-gutters">
              <div class="col-lg-5">
                <div class="searches-list-wrapper">
                  <div class="other-link-title">FORSE STAVI CERCANDO</div>
                  <ul class="searches-list">
                    <li>
                      <a href="#" aria-label="I numeri della scuola"
                        >Rilascio Carta Identità Elettronica (CIE)</a
                      >
                    </li>
                    <li>
                      <a href="#" aria-label="Organigramma"
                        >Cambio di residenza</a
                      >
                    </li>
                    <li>
                      <a href="#" aria-label="Trasporto scolastico"
                        >Tributi online</a
                      >
                    </li>
                    <li>
                      <a href="#" aria-label="Festività natalizie"
                        >Prenotazione appuntamenti</a
                      >
                    </li>
                    <li>
                      <a href="#" aria-label="Meccanica quantistica"
                        >Rilascio tessera elettorale</a
                      >
                    </li>
                    <li>
                      <a href="#" aria-label="Matematica for dummies"
                        >Voucher connettività</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Search Modal -->

