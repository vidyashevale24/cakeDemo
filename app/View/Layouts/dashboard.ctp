<?php echo $this->element('header'); ?>
<body>
  <div class="container-scroller">
    <?php echo $this->element('navbar'); ?>
    <div class="container-fluid page-body-wrapper">
      <?php echo $this->element('sidebar'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                    <div id="content">

                      <?php echo $this->Flash->render(); ?>

                      <?php echo $this->fetch('content'); ?>
                      
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <div id="footer">
          <?php echo $this->element('footer'); ?>
        </div>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
<?php echo $this->element('scripts'); ?>
</body>

</html>
