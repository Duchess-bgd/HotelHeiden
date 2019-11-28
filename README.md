# HotelHeiden
Hotel app with reservations


﻿Naslov: Hotel Heiden
Završni rad za kurs PHP programiranja u Code Academiji

članovi tima:
Jovana Matijević

Gordana Radović

Jovan Nikolić

Ovaj rad predstavlja web sajt zamišljenog hotela, koji u sebi ima ne samo predstavljen hotel vec i aplikaciju za online odabir i rezervaciju soba i apartmana. U izradi kompletnog projekta korišćeni su HTML, CSS (Bootstrap), Java Script, PDO i PHP.
U frontend delu projekta kombinovani su HTML, klasičan CSS i Bootstrap, zatim JS, a neki delovi, kao što su slike za galeriju, informacije o sobama i cene, su povučeni iz baze pomoću PHP-a. Sve strane su responsive tako da se aplikaciji može lako pristupiti i sa mobilnih uređaja. Posebna funkcija koja je dostupna na svakoj strani je prijava na News Letter koja upisuje korisnika u bazu podataka, kako bi se njemu kasnije mogla slati obaveštenja. Kada je u pitanju backend, sve je zasnovano na PHP-u, a glavnu ulogu igra upravo online pregled i rezervisanje soba. Na glavnoj strani klijent može odabrati da li sobe u vreme kada njemu odgovara, za 1,2 ili 3 osobe, a zatim ga aplikacija vodi na novu stranu sa svim sobama koje odgovaraju unetim kriterijumima.


Ovde korisnik može odabrati opciju koja mu najviše odgovara, ali je neophodno i da bude registrovan. Naime, projekat je predvideo 3 nivoa korisnika: neregistrovan posetilac, registrovan korisnik i admin. 
Neregistrovanom korisniku omogućeno je da pregleda prezentaciju hotela i da vidi da li je smeštaj koji njemu odgovara dostupan i po kojoj ceni, ali samo registrovanom korisniku je omogućeno da i stvarno rezerviše sobu. Ovo se radi preko stranice Sign up/Log in, gde se podaci koje korisnik ukuca upisuju u bazu ukoliko je u pitanju registracija, ili proveravaju sa postojećim, ukoliko je u pitanju vec registrovani korisnik. Sem rezervacije sobe registrovani korisnik može i proveriti koje je sve sobe rezervisao i za koje datume, kao i da otkaže rezervaciju ukoliko mu ne odgovara.


Posebna uloga namenjena je adminu, koji jedini ima pristup admin panelu.
        Admin panel je poseban deo aplikacije koji omogućava pregled gotovo svih podataka iz baze, ali i vršenje promena u bazi preko posebnih, Izmeni i Obriši funkcionalnosti. U panelu su prikazane tabele za pregled (izmenu i brisanje) smeštaja, pregled rezervacija i svih korisnika. Ovom delu aplikacije može pristupiti samo Administrator koji se loguje sa svojim kredencijalima. Ovo mu omogućava da ima pregled pet tabela iz baze. Ove tabele daju uvid u strukturu i deskripciju smeštaja, klijente ili potencijalne klijente koji su se prijavili za newsletter, podatke o korisnicima hotelskih usluga kao i pregled svih rezervacija. Podaci u ovim tabelama se mogu i dodati,menjati ili u potpunosti brisati: rezervacije, opis sobe ili apartmana, ali ne i lične podatke korisnika hotela.
