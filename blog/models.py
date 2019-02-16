from django.db import models
from datetime import date
# Create your models here.


TYPE_CHOICES = (
    ('Public','Public'),
    ('Private', 'Private'),

)


class Post(models.Model):
 title = models.CharField(max_length=200)
 body = models.TextField()
 date = models.DateField(default=date.today, blank=True)
 thumbnail = models.URLField()
 type = models.CharField(max_length=100, choices=TYPE_CHOICES, default='Public')

class Menu(models.Model):
 name = models.CharField(max_length=8)
 link = models.URLField()

class Social(models.Model):
 name = models.CharField(max_length=10)
 link = models.URLField()

