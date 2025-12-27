from django.urls import path
from .views import wowdash, aiapplication, authentication, chart, componentspage, forms, user, table, settings, invoice, dashboard

urlpatterns = [
    path('', dashboard.index, name='index'),
    path('index2/', dashboard.index2, name='index2'),
    path('index3/', dashboard.index3, name='index3'),
    path('index4/', dashboard.index4, name='index4'),
    path('index5/', dashboard.index5, name='index5'),
    path('index6/', dashboard.index6, name='index6'),
    path('index7/', dashboard.index7, name='index7'),
    path('index8/', dashboard.index8, name='index8'),
    path('index9/', dashboard.index9, name='index9'),

    # Wowdash URLs
    path('wallet/', wowdash.wallet, name='wallet'),
    path('calendar-main/', wowdash.calendarMain, name='calendarMain'),
    path('chat-empty/', wowdash.chatEmpty, name='chatEmpty'),
    path('chat-message/', wowdash.chatMessage, name='chatMessage'),
    path('chat-profile/', wowdash.chatProfile, name='chatProfile'),
    path('email/', wowdash.email, name='email'),
    path('faq/', wowdash.faq, name='faq'),
    path('gallery/', wowdash.gallery, name='gallery'),
    path('image-upload/', wowdash.imageUpload, name='imageUpload'),
    path('kanban/', wowdash.kanban, name='kanban'),
    path('page-error/', wowdash.pageError, name='pageError'),
    path('pricing/', wowdash.pricing, name='pricing'),
    path('starred/', wowdash.starred, name='starred'),
    path('terms-condition/', wowdash.termsCondition, name='termsCondition'),
    path('view-details/', wowdash.viewDetails, name='viewDetails'),
    path('widgets/', wowdash.widgets, name='widgets'),


    # AIapplication URLs
    path('code-generator/', aiapplication.codeGenerator, name='codeGenerator'),
    path('code-generator-new/', aiapplication.codeGeneratorNew, name='codeGeneratorNew'),
    path('image-generator/', aiapplication.imageGenerator, name='imageGenerator'),
    path('text-generator/', aiapplication.textGenerator, name='textGenerator'),
    path('text-generator-new/', aiapplication.textGeneratorNew, name='textGeneratorNew'),
    path('video-generator/', aiapplication.videoGenerator, name='videoGenerator'),
    path('voice-generator/', aiapplication.voiceGenerator, name='voiceGenerator'),


    # Authentication URLs
    path('forgot-password/', authentication.forgotPassword, name='forgotPassword'),
    path('signin/', authentication.signin, name='signin'),
    path('signup/', authentication.signup, name='signup'),


    # Chart URLs
    path('column-chart/', chart.columnChart, name='columnChart'),
    path('line-chart/', chart.lineChart, name='lineChart'),
    path('pie-chart/', chart.pieChart, name='pieChart'),


    # Components URLs
    path('alert/', componentspage.alert, name='alert'),
    path('avatar/', componentspage.avatar, name='avatar'),
    path('badges/', componentspage.badges, name='badges'),
    path('button/', componentspage.button, name='button'),
    path('calendar/', componentspage.calendar, name='calendar'),
    path('card/', componentspage.card, name='card'),
    path('carousel/', componentspage.carousel, name='carousel'),
    path('colors/', componentspage.colors, name='colors'),
    path('dropdown/', componentspage.dropdown, name='dropdown'),
    path('image-upload/', componentspage.imageUpload, name='imageUpload'),
    path('lists/', componentspage.lists, name='lists'),
    path('pagination/', componentspage.pagination, name='pagination'),
    path('progress/', componentspage.progress, name='progress'),
    path('radio/', componentspage.radio, name='radio'),
    path('star-rating/', componentspage.starRating, name='starRating'),
    path('switch/', componentspage.switch, name='switch'),
    path('tabs/', componentspage.tabs, name='tabs'),
    path('tags/', componentspage.tags, name='tags'),
    path('tooltip/', componentspage.tooltip, name='tooltip'),
    path('typography/', componentspage.typography, name='typography'),
    path('videos/', componentspage.videos, name='videos'),


    # Forms URLs
    path('form/', forms.form, name='form'),
    path('form-layout/', forms.formLayout, name='formLayout'),
    path('form-validation/', forms.formValidation, name='formValidation'),
    path('wizard/', forms.wizard, name='wizard'),


    # Invoice URLs
    path('invoice-add/', invoice.invoiceAdd, name='invoiceAdd'),
    path('invoice-edit/', invoice.invoiceEdit, name='invoiceEdit'),
    path('invoice-list/', invoice.invoiceList, name='invoiceList'),
    path('invoice-preview/', invoice.invoicePreview, name='invoicePreview'),  


    # Settings URLs
    path('company/', settings.company, name='company'),
    path('currencies/', settings.currencies, name='currencies'),
    path('language/', settings.language, name='language'),
    path('notification/', settings.notification, name='notification'),
    path('notification-alert/', settings.notification_alert, name='notificationAlert'),
    path('payment-gateway/', settings.payment_gateway, name='paymentGateway'),
    path('theme/', settings.theme, name='theme'),


    # Table URLs
    path('table-basic/', table.tableBasic, name='tableBasic'),
    path('table-data/', table.tableData, name='tableData'),

    # User URLs
    path('add-user/', user.addUser, name='addUser'),
    path('users-grid/', user.usersGrid, name='usersGrid'),
    path('users-list/', user.usersList, name='usersList'),
    path('view-profile/', user.viewProfile, name='viewProfile'),
]