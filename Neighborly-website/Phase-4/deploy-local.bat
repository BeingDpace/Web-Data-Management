REM # del /q "c:\xampp\htdocs\*"
REM # FOR /D %%p IN ("c:\xampp\htdocs\*.*") DO rmdir "%%p" /s /q

xcopy . c:\xampp\htdocs /s /e /y 

REM # mkdir c:\xampp\htdocs\uploads
