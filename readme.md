When you make the shared version try to remove all the .git folder and files. Make sure you have the latest .htaccess file with file upload configuration.
Remove the following files in the folder,
app/storage/cache/
app/storage/logs/
app/storage/sessions/
app/storage/views
public/uploads/
Give the permission following Folder
chmod -R 777 app/storage
chmod -R 777 app/config
chmod -R 777 uploads