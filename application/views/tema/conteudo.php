<div id="content">
  <!--start-top-serch-->
  <div id="content-header">
    <div></div>
    <div id="breadcrumb">
      <a href="<?= base_url() ?>" title="Dashboard" class="tip-bottom">Início</a>
      <?php if ($this->uri->segment(1) != null) {
        // Mapear os segmentos para os nomes desejados, excluindo 'lancamentos'
        $map = [
            'clientes' => 'Usuários',
            'produtos' => 'Materiais',
            'servicos' => 'Serviços',
            'vendas' => 'Vendas',
            'ordens' => 'Ordens',
            'garantias' => 'Garantias',
            'arquivos' => 'Arquivos',
            'cobrancas' => 'Cobranças'
        ];

        // Obter o texto baseado no segmento
        $segment1 = $this->uri->segment(1);
        $breadcrumbText = isset($map[$segment1]) ? $map[$segment1] : ucfirst($segment1);

        // Mostrar breadcrumb como link para todos os segmentos, exceto 'lancamentos'
        if ($segment1 !== 'lancamentos') {
          ?>
          <a href="<?= base_url() . 'index.php/' . $segment1 ?>" class="tip-bottom" title="<?= $breadcrumbText; ?>">
            <?= $breadcrumbText; ?>
          </a>
          <?php if ($this->uri->segment(2) != null) { ?>
            <a href="<?= base_url() . 'index.php/' . $segment1 . '/' . $this->uri->segment(2) . '/' . $this->uri->segment(3) ?>" class="current tip-bottom" title="<?= ucfirst($this->uri->segment(2)); ?>">
              <?= ucfirst($this->uri->segment(2)); ?>
            </a>
          <?php } ?>
        <?php } ?>
      <?php } ?>
    </div>
  </div>
  <div class="container-flu">
    <div class="row-fluid">
      <div class="span12">
        <?php if ($var = $this->session->flashdata('success')): ?>
          <script>swal("Sucesso!", "<?php echo str_replace('"', '', $var); ?>", "success");</script>
        <?php endif; ?>
        <?php if ($var = $this->session->flashdata('error')): ?>
          <script>swal("Falha!", "<?php echo str_replace('"', '', $var); ?>", "error");</script>
        <?php endif; ?>
        <?php if (isset($view)) {
            echo $this->load->view($view, null, true);
        } ?>
      </div>
    </div>
  </div>
</div>
