from django.shortcuts import render
import requests
from django.http import HttpResponse
from .models import Post, Menu, Social
# Create your views here.

def index(request):
 #return HttpResponse("Welcome")
 data = Post.objects.all()
 menu = Menu.objects.all()
 social = Social.objects.all()


 return render(request, 'index.html', { 'data': data, 'menu': menu, 'social': social, 'check':'Hello' })