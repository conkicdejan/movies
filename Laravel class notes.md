//=======================
// Cetvrtak - 26. maj - Autentifikacija
//=======================

U navbar napravi register link

U web dodaj rutu get /register, vodi ka AuthController::getRegisterForm,

AuthContoller ima metode getRegisterForm, register, getLoginForm, login, logout

U blade template novi folder Auth, i fajlovi:

-   register: forma za kreiranje novog usera, dodaj terms_of_service, postoji opcija value = old da ostanu podaci upisani u formu nakon sto ne prodje validacija
-
-
-

U web dodaj rutu post /register, vodi ka AuthController::register, takode napraviti validaciju za request, hash password Hash::make(), Hash:check('str', $hased), upisati korisnika u bazu, upisi u sesiju Id korisnika: Auth::login($user)
napomena: klasa Auth se nalazi u config/auth.php


