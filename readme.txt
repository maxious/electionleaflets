** Setup instructions **

* php *
Requires cURL, php5-imap, php5-gd

* Database *

Create a database using the script in schema/database.sql

* Config file *

Make a copy of config/general.svn.php as config/general.php then edit the variables for you local setup (point it to the database you just created etc).

* Folder structure *

create the following folders and make the writtable:

data/smarty_compile
data/cache
data/temp
data/images
data/images/small
data/images/original
data/images/large
data/images/medium
data/images/thumbnail

** Help **
If you need any help, contact the developer mainlin list at http://groups.google.com/group/the-election-leaflet-project

* map (django application) *

The map is actually a separate django application. To get this working you will need the following installed:
python-django
python-mysqldb
libgeos-c1
python-gdal
proj
libapache2-mod-python
python-imaging

