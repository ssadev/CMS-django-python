from django.urls import path
from django.conf.urls import url
from . import views
urlpatterns = [
    url(r'^about$', views.about, name="about"),
    url(r'^$', views.index, name="index"),
    url(r'^blog/(?P<id>\d+)/(?P<title>[-\w\W]+)/$', views.blog, name="blog"),
    #url(r'^blog/(?P<id>\d+/[-\w\W]+)/$', views.blog, name="blog"),
    url(r'^comment_submit$', views.commentadd, name="commentadd"),
    url(r'^search', views.search, name="search"),
    url(r'^contact$', views.contact, name="contact"),
    url(r'^contact/form-submit$', views.contactFormSubmit, name="contactFormSubmit"),



]
