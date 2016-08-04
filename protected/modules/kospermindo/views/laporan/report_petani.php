<?php
	Yii::app()->clientScript->registerScript('search', "
		var element = $('#main-menu li[data-nav=\"laporan\"]');
		element.addClass('active opened');
		element.find('ul').addClass('visible').removeAttr('style');
		element.find('ul').find('li:nth-child(2)').addClass('active');
");
?>
<div class="headline">
  <ol class="breadcrumb bc-3">
    <li>
      <a href="<?= Kospermindo::getBaseUrl(); ?>"><i class="entypo-home"></i>Beranda</a>
    </li>
    <li class="active">
      <strong><?php echo 'Laporan Petani'; ?></strong>
    </li>
  </ol>
  <h2>Laporan Petani</h2><br/>
</div>

<div class="row">
  <div class="col-sm-3">

    <div class="tile-stats tile-aqua">
      <div class="icon"><i class="entypo-"></i></div>
      <div class="num" data-start="0" data-end="<?= !empty($allFarmers) ? $allFarmers : "0"; ?>" data-postfix=""
           data-duration="1500" data-delay="1200">0
      </div>
      <span><strong>Orang</strong></span>

      <h3>Total User</h3>

    </div>

  </div>

  <div class="col-sm-3">

    <div class="tile-stats tile-blue">

      <div class="num" data-start="0" data-end="<?= !empty($allWarehouses) ? $allWarehouses : "0"; ?>" data-postfix=""
           data-duration="1500" data-delay="1800">0
      </div>
      <span><strong>Gudang</strong></span>

      <h3>Total Gudang</h3>

    </div>

  </div>

  <div class="col-sm-3">

    <div class="tile-stats tile-green">

      <div class="num" data-start="0" data-end="<?= !empty($allGroups) ? $allGroups : "0"; ?>" data-postfix=""
           data-duration="1500" data-delay="1800">0
      </div>

      <span><strong>Kelompok</strong></span>

      <h3>Total Kelompok</h3>
    </div>

  </div>
</div>
<br/>

<hr/>
	<?php $this->renderPartial('/widget/search-filter');?>
<br/>

<table class="table table-hover table-responsive">
  <thead>
  <tr>
    <th>Nama Petani</th>
    <th>Kelompok</th>
    <th>Gudang</th>
    <th class="text-center">Total Panen (Ton)</th>
    <th class="text-center">Kadar Air</th>
    <th class="text-center">Jumlah Bentangan</th>
  </tr>
  </thead>

  <tbody>
  <?php foreach ($allfarmerMenu as $key => $value) { ?>
    <tr style="cursor: pointer"
        onclick="window.location = '<?= $this->baseUrl; ?>/kospermindo/report/detil?id=<?= strtolower($value->id); ?>'">
      <td><?= $value->nama_petani ?></a></td>
      <td><?= $farmergroup[$key][0]['nama_kelompok']; ?></td>
      <td><?= $farmergroup[$key][0]['idgudang']; ?></td>
      <td
        class="text-center"><?= !empty($totalpanenpetani[$key][0]['total_panen']) ? $totalpanenpetani[$key][0]['total_panen'] : "0"; ?></td>
      <td
        class="text-center"><?= !empty($totalpanenpetani[$key][0]['kadar_air']) ? $totalpanenpetani[$key][0]['kadar_air'] : "0"; ?></td>
      <td
        class="text-center"><?= !empty($totalpanenpetani[$key][0]['jumlah_bentangan']) ? $totalpanenpetani[$key][0]['jumlah_bentangan'] : "0"; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>


</div>

<?php
  Yii::app()->clientScript->registerScript('showNotif', '
		$("#add").click(function (e) {
		toastr.error("Please Add Warehose Name First!!!", pesan);
		e.preventDefault();
	});
	function printData() {
    var divToPrint = document.getElementById("printTable");
    newWin = window.open("");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    //newWin.close();
  }

  $(\'#cetak\').on(\'click\', function () {
    printData();
  })
	');
?>