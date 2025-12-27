from django.shortcuts import render

def invoiceAdd(request):
    return render(request, 'invoice/invoiceAdd.html', {
        'title': 'Invoice List',
        'subtitle': 'Invoice List',
        'script': 'assets/js/invoice.js'
    })

def invoiceEdit(request):
    return render(request, 'invoice/invoiceEdit.html', {
        'title': 'Invoice List',
        'subtitle': 'Invoice List',
        'script': 'assets/js/invoice.js'
    })

def invoiceList(request):
    return render(request, 'invoice/invoiceList.html', {
        'title': 'Invoice List',
        'subtitle': 'Invoice List'
    })

def invoicePreview(request):
    return render(request, 'invoice/invoicePreview.html', {
        'title': 'Invoice List',
        'subtitle': 'Invoice List'
    })