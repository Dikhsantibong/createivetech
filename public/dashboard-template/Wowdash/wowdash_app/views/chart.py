from django.shortcuts import render

def columnChart(request):
    return render(request, 'chart/columnChart.html', {
        'title': 'Column Chart',
        'subtitle': 'Components / Column Chart',
        'script': 'assets/js/columnChartPageChart.js'
    })

def lineChart(request):
    return render(request, 'chart/lineChart.html', {
        'title': 'Line Chart',
        'subtitle': 'Components / Line Chart',
        'script': 'assets/js/lineChartPageChart.js'
    })

def pieChart(request):
    return render(request, 'chart/pieChart.html', {
        'title': 'Pie Chart',
        'subtitle': 'Components / Pie Chart',
        'script': 'assets/js/pieChartPageChart.js'
    })