<?php

use App\User;
use Faker\Generator as Faker; // usa il Faker
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // per la pwd

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) // aggiungo dati faker
    {

        $bios = [
            '* Titoli conseguiti

            - Specializzazione in Andrologia presso l’Università di l’Università degli Studi di Roma “La Sapienza” nel 1982;

            - Specializzazione in Oncologia presso l’Università degli Studi di Roma “La Sapienza” nel 1980;

            - Specializzazione in Endocrinologia presso l’Università degli Studi di Roma “La Sapienza” nel 1975.

            - Specializzazione in Chirurgia Generale presso l’Università degli Studi di Roma “La Sapienza” nel 1973;


            * Curriculum e attività

            Laurea in Medicina e Chirurgia presso l’Università degli Studi di Roma “La Sapienza” (luglio 1969);

            dal 1975 al 2001 Assistente e quindi Aiuto della Chirurgia Generale dell\'Ospedale San Carlo Nancy di Roma;

            dal 1982 ad oggi Dirigente dello Studio di Andrologia e di Chirurgia Andrologica di Roma, prima struttura andrologica privata di Roma;

            Ha pubblicato oltre 200 articoli su riviste straniere ed italiane, Editor di Diagnosing Impotence (Masson 1989), Diagnosing Infertility (Karger, 1991);

            organizzatore degli International Meeting of Andrology che hanno portato a Roma i più grandi andrologi del mondo;

            visitato oltre 30.000 pazienti con patologie andrologiche;

            una ricche casistica personale di protesi peniene (oltre 500);

            Frequenza istituto e laboratori della Clinica Medica V, Università Sapienza di Roma dal 1970 al 1974;

            Frequenza del Reparto di Urologia Klinikum Steglitz di Berlino 1981, 1982, 1983. Istituto Andrologico de Baleares dal 1984 al 1987;

            lavora presso alcune strutture accreditate con il SSN.',


            'TITOLI DI STUDIO

            - Specializzazione in Cardiologia conseguita presso l\'Università degli Studi di Pavia (ottobre 2006).


            * Curriculum e attività

            - Laurea in Medicina e Chirurgia presso l\'Università degli Studi G. D\'Annunzio di Chieti (ottobre 2002);

            - Principali mansioni e responsabilità Attività clinico assistenziale (UTIC, PS, Reparto di Cardiologia) Attività diagnostica non invasiva (ecocardiografia transtoracica, test ergometrico, Holter ECG, Monitoraggio Pressorio, ecoDoppler TSA);

            - Attività interventistica in sala di emodinamica:
            diagnostica vascolare coronarica e periferica, angioplastiche coronariche e periferiche;

            - 1998-1999 Tirocinio elettivo presso l’Istituto di Medicina interna;

            - 1999-2002 Medico interno presso la Divisione di Cardiologia (Responsabile Prof. R De Caterina).',


            '# Titoli conseguiti

            - Specializzazione con Lode in Dermatologia e Venereologia presso Università degli Studi di Messina;

            - Perfezionato in Dermatologia Cosmetologica presso Università degli Studi di Messina con votazione finale 50/50

            - Perfezionato in Dermatologia Tropicale presso Università degli Studi di Messina con votazione finale 50/50


            * Curriculum e attività

            Laurea con Lode in Medicina e Chirurgia presso l’Università degli Studi di Catania;

            Ha effettuato diversi Master in Dermatoscopia digitale.

            Dal 1999, vincitore di concorso pubblico come Dirigente Medico I° livello (ex Aiuto), presso l’Azienda Ospedaliera di Alta Specializzazione Garibaldi-Catania, nell’U.O. di Dermatologia e Venereologia.',


            'TITOLI CONSEGUITI

            - Specializzazione, Magna Cum Laude, in Endocrinologia e Malattie del Ricambio, conseguita presso la II Università degli Studi di Roma, "Tor Vergata";

            - Ricercatrice in Neuroscienze  presso la Georgetown University, Washington, D. C. USA (1992);

            - Ricercatrice in Neuroscienze presso la Stony Brook University, Stony Brook , NY, USA (1996-1997).


            CURRICULUM

            - Laurea in Medicina e Chirurgia, Magna Cum Laude, conseguita presso l\'Università Cattolica del Sacro Cuore di Roma (luglio 1989);

            - Attività di ricerca nel campo della “Neuroimmunoendocrinologia”, i cui risultati sono stati pubblicati su riviste internazionali e presentati a congressi nazionali ed internazionali;

            - Insegnamento di Patologia Generale presso la scuola per infermieri professionali, San Giuseppe di Roma;

            - Ricercatrice accreditata presso l’ASP della Regione Lazio;

            - Dal 2008 Tutor per studenti del V e VI anno dell’Università Cattolica del Sacro Cuore;

            - Dal 2008 Tutor per laureati abilitandi dell’Università Cattolica del Sacro Cuore;

            - Autrice del libro \'La tiroide e le sue patologie\' (Giacomo Catalani editore).',


            'TITOLI DI STUDIO

            - Specializzazione con Lode in Endocrinologia e Malattie del Ricambio presso l\'Università degli Studi di Roma "La Sapienza".

            CURRICULUM E ATTIVITA\'

            Laurea in Medicina e Chirurgia presso l\'Università degli Studi di Roma "La Sapienza" (ottobre 1991);

            Dirigente Medico Endocrinologa presso l\'Ospedale di San Giovanni Addolorata di Roma.',


            'TITOLI DI STUDIO

            - Laurea in medicina e chirurgia(2000);

            - Specializzazione in genetica medica(2004);

            - Specializzazione con Lode in Medicina dello Sport presso L\'Università degli Studi di Roma "La Sapienza" (2007);


            Curriculum e attività:

            - 2007-2008 Referente antidoping del Comitato Italiano Paralimpico.
            - 2007-2008 Medico addetto alle squadre nazionali della Federazione Italiana Canottaggio.
            - 2007-2008 collaborazione con l’Unità di Sincope, Dipartimento di Cardiologia, dell’Ospedale G. B. Grassi di Ostia diretto dal Prof. Ammirati;
            - Gennaio-Febbraio 2009 Periodo di training presso il dipartimento di cardiologia del King’s College Hospital and University Hospital Lewisham, Londra- U.K.;
            - Dal 2007 docente presso la Scuola dello Sport del Lazio;
            - Dal 2007 Medico Doping Control Officer per la FMSI;
            - Attualmente in servizio presso l’Istituto Nazionale di Medicina e Scienze dello Sport “Giulio Onesti” di Roma nel dipartimento di Medicina e Cardiologia dello Sport diretto dal Prof. A. Mirafiori;',


            '
            Laurea specialistica a ciclo unico (5/6 anni) conseguita il 24/07/2014
            Universita\' degli Studi INSUBRIA VARESE-COMO Dipartimento di
            SCIENZE CHIRURGICHE e MORFOLOGICHE 46/S - Classe delle
            lauree specialistiche in medicina e chirurgia

            Denominazione corso:MEDICINA E CHIRURGIA.

            Votazione finale: 110/110 Età alla data di conseguimento del titolo: 26

            | Anno di inizio: 2007 | Durata ufficiale del corso di studi (anni): 6

            Titolo:
            TRATTAMENTO LAPAROSCOPICO DELLE ERNIE VENTRALI IN
            UN
            CENTRO AD ALTO VOLUME: STUDIO RETROSPETTIVO SUL
            TASSO DI RECIDIVA E IL DOLORE CRONICO POSTOPERATORIO
            Preparata in 12 mesi. Tipo di Tesi: SPERIMENTALE.
            Abilitazione conseguita il 05/02/2015 ed iscritta all’ordine dei
            Medici di Varese dal 03/03/2015.
            Specializzata in Medicina Generale a gennaio 2019 al termine
            del triennio 2015-2018.',

            '# Titoli conseguiti
            - Specializzazione in Andrologia presso l’Università di Pisa nel 1992;
            - Specializzazione in Chirurgia Generale presso l’Università degli Studi di Roma “La Sapienza” nel 1987;
            - Specializzazione in Oncologia presso l’Università degli Studi di Roma “La Sapienza” nel 1980;
            - Specializzazione in Endocrinologia presso l’Università degli Studi di Roma “La Sapienza” nel 1977.
            # Curriculum e attività
            Laurea in Medicina e Chirurgia presso l’Università degli Studi di Roma “La Sapienza” (luglio 1974);
            dal 1975 al 2001 Assistente e quindi Aiuto della Chirurgia Generale dell\'Ospedale San Carlo Nancy di Roma;
            dal 1982 ad oggi Dirigente dello Studio di Andrologia e di Chirurgia Andrologica di Roma, prima struttura andrologica privata di Roma;
            Ha pubblicato oltre 200 articoli su riviste straniere ed italiane, Editor di Diagnosing Impotence (Masson 1989), Diagnosing Infertility (Karger, 1991);
            organizzatore degli International Meeting of Andrology che hanno portato a Roma i più grandi andrologi del mondo;
            visitato oltre 30.000 pazienti con patologie andrologiche; una ricche casistica personale di protesi peniene (oltre 500);
            Frequenza istituto e laboratori della Clinica Medica V, Università Sapienza di Roma dal 1970 al 1974;
            Frequenza del Reparto di Urologia Klinikum Steglitz di Berlino 1981, 1982, 1983. Istituto Andrologico de Baleares dal 1984 al 1987;
            lavora presso alcune strutture accreditate con il SSN.',

            '# Titoli conseguiti
            - Specializzazione in Cardiologia conseguita presso l\'Università degli Studi di Pavia (ottobre 2006).
            # Curriculum e attività
            - Laurea in Medicina e Chirurgia presso l\'Università degli Studi G. D\'Annunzio di Chieti (ottobre 2002);
            - Principali mansioni e responsabilità Attività clinico assistenziale (UTIC, PS, Reparto di Cardiologia) Attività diagnostica non invasiva (ecocardiografia transtoracica, test ergometrico, Holter ECG, Monitoraggio Pressorio, ecoDoppler TSA);
            - Attività interventistica in sala di emodinamica: diagnostica vascolare coronarica e periferica, angioplastiche coronariche e periferiche;
            - 1998-1999 Tirocinio elettivo presso l’Istituto di Medicina interna;
            - 1999-2002 Medico interno presso la Divisione di Cardiologia (Responsabile Prof. R De Caterina).',

            'Da dicembre 2014 a dicembre 2017:
            Medico Specializzando in Medicina Generale (triennio 2014-2017)
            Ospedale di Circolo di Busto Arsizio - Piazzale Solaro Prof. Giuseppe 3, 21052 Busto A. (VA)
            Ospedale di Saronno - Piazzale Borella 1, 21047 Saronno (VA)
            Ospedale di Tradate - Piazza A. Zanaboni 1, 21049 Tradate (VA)
            Da giugno 2014:
            Medico di continuità assistenziale (ex Guardia Medica) - ATS Insubria
            Area distrettuale di Busto Arsizio - Viale Lombardia 51, 21052 Busto A. (VA)
            Area distrettuale di Gallarate - Via E. Pastori 4, 21013 Gallarate (VA)
            Da agosto 2013:
            Attività di sostituzione di Medici di Assistenza Primaria (MAP) sul territorio di Milano, Varese e provincia;
            Assistenza medica a gare e manifestazioni sportive in collaborazione con la federazione italiana di atletica leggera (FIDAL);

            Novembre 2018
            Master of Professional Empowerment: Management, Comunicazione, Economia Sanitaria e Ricerca Clinica. Scuola Italiana di Formazione e Ricerca in Medicina di Famiglia, Como
            Ottobre 2017
            Corso teorico – pratico di I livello in ossigeno ozono terapia. Società Scientifica di ossigeno ozono terapia SIOOT, Gorle (BG)
            Da dicembre 2014 a dicembre 2017
            Corso di Formazione Specifica in Medicina Generale (triennio 2014 – 2017), Ospedale di Circolo di Busto Arsizio, Ospedale di Saronno e Tradate (VA)
            Luglio 2013
            Abilitazione Professionale conseguita nella prima sessione dell’esame di Stato dell’anno 2013.
            Iscrizione all’Ordine dei Medici di Varese dal 23/07/2013 al n° 07344
            Marzo 2013
            Laurea conseguita a pieni voti, con tesi dal titolo “Terapia chirurgica laser del carcinoma basocellulare cutaneo”, relatore Prof. Nicola Zerbinati, presso la Facoltà di Medicina e Chirurgia dell’Università degli Studi dell’Insubria di Varese. Anno Accademico 2011/2012.
            Luglio 2004
            Diploma di maturità scientifica conseguito presso il Liceo Scientifico Collegio Rotondi, Gorla Minore (VA), con votazione 90/100.

            Attitudine a instaurare buoni rapporti con colleghi a favore di un sereno clima lavorativo;
            differenziata, di adattamento ad ambienti multiculturali e di dialogo.',

            'Da ottobre 2015 a novembre 2016
            Assistenza medica a gare sportive promosse da FIDAL
            Da dicembre 2015
            Sostituzioni temporanee di Medici di Medicina Generale (MMG)
            Pagina 2 - Curriculum vitae di
            Sonia Cappello
            Dal 27 novembre 2015 al 24 novembre 2016
            Fondazione Madonna della Croce Onlus, via Ospedale 1 -21059 Viggiù (VA)
            Struttura per anziani
            Medico di Struttura
            Servizio di Assistenza medica degli Ospiti degenti ed espletamento di tutte le principali mansioni inerenti l’esercizio della professione medica, comprendenti turni di reperibilità telefonica.
            Dal 7 dicembre 2015 al 24 novembre 2016
            Edos Srl, sede legale in via S. da Foiano 14 – 50125 Firenze
            RSA San Luigi Gonzaga – via Garibaldi 29, Gorla Minore (VA)
            Attività di Medico di Struttura.
            Servizio di Assistenza medica degli Ospiti degenti, operando in sinergia con la dirigenza della Struttura: verifica delle condizioni di salute degli Ospiti, tramite visite periodiche; prescrizione e disposizioni sanitarie, supervisione e controllo della corretta somministrazione delle terapie prescritte verificando altresì il corretto adempimento dei servizi; servizio di reperibilità telefonica, feriale e festiva.
            Dall’ 8 aprile al 3 settembre 2020
            Medico di Medicina Generale con incarico provvisorio presso l’ambito di Busto Arsizio (VA)
            ESAMED viale Luigi Cadorna 31, 21057 Busto Arsizio (VA)
            Dal 21 dicembre 2020
            BAOBAB Cooperativa Sociale, via Zara 12 – 21049 Tradate (VA)
            Medico di Medicina Generale
            Assistenza Medica presso il domicilio degli utenti indicati dalla cooperativa stessa e presso la loro sede
            Dal 30 dicembre 2020
            Ge.A.S.C., con sede in Vicolo Sereni 29 – 21054 Fagnano Olona (VA)
            Gestione Aziendale Servizi Comunali
            Assistenza Medica all’attività ambulatoriale di prelievo per analisi
            Dal 1 marzo 2021
            Medico di Medicina Generale con incarico definitivo presso l’ambito di Fagnano Olona - Olgiate Olona - Solbiate Olona (VA)
            C.M.M.G. Centro Medico Medicina di Gruppo, via Montello 2/A, 21054 Fagnano Olona',

            'TITOLI DI STUDIO
            - Specializzazione con Lode in Endocrinologia e Malattie del Ricambio presso l\'Università degli Studi di Roma "La Sapienza".


            CURRICULUM E ATTIVITA\'

            Laurea in Medicina e Chirurgia presso l\'Università degli Studi di Roma "La Sapienza" (ottobre 1991);
            Dirigente Medico Endocrinologa presso l\'Ospedale di San Giovanni Addolorata di Roma.',

            'TITOLI DI STUDIO

            - Specializzazione con Lode in Medicina dello Sport presso L\'Università degli Studi di Roma "La Sapienza" (2007);


            CURRICULUM E ATTIVITA\'
            - Laurea in Medicina e Chirurgia conseguita presso l’Università degli Studi di Roma “La Sapienza” (2004).
            - 2007-2008 Referente antidoping del Comitato Italiano Paralimpico.
            - 2007-2008 Medico addetto alle squadre nazionali della Federazione Italiana Canottaggio.
            - 2007-2008 collaborazione con l’Unità di Sincope, Dipartimento di Cardiologia, dell’Ospedale G. B. Grassi di Ostia diretto dal Prof. Ammirati;
            - Gennaio-Febbraio 2009 Periodo di training presso il dipartimento di cardiologia del King’s College Hospital and University Hospital Lewisham, Londra- U.K.;
            - Dal 2007 docente presso la Scuola dello Sport del Lazio;
            - Dal 2007 Medico Doping Control Officer per la FMSI;
            - Attualmente in servizio presso l’Istituto Nazionale di Medicina e Scienze dello Sport “Giulio Onesti” di Roma nel dipartimento di Medicina e Cardiologia dello Sport diretto dal Prof. A. Pelliccia;
            - Attualmente in servizio presso l’ambulatorio di cardiologia dell’Associazione Cavalieri Italiani del Sovrano Militare dell’Ordine di Malta.'
        ];

        for($i=0; $i < 100; $i++){
            $new_user = new User();
            $new_user->name = $this->randomName();
            // if($new_user->name == 'Donata'|| 'Sara'||'Maria'||'Piera'||'Camilla'||'Giada'||'Licia'||'Teoriana'||'Giulia'||'Rita'||'Giovanni'||'Anna'||'Maria'||'Fiorella'|| 'Edith'||'Marie'||'Marlena'||'Sasha'||'Jurgen'||'Maurizia'||'Kim'||'Yen'){
            //     $new_user -> propic ='img/femaledoctor.png';
            // } else{
            //     $new_user -> propic ='img/maledoctor.png';
            // }
            $new_user->surname = $this->randomSurname();
            $new_user->address = $this->randAddress();
            $new_user->bio = $bios[array_rand($bios)];

            //questo faker restituisce una stringa con un percorso come se la foto fosse stata caricata da un pc
            // $new_user -> propic = $faker->image(null, 360, 360, 'animals', true);
            $new_user -> propic ='img/neutraldoctor.png';


            //questa funzione prende i nomi e i cognomi e ci genera una mail
            $new_user->email = strtolower($new_user->name) . strtolower($new_user->surname) . strval(rand(1, 20)) . '@mail.com';

            //con ahs posso impostare una pwd uguale per tutti così posso entrare con ogni account(nel db si vede criptata)
            $new_user->password = Hash::make("12345678");
            $new_user->save();
        }
    }

    //questa è una funzione che prendere in ordine randomico i nomi dei doctors
    private function randomName(){
        $array = ['Ajay', 'Gabriele', 'Mike', 'Simone', 'Donata', 'Ada', 'Alfio', 'Bruno', 'Brigitte', 'Carmelo', 'Carmen', 'Davide', 'Emanuele', 'Ermenegilda', 'Francesco', 'Federica', 'Giulio', 'Gaia', 'Henry', 'Hilary', 'Ilenia', 'Igor', 'Juan', 'Juanita', 'Keanu', 'Kate', 'Leopoldo', 'Luigina', 'Mario', 'Maria', 'Nicholas', 'Nicole', 'Orietta', 'Otello', 'Perry', 'Petunia', 'Quasimodo', 'Quasimada', 'Richard', 'Rachele', 'Sandrina', 'Thomas', 'Tiziana', 'Ugo', 'Ughina', 'Vincent', 'Victoria', 'Willian', 'Wanda', 'Xavier', 'Xena', 'Yolanda', 'Yoda', 'Zach', 'Zelda' ];
        shuffle($array); //mischia
        return $array[0];
    }

    //questa è una funzione che prendere in ordine randomico i nomi dei doctors
    private function randomSurname(){
        $array = ['Rosa', 'Scarparo', 'Capozzi', 'Casalini', 'Leclerc', 'Reeves', 'Gallus', 'Rozzi', 'Logallo', 'DeUghi', 'Corradi', 'DeLuca', 'Mosca', 'Sardo', 'DiMedda', 'Skywalker', 'Griffin', 'DiCesare', 'Dallavalle', 'Jacobs', 'Tamberi', 'Turk', 'Dorian', 'Cox', 'Reid', 'Peralta', 'Santiago', 'Diaz', 'House', 'Mosby', 'Picard', 'Stinson', 'Rossi', 'Sanchez', 'Montecchi', 'Capuleti', 'Montecristo', 'Villanueva', 'DiMonza', 'Mondella', 'Tramaglino'];
        shuffle($array); //mischia
        return $array[0];
    }

    private function randAddress(){
        $array = ['Via della Stalla, 15', 'Via de Ughi, 30', 'Via del Sacro Cuore, 80', 'Via Parco della Vittoria, 67', 'Via dei Compagni non Lavoratori, 1', 'Viale Gran Sasso, 180', 'Viale Romano, 45', 'Via dei Cuori, 50', 'Piazza della Repubblica, 150', 'Vicolo Corto, 14', 'Viale dei Pioppi, 155', 'Via della Molisana, 23', 'Via dei Dischi, 98', 'Via del Watsapp, 52', 'Via Json non Trovato, 33', 'Via Snacks, 39', 'Corso Rick&Morty, 78', 'Via della Sardegna, 25', 'Via bruciata, 63', 'Via quel Paese, 55' ];
        shuffle($array); //mischia
        return $array[0];
    }
}
