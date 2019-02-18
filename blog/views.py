from django.shortcuts import render, redirect
from django.db.models import Q
import requests
from django.http import HttpResponse
from django.core.paginator import Paginator
from .models import Post, Menu, Social, Comments
# Create your views here.

menu = Menu.objects.all()
social = Social.objects.all()


def index(request):
 #return HttpResponse("Welcome")
 data = Post.objects.all()

 trend = Post.objects.all().order_by('-id')[0:5]

 p = request.GET.get('p')
 page = Paginator(data, 20)
 data = page.get_page(p)



 contexts = { 
'data': data,
'menu': menu, 
'social': social,
'trend' : trend,
'pageName':'index'
 }
 return render(request, 'index.html', contexts)


def blog(request, id, title):
 #return HttpResponse("Post ID : " + id +  "</br> Post Title : " + slug)
 post = Post.objects.all().filter(id=id)
 for this in post:
  title = this.title
  body = this.body


 comments = Comments.objects.all().filter(postId=id).order_by('-id')

 for blog in post:
  postId = blog.id
  print(postId)
 return render(request, 'single-post.html', {'post': post, 'menu': menu, 'social': social, 'comments': comments, 'postId': postId})


def commentadd(request):
 name = request.POST['cName']
 email = request.POST['cEmail']
 website = request.POST['cWebsite']
 comment = request.POST['cMessage']
 postId = request.POST['postId']
 print(request.POST)
 titleinurl = request.POST['titleinurl']

 Comments(name = name, email = email, website = website, comment = comment, postId = postId).save()
 return redirect(titleinurl)





def search(request):
 #return HttpResponse("search for : "+q)
 q = request.GET.get('s')
 p = request.GET.get('p')


 result = Post.objects.all().filter(Q(title__icontains=q) | Q(body__icontains=q))

 totalresult = len(result)



 paginator = Paginator(result, 5)
 result = paginator.get_page(p)
 print("pages should : ", result.paginator.num_pages, "And this variable type is : ", type(result.paginator.num_pages))
 contexts =  {
'result': result,
'totalresult':totalresult,
'menu': menu,
'social': social,
'pageName': 'search'
}

 return render(request, 'search.html', contexts)






# @bout page

def about(request):
 contexts = {
'menu': menu, 
'social': social,

 }
 return render(request, 'about.html', contexts)


def contact(request):
 contexts = {
'menu': menu, 
'social': social,

 }
 return render(request, 'contact.html', contexts)


def contactFormSubmit(request):
 name = request.POST['cName']
 print(name)
 return HttpResponse(name)

