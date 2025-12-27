from django.shortcuts import render

def codeGenerator(request):
    return render(request, 'aiapplication/codeGenerator.html', {
        'title': 'Code Generator',
        'subtitle': 'Code Generator',
    })

def codeGeneratorNew(request):
    return render(request, 'aiapplication/codeGeneratorNew.html', {
        'title': 'Code Generator',
        'subtitle': 'Code Generator',
    })

def imageGenerator(request):
    return render(request, 'aiapplication/imageGenerator.html', {
        'title': 'Image Generator',
        'subtitle': 'Image Generator',
    })

def textGenerator(request):
    return render(request, 'aiapplication/textGenerator.html', {
        'title': 'Text Generator',
        'subtitle': 'Text Generator',
    })

def textGeneratorNew(request):
    return render(request, 'aiapplication/textGeneratorNew.html', {
        'title': 'Text Generator',
        'subtitle': 'Text Generator',
    })

def videoGenerator(request):
    return render(request, 'aiapplication/videoGenerator.html', {
        'title': 'Video Generator',
        'subtitle': 'Video Generator',
    })

def voiceGenerator(request):
    return render(request, 'aiapplication/voiceGenerator.html', {
        'title': 'Voice Generator',
        'subtitle': 'Voice Generator',
    })
