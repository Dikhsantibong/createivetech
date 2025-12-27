from django.shortcuts import render

#cryptocurrency
def wallet(request):
    return render(request, 'cryptocurrency/wallet.html', {
        'title': 'Wallet',
        'subtitle': 'Wallet'
    })

#other pages
def calendarMain(request):
    return render(request, 'calendarMain.html', {
        'title': 'Calendar',
        'subtitle': 'Components / Calendar',
        'multi_script': ['assets/js/full-calendar.js', 'assets/js/flatpickr.js']
    })

def chatEmpty(request):
    return render(request, 'chatEmpty.html', {
        'title': 'Chat',
        'subtitle': 'Components / Chat'
    })

def chatMessage(request):
    return render(request, 'chatMessage.html', {
        'title': 'Chat',
        'subtitle': 'Chat'
    })

def chatProfile(request):
    return render(request, 'chatProfile.html', {
        'title': 'Chat',
        'subtitle': 'Chat'
    })

def email(request):
    return render(request, 'email.html', {
        'title': 'Email',
        'subtitle': 'Components / Email'
    })

def faq(request):
    return render(request, 'faq.html', {
        'title': 'Faq',
        'subtitle': 'Faq'
    })

def gallery(request):
    return render(request, 'gallery.html', {
        'title': 'Gallery',
        'subtitle': 'Gallery'
    })

def imageUpload(request):
    return render(request, 'imageUpload.html', {
        'title': 'Radio',
        'subtitle': 'Components / Radio'
    })

def kanban(request):
    return render(request, 'kanban.html', {
        'title': 'Kanban',
        'subtitle': 'Kanban'
    })

def pageError(request):
    return render(request, 'pageError.html', {
        'title': '404',
        'subtitle': '404'
    })

def pricing(request):
    return render(request, 'pricing.html', {
        'title': 'Pricing',
        'subtitle': 'Pricing'
    })

def starred(request):
    return render(request, 'starred.html', {
        'title': 'Email',
        'subtitle': 'Components / Email'
    })

def termsCondition(request):
    return render(request, 'termsCondition.html', {
        'title': 'Terms & Conditions',
        'subtitle': 'Terms & Conditions',
        'multi_script': ['assets/js/editor.highlighted.min.js', 
                        'assets/js/editor.quill.js', 
                        'assets/js/editor.katex.min.js']
    })

def viewDetails(request):
    return render(request, 'viewDetails.html', {
        'title': 'Email',
        'subtitle': 'Components / Email'
    })

def widgets(request):
    return render(request, 'widgets.html', {
        'title': 'Widgets',
        'subtitle': 'Widgets',
        'script': 'assets/js/widgets.js'
    })

