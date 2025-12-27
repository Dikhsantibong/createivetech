from django.shortcuts import render

def form(request):
    return render(request, 'forms/form.html', {
        'title': 'Input From',
        'subtitle': 'Input From'
    })

def formLayout(request):
    return render(request, 'forms/formLayout.html', {
        'title': 'Input Layout',
        'subtitle': 'Input Layout'
    })

def formValidation(request):
    return render(request, 'forms/formValidation.html', {
        'title': 'Form Validation',
        'subtitle': 'Form Validation'
    })

def wizard(request):
    return render(request, 'forms/wizard.html', {
        'title': 'Wizard',
        'subtitle': 'Wizard'
    })