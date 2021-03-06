@extends('layouts.app')

@section('content')
<div class="uk-container">
    <div class="uk-flex uk-child-width-1-1" uk-grid>
        <div>
            <div class="uk-margin">
                <div class="uk-text-center">
                    @if (session('status'))
                    <div class="uk-alert uk-alert-success" uk-alert>
                        {{ session('status') }}
                    </div>
                    @endif

                    Hi {{ Auth::user()->name }} {{ __('You are logged in!') }}, Here is your current statistic
                </div>
            </div>
        </div>
        <div class="uk-flex" uk-grid>
            <div class="uk-margin uk-width-1-2">
                <div class="uk-card uk-card-body">
                    <canvas class="uk-height-small" height="200px" width="300px" id="myChart"></canvas>
                </div>
            </div>
            <div class="uk-margin uk-width-1-2">
                <div class="uk-card uk-card-body uk-card-bordered">
                    <table class="uk-table uk-table-striped">
                        <thead>
                            <th>#</th>
                            <th>Patient Name</th>
                            <th>Gender</th>
                            <th>Status</th>
                            <th>Diagnose</th>
                        </thead>
                        <tbody>
                            @for($i=0; $i < 4; $i++)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>Test</td>
                                <td>M</td>
                                <td><span class="uk-badge uk-badge-success">Alive</span></td>
                                <td>qsdadasdadd</td>
                            </tr>
                            @endfor
                        </tbody>
                    <table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" type="text/javascript"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Patient Data',
                data: [12, 19, 3, 5, 2, 3, 4, 2, 5, 7, 0, 2],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(153, 102, 255, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
@endsection