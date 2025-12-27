from django.shortcuts import render

def addUser(request):
    return render(request, 'users/addUser.html', {
        'title': 'Add User',
        'subtitle': 'Add User'
    })

def usersGrid(request):
    return render(request, 'users/usersGrid.html', {
        'title': 'Users Grid',
        'subtitle': 'Users Grid'
    })

def usersList(request):
    return render(request, 'users/usersList.html', {
        'title': 'Users List',
        'subtitle': 'Users List'
    })

def viewProfile(request):
    return render(request, 'users/viewProfile.html', {
        'title': 'View Profile',
        'subtitle': 'View Profile'
    })
