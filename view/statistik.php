<!-- 
dibuat oleh gazandi cahyadarma
2/9/2016
 -->
<?php include "header.php"; 
        require_once '../model/statistik.php';
        $statistikModel = new Statistik();
        $arrStatistikKelompok = $statistikModel->getJumlahStatistikKelompok();
        $listkerusakan = $statistikModel->getJumlahKerusakanBarang();
        $listpeminjaman = $statistikModel->getStatistikPeminjamanBarang();
?>
<section id="hotframe" style="margin-top: 58px; margin-left: 295px; min-height: 680px; width:80%">
    <div id="hot">
        <script src="assets/js/chartupload.js"></script>
        <div id="judul"><h2 style="color: #ef1100">       
            Dashboard
        
            </h2>
        </div>
    
        <table style="display: inline-block; text-align: center">
            <tr>
                <td><div id="judul"><h5 style="color:#3e3e3e">       
                    Statistik peminjaman barang dari user</h5>
                </div>
                 <canvas id="myChartUser" width="1000" height="420" s ></canvas>  </td>
            </tr>
            <tr>
                <td ><div id="judul"><h5 style="color:#3e3e3e">       
                    Statistik kerusakan barang</h5>
                </div>
                 <canvas id="myChartRusak" width="1000" height="370"></canvas>  </td>
            </tr>
            <tr>
                 <td ><div id="judul"><h5 style="color:#3e3e3e">       
                    Statistik peminjaman barang</h5>
                </div>
                 <canvas id="myChartBarang" width="1000" height="370"></canvas>  </td>
            </tr>
        </table>

         <script>  
            var options = {

                ///Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines : true,

                //String - Colour of the grid lines
                scaleGridLineColor : "rgba(0,0,0,.05)",

                //Number - Width of the grid lines
                scaleGridLineWidth : 1,

                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,

                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,

                //Boolean - Whether the line is curved between points
                bezierCurve : true,

                //Number - Tension of the bezier curve between points
                bezierCurveTension : 0.4,

                //Boolean - Whether to show a dot for each point
                pointDot : true,

                //Number - Radius of each point dot in pixels
                pointDotRadius : 4,

                //Number - Pixel width of point dot stroke
                pointDotStrokeWidth : 1,

                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                pointHitDetectionRadius : 20,

                //Boolean - Whether to show a stroke for datasets
                datasetStroke : true,

                //Number - Pixel width of dataset stroke
                datasetStrokeWidth : 2,

                //Boolean - Whether to fill the dataset with a colour
                datasetFill : true,

                //String - A legend template
            };

            var data = [
            {
                value: <?= $arrStatistikKelompok["jumlah"][0]?>,
                color:"#F7464A",
                highlight: "#FF5A5E",
                label: "<?= $arrStatistikKelompok['nama'][0]?>"
            },
            {
                value:  <?= $arrStatistikKelompok["jumlah"][1]?>,
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "<?= $arrStatistikKelompok['nama'][1]?>"
            },
            {
                value:  <?= $arrStatistikKelompok["jumlah"][2]?>,
                color: "#FDB45C",
                highlight: "#FFC870",
                label: "<?= $arrStatistikKelompok['nama'][2]?>"
            }
        ];
            var options = {
                //Boolean - Whether we should show a stroke on each segment
                segmentShowStroke : true,

                //String - The colour of each segment stroke
                segmentStrokeColor : "#fff",

                //Number - The width of each segment stroke
                segmentStrokeWidth : 2,

                //Number - The percentage of the chart that we cut out of the middle
                percentageInnerCutout : 50, // This is 0 for Pie charts

                //Number - Amount of animation steps
                animationSteps : 100,

                //String - Animation easing effect
                animationEasing : "easeOutBounce",

                //Boolean - Whether we animate the rotation of the Doughnut
                animateRotate : true,

                //Boolean - Whether we animate scaling the Doughnut from the centre
                animateScale : false,
            };
            var datakerusakan = {
                labels: [
                <?php 
                for ($ite=0;$ite<count($listkerusakan["nama_barang"])-1;$ite++) {
                       echo "\"".$listkerusakan["nama_barang"][$ite]."\"".", ";
                }
                echo "\"".$listkerusakan["nama_barang"][$ite]."\"";
                ?>
                ],
                datasets: [
                    {
                        label: "Kerusakan barang",
                        fillColor: "rgba(151,187,205,0.2)",
                        strokeColor: "rgba(151,187,205,1)",
                        pointColor: "rgba(151,187,205,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(151,187,205,1)",
                        data: [
                <?php 
                for ($ites=0;$ites < count($listkerusakan["jumlah_rusak"])-1;$ites++) {
                       echo $listkerusakan["jumlah_rusak"][$ites].", ";
                }
                echo $listkerusakan["jumlah_rusak"][$ites];
                ?>
                        ]
                    }
                ]
            };
            var datapeminjaman = {
                labels: [<?php 
                $ite=0;
                for ($ite=0;$ite<count($listpeminjaman["nama_barang"])-1;$ite++) {
                       echo "\"".$listpeminjaman["nama_barang"][$ite]."\"".", ";
                }
                echo "\"".$listpeminjaman["nama_barang"][$ite]."\"";
                ?>
                ],
                datasets: [
                    {
                        label: "Peminjaman barang",
                        fillColor: "rgba(151,187,205,0.2)",
                        strokeColor: "rgba(151,187,205,1)",
                        pointColor: "rgba(151,187,205,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(151,187,205,1)",
                        data: [
                        <?php 
                        for ($ites=0;$ites < count($listpeminjaman["jumlah"])-1;$ites++) {
                               echo $listpeminjaman["jumlah"][$ites].", ";
                        }
                        echo $listpeminjaman["jumlah"][$ites];
                        ?>
                        ]
                    }
                ]
            };
            var ctx = document.getElementById("myChartUser").getContext("2d");
            var ctx2 = document.getElementById("myChartRusak").getContext("2d");
             var ctx3 = document.getElementById("myChartBarang").getContext("2d");
            var myLineChart = new Chart(ctx).Doughnut(data,options);
            var myLineChart2 = new Chart(ctx2).Bar(datakerusakan);
            <?php if(count($listpeminjaman["jumlah"])==1){?>

                var myLineChart3 = new Chart(ctx3).Bar(datapeminjaman);
            <?php }else{?>
                var myLineChart3 = new Chart(ctx3).Line(datapeminjaman);
            <?php }?>
        </script>
        <br>
    </div>
    
</section>
</body>
</html>
