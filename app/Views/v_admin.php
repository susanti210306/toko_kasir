<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Produk</p>
              </div>
              <div class="icon">
              <i class="fas fa-boxes"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Kategori</p>
              </div>
              <div class="icon">
                <i class="fas fa-th-list"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Satuan</p>
              </div>
              <div class="icon">
                <i class="fas fa-list"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>User</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-md-4">
            <!-- Info Boxes Style 2 -->
            <div class ="info-box mb-3 bg-navy">
              <span class="info-box-icon"><i class="fas fa-money-bill-wave"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Income Hari Ini</span>
                <span class="info-box-number">Rp 5,200</span>
              </div>
              <!-- /.info-box-content -->
            </div>
</div>

<div class="col-md-4">
            <!-- Info Boxes Style 2 -->
            <div class ="info-box mb-3 bg-pink">
              <span class="info-box-icon"><i class="fas fa-money-bill-wave"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Income Bulan Ini</span>
                <span class="info-box-number">Rp 5,200</span>
              </div>
              <!-- /.info-box-content -->
            </div>
</div>

<div class="col-md-4">
            <!-- Info Boxes Style 2 -->
            <div class ="info-box mb-3 bg-purple">
              <span class="info-box-icon"><i class="fas fa-money-bill-wave"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Income Tahun Ini</span>
                <span class="info-box-number">Rp 5,200</span>
              </div>
              <!-- /.info-box-content -->
            </div>
</div>

<div class="col-md-12">
  <canvas id="myChart" width="100%" height="35px"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');
  const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: [
          'rbga(255, 99, 132, 0.2)',
          'rbga(54, 162, 235, 0.2)',
          'rbga(255, 206, 86, 0.2)',
          'rbga(75, 192, 192, 0.2)',
          'rbga(153, 102, 255, 0.2)',
          'rbga(255, 159, 64, 0.2)',
        ],
        borderColor: [
         'rbga(255, 99, 132, 1)',
          'rbga(54, 162, 235, 1)',
          'rbga(255, 206, 86, 1)',
          'rbga(75, 192, 192, 1)',
          'rbga(153, 102, 255, 1)',
          'rbga(255, 159, 64, 1)',
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>