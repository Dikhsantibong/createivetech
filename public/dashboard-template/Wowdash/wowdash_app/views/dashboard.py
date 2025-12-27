from django.shortcuts import render

def index(request):
    return render(request, 'dashboard/index.html', {
        'title': 'Dashboard',
        'subtitle': 'AI',
        'script': 'assets/js/homeChart/homeOneChart.js'
    })

def index2(request):
    return render(request, 'dashboard/index2.html', {
        'title': 'Dashboard',
        'subtitle': 'CRM',
        'script': 'assets/js/homeChart/homeTwoChart.js'
    })

def index3(request):
    return render(request, 'dashboard/index3.html', {
        'title': 'Dashboard',
        'subtitle': 'eCommerce',
        'script': 'assets/js/homeChart/homeThreeChart.js'
    })

def index4(request):
    return render(request, 'dashboard/index4.html', {
        'title': 'Dashboard',
        'subtitle': 'Cryptocracy',
        'script': 'assets/js/homeChart/homeFourChart.js'
    })

def index5(request):
    return render(request, 'dashboard/index5.html', {
        'title': 'Dashboard',
        'subtitle': 'Investment',
        'script': 'assets/js/homeChart/homeFiveChart.js'
    })

def index6(request):
    return render(request, 'dashboard/index6.html', {
        'title': 'Dashboard',
        'subtitle': 'LMS / Learning System',
        'script': 'assets/js/homeChart/homeSixChart.js'
    })

def index7(request):
    return render(request, 'dashboard/index7.html', {
        'title': 'Dashboard',
        'subtitle': 'NFT & Gaming',
        'script': 'assets/js/homeChart/homeSevenChart.js'
    })

def index8(request):
    return render(request, 'dashboard/index8.html', {
        'title': 'Dashboard',
        'subtitle': 'Medical',
        'script': 'assets/js/homeChart/HomeEightChart.js'
    })

def index9(request):
    return render(request, 'dashboard/index9.html', {
        'title': 'Dashboard',
        'subtitle': 'Analytics',
        'script': 'assets/js/homeChart/homeNineChart.js'
    })
