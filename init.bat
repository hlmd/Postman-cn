@echo on

set BACK_PATH=%cd%
set INSTALL_DERIVE=D:
set INSTALL_PATH=%INSTALL_DERIVE%\APP\Network\Postman\Install\
set VERSION=%1%
set NOW_DERIVE=%~d0


if "%VERSION%"=="" (
    setlocal enabledelayedexpansion
    for /d %%i in ("%INSTALL_PATH%app-*") do (
        set var=%%i
        set VERSION=!var:%INSTALL_PATH%app-=!
    )
)
echo version: %VERSION%

%INSTALL_DERIVE%
cd %INSTALL_PATH%app-%VERSION%\resources

asar e %INSTALL_PATH%app-%VERSION%\resources\app.asar %INSTALL_PATH%app-%VERSION%\resources\app && copy /y %INSTALL_PATH%app-%VERSION%\resources\app.asar %BACK_PATH%\app.asar && %NOW_DERIVE% && cd %BACK_PATH% && rmdir /s /q %BACK_PATH%\original && asar e %BACK_PATH%\app.asar %BACK_PATH%\app-%VERSION% && asar e %BACK_PATH%\app.asar %BACK_PATH%\original && del /s %BACK_PATH%\app.asar && pause
