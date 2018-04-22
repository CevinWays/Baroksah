<div class="col-md-12 center-block">
    <div class="col-12">
        <div class="d-flex flex-wrap">
        <div class="text-center">
            <h5>YTD {{$product->name}}</h5>
        </div>
        </div>
    </div>
    <div style="width: 75%; margin-left: 150px">
        <canvas id="myChart"></canvas>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var dData = function() {
  return Math.round(Math.random() * 10);
};
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July" , "August",
        "September", "October", "November", "Desember"],
        datasets: [{
            label: 'YTD',
            fill: false,
            backgroundColor: '#26A69A',
            borderColor: '#26A69A',
            data: [dData(),dData(),dData(),dData(),dData(),dData(),dData(),dData(),dData(),dData(),dData(),dData()],
        }]
    },
    options: {
        elements: {
        line: {
            tension: 0, // disables bezier curves
        }
    }
    }
});
</script>