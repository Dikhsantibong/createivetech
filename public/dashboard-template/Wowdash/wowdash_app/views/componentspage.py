from django.shortcuts import render

def alert(request):
    return render(request, 'componentspage/alert.html', {
        'title': 'Alerts',
        'subtitle': 'Components / Alerts'
    })

def avatar(request):
    return render(request, 'componentspage/avatar.html', {
        'title': 'Avatars',
        'subtitle': 'Components / Avatars'
    })

def badges(request):
    return render(request, 'componentspage/badges.html', {
        'title': 'Badges',
        'subtitle': 'Components / Badges'
    })

def button(request):
    return render(request, 'componentspage/button.html', {
        'title': 'Button',
        'subtitle': 'Components / Button'
    })

def calendar(request):
    return render(request, 'componentspage/calendar.html', {
        'title': 'Calendar',
        'subtitle': 'Components / Calendar',
        'multi_script': ['assets/js/flatpickr.js', 'assets/js/full-calendar.js']
    })

def card(request):
    return render(request, 'componentspage/card.html', {
        'title': 'Card',
        'subtitle': 'Components / Card',
        'multi_script': ['assets/js/flatpickr.js', 'assets/js/full-calendar.js']
    })

def carousel(request):
    return render(request, 'componentspage/carousel.html', {
        'title': 'Carousel',
        'subtitle': 'Components / Carousel',
        'script': 'assets/js/defaultCarousel.js'
    })

def colors(request):
    return render(request, 'componentspage/colors.html', {
        'title': 'Colors',
        'subtitle': 'Components / Colors'
    })

def dropdown(request):
    return render(request, 'componentspage/dropdown.html', {
        'title': 'Dropdown',
        'subtitle': 'Components / Dropdown'
    })

def imageUpload(request):
    return render(request, 'componentspage/imageUpload.html', {
        'title': 'Radio',
        'subtitle': 'Components / Radio'
    })

def lists(request):
    return render(request, 'componentspage/lists.html', {
        'title': 'List',
        'subtitle': 'Components / List'
    })

def pagination(request):
    return render(request, 'componentspage/pagination.html', {
        'title': 'Pagination',
        'subtitle': 'Components / Pagination'
    })

def progress(request):
    return render(request, 'componentspage/progress.html', {
        'title': 'Progress Bar',
        'subtitle': 'Components / Progress Bar'
    })

def radio(request):
    return render(request, 'componentspage/radio.html', {
        'title': 'Radio',
        'subtitle': 'Components / Radio'
    })

def starRating(request):
    return render(request, 'componentspage/starRating.html', {
        'title': 'Star Ratings',
        'subtitle': 'Components / Star Ratings'
    })

def switch(request):
    return render(request, 'componentspage/switch.html', {
        'title': 'Radio',
        'subtitle': 'Components / Radio'
    })

def tabs(request):
    return render(request, 'componentspage/tabs.html', {
        'title': 'Tab & Accordion',
        'subtitle': 'Components / Tab & Accordion'
    })

def tags(request):
    return render(request, 'componentspage/tags.html', {
        'title': 'Tags',
        'subtitle': 'Components / Tags'
    })

def tooltip(request):
    return render(request, 'componentspage/tooltip.html', {
        'title': 'Tooltip & Popover',
        'subtitle': 'Components / Tooltip & Popover',
        'script': 'assets/js/defaultCarousel.js'
    })

def typography(request):
    return render(request, 'componentspage/typography.html', {
        'title': 'Typography',
        'subtitle': 'Components / Typography'
    })

def videos(request):
    return render(request, 'componentspage/videos.html', {
        'title': 'Videos',
        'subtitle': 'Components / Videos'
    })