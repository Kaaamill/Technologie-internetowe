# Biblioteka VaDinci

Projekt zaliczeniowy w ramch przedmiotu **Technologie Internetowe** na **Collegium Da Vinci** w Poznaniu.

Projekt przedstawia system zarządzania biblioteką. Pozwala na rezerwację pozycji z biblioteki i późniejsze ich wypożyczenie oraz zwrot. 

*Szczegółowy opis funkcjonalności znajduje się w sekcji "Przykłady użycia".*

## 1. Wymagane zależności i narzędzia

### TECHNOLOGIE:

- PHP
- HTML
- CSS
- JS (vanilla)

### NARZĘDZIA:

XAMPP 8.2.4, w tym:
- XAMPP Control Panel 3.3.0
- Apache 2.4.56
- MariaDB 5.4.28
- PHP 8.2.4
- phpMyAdmin 5.2.1
- OpenSSL 1.1.1t

## 2. Instrukcje instalacji:

W celu uruchomienia projektu należy wykonać następujące kroki:

### INSTALACJA I KONFIGURACJA:
- Zainstalować XAMPP 8.2.4
- Pobrać i umieścić całość projektu w folderze instalacji XAMPP, w podfolderze htdocs
- uruchomić XAMPP Control Panel
- uruchomić serwer Apache oraz MySQL
- w przeglądarce internetowej przejść do adresu: http://localhost/phpmyadmin/index.php
- z menu górnego wybrać "Import"
- zaimportować plik "biblioteka.sql" znajdujący się w głównym katalogu projektu

Początkowy plik .sql tworzy inicjalną wersję bazy z przykładowymi credentialami użytkowników oraz bazą tytułów i historią wypożyczeń.

### URUCHOMIENIE
- uruchomić XAMPP Control Panel (jeśli nieaktywny)
- uruchomić serwer Apache oraz MySQL (jeśli nieaktywny)
- w przeglądarce internetowej przejść do adresu: http://localhost/technologie-internetowe/index.html

## 3. Funkcjonalności:

- Tworzenie nowych użytkowników
- logowanie użytkowników
- Zarządzanie użytkownikami (admin)
- przeglądanie i wyszukiwanie książek
- przeglądanie szczegółów książki
- rezerwacja książek (użytkownik)
- oznaczanie książek jako wypożyczonych / zwróconych (bibliotekarz)
- dodawanie, usuwanie, edycja książek (bibliotekarz, admin)
- podgląd historii wypożyczeń książki (admin, bibliotekarz)
- podgląd własnej historii wypożyczeń (użytkownik)

## 4. Struktura projektu:

Projekt zawiera 5 głównych katalogów podzielonych funkcjonalnie. 

**/css_styles:**
- arkusze styli dla całego projektu

**/img:**
- grafiki dla całego projektu

**/js_scripts:**
- skrypty js

**/panele_logowania:**
- panele logowania dla każdej z ról
- dostępne widoki w ramach panelów logowania z podziałem na podkatalogi dla każdej z ról

**/widgety_uzytkowników**
- wszelkie podwidoki dostępne po zalogowaniu z podziałem na podkatalogi dla każdej z ról

Dodatkowo katalog główny projektu zawiera stronę główną oraz tą dokumentację :>

## 5. Informacje o testach:

Ze względu na niską złożoność projektu i ograniczenia czasowe, autorzy nie zdecydowali się na zastosowanie testów automatycznych.

## 6. Autorzy i wkład:

Marta Banasiak **@mxvoa**
- baza danych
- logowanie i rejestracja
- system wypożyczeń

Dominik Dobski **@DominikDobski**
- strona główna
- widok książki
- wyszukiwanie

Kamil Ibron **@Kaaamill**
- style
- responsywność
- cookies

Anna-Maria 'Mania' Rogulska **@peleda**
- regulamin
- dokumentacja
- merge master

## 7. Status projektu i wsparcie:

Po opublikowaniu wersji finalnej (~9.07.2023 r.) projekt zostanie uznany za zamknięty i **nie będzie dłużej wspierany**.

Cieszymy się, że możecie oglądać ten kamień milowy w edukacji autorów :>
