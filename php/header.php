<!-- we set presettings - what we are going to do with the output -->

<!-- display it in browser -->
header('Content-Type: application/pdf');

<!-- promt user where to save? -->
header('Content-Disposition: attachment; filename="myfile.pdf"');

<!-- open file and do what was preset -->
readfile(path/name)