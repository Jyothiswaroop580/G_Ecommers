# Generated by Django 3.0.8 on 2020-07-27 05:11

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Atta_Flours_Sooji',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.TextField()),
                ('img', models.ImageField(upload_to='pics')),
                ('price', models.IntegerField()),
                ('offer_persentage', models.IntegerField()),
                ('offer_box', models.BooleanField(default=False)),
            ],
        ),
        migrations.CreateModel(
            name='Daily_Bakery',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.TextField()),
                ('img', models.ImageField(upload_to='pics')),
                ('price', models.IntegerField()),
                ('offer_persentage', models.IntegerField()),
                ('offer_box', models.BooleanField(default=False)),
            ],
        ),
        migrations.CreateModel(
            name='Dals_Pulses',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.TextField()),
                ('img', models.ImageField(upload_to='pics')),
                ('price', models.IntegerField()),
                ('offer_persentage', models.IntegerField()),
                ('offer_box', models.BooleanField(default=False)),
            ],
        ),
        migrations.CreateModel(
            name='Rice',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.TextField()),
                ('img', models.ImageField(upload_to='pics')),
                ('price', models.IntegerField()),
                ('offer_persentage', models.IntegerField()),
                ('offer_box', models.BooleanField(default=False)),
            ],
        ),
        migrations.CreateModel(
            name='Snacks_Branued_Foods',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.TextField()),
                ('img', models.ImageField(upload_to='pics')),
                ('price', models.IntegerField()),
                ('offer_persentage', models.IntegerField()),
                ('offer_box', models.BooleanField(default=False)),
            ],
        ),
        migrations.CreateModel(
            name='Staples',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.TextField()),
                ('img', models.ImageField(upload_to='pics')),
                ('price', models.IntegerField()),
                ('offer_persentage', models.IntegerField()),
                ('offer_box', models.BooleanField(default=False)),
            ],
        ),
        migrations.CreateModel(
            name='Vegetables',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.TextField()),
                ('img', models.ImageField(upload_to='pics')),
                ('price', models.IntegerField()),
                ('offer_persentage', models.IntegerField()),
                ('offer_box', models.BooleanField(default=False)),
            ],
        ),
    ]