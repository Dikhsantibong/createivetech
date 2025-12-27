from django.shortcuts import render

def company(request):
    return render(request, 'settings/company.html', {
        'title': 'Company',
        'subtitle': 'Settings - Company'
    })

def currencies(request):
    return render(request, 'settings/currencies.html', {
        'title': 'Currencies',
        'subtitle': 'Settings - Currencies'
    })

def language(request):
    return render(request, 'settings/language.html', {
        'title': 'Languages',
        'subtitle': 'Settings - Languages'
    })

def notification(request):
    return render(request, 'settings/notification.html', {
        'title': 'Notification',
        'subtitle': 'Settings - Notification'
    })

def notification_alert(request):
    return render(request, 'settings/notificationAlert.html', {
        'title': 'Notification Alert',
        'subtitle': 'Settings - Notification Alert'
    })

def payment_gateway(request):
    return render(request, 'settings/paymentGateway.html', {
        'title': 'Languages',
        'subtitle': 'Settings - Languages'
    })

def theme(request):
    return render(request, 'settings/theme.html', {
        'title': 'Theme',
        'subtitle': 'Settings - Theme'
    })