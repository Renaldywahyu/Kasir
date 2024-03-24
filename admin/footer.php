    <footer class="py-4 bg-light mt-auto">
      <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
          <div class="text-muted">Copyright &copy; MM Nurul Iman <?= date('Y') ?></div>
        </div>
      </div>
    </footer>
    </div>
    </div>
    <script src="../js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="../js/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../js/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="../js/datatables-simple-demo.js"></script>
    <script>
      window.addEventListener('DOMContentLoaded', event => {
        const datatablesSimple1 = document.getElementById('datatablesSimple1');
        if (datatablesSimple1) {
          new simpleDatatables.DataTable(datatablesSimple1);
        }
      });
    </script>
    </body>

    </html>