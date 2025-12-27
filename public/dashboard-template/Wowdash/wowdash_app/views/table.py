from django.shortcuts import render

def tableBasic(request):
    return render(request, 'table/tableBasic.html', {
        'title': 'Basic Table',
        'subtitle': 'Basic Table'
    })

def tableData(request):
    return render(request, 'table/tableData.html', {
        'title': 'Basic Table',
        'subtitle': 'Basic Table',
        'script': 'assets/js/data-table.js'
    })
