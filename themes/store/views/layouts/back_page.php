    <?php include_once('back/tpl_asset_header.php');?>

    <div class="app off-canvas move-right small-sidebar">

        <?php include_once('back/tpl_navigation.php');?>

        <section class="layout">

            <?php include_once('back/tpl_sidebar.php');?>

            <section class="main-content">
                <div class="content-wrap">
                    <div class="row mg-b">
                        <div class="col-xs-6">
                            <h3 class="no-margin"><?php echo $this->pageTitle; ?></h3>
                            <small>Selamat datang, <?PHP echo YII::app()->user->record->fullname; ?></small>
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="javascript:;" class="fa fa-flash pull-right pd-sm toggle-sidebar" data-toggle="off-canvas" data-move="rtl">
                            </a>
                        </div>
                    </div>            

                    <?php echo $content; ?>

                </div>
            </section>
        </section>
    </div>


    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script type="text/javascript">

        $(function () {
            Highcharts.chart('container', {
                chart: {
                    type: 'areaspline'
                },
                title: {
                    text: 'Laporan Penjualan Barang'
                },
                legend: {
                    layout: 'vertical',
                    align: 'left',
                    verticalAlign: 'top',
                    x: 150,
                    y: 100,
                    floating: true,
                    borderWidth: 1,
                    backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
                },
                xAxis: {
                    categories: [
                    'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember',
                    ],
                            plotBands: [{ // visualize the weekend
                                from: 200.5,
                                to: 100.5,
                                color: 'rgba(68, 170, 213, .2)'
                            }]
                        },
                        yAxis: {
                            title: {
                                text: 'Barang'
                            }
                        },
                        tooltip: {
                            shared: true,
                            valueSuffix: ' unit'
                        },
                        credits: {
                            enabled: false
                        },
                        plotOptions: {
                            areaspline: {
                                fillOpacity: 0.5
                            }
                        },
                        series: [
                        {
                            name: 'Penjualan',
                            data: [
                            <?php
                            for ($i=1; $i < 12; $i++) { 
                                echo Transaction::model()->monthReport($i).",";
                            }
                            ?>
                            ]
                        },


                        ]
                    });
        });
    </script>        

    <?php include_once('back/tpl_asset_footer.php');?>
