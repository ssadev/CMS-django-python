
from django.contrib import admin
from django.urls import path, include
from django.conf.urls import url


urlpatterns = [
    path('admin/', admin.site.urls),
    path('', include('blog.urls')),
    url(r'^blog$', include('blog.urls')),
    url(r'^comment_submit$', include('blog.urls')),
    url(r'^search$', include('blog.urls')),
    url(r'^about$', include('blog.urls')),
    url(r'^contact$', include('blog.urls')),
    url(r'^/contact/form-submit$', include('blog.urls')),

]
