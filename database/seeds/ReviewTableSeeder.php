<?php

use App\Review;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker; // uso il Faker

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();
        $names = [
            'Adam86',
            'Nickol',
            'TimoXXX',
            'gabrisca',
            'renato77',
            'clairemarie',
            'Gabriele',
            'Peppe55',
            'Roberto Muro',
            'Adriana Loi',
            'Enrico Mentana',
            'Luis Alberto',
            'Aldo@9',
            'Jack44',
            'Chiara.masi',
            'godOfW',
            'Maria Malena',
            'Flavia79',
            'DocGiulia',
            'Cristina Scabbia',
            'Puskas2000',
            'JolandaM',
            'HocDoc',
            'DocGiulia',
            'PaoloM',
            'Gianfrascheitto',
            'Marisol55',
            'Holt',
            'boYle125',
            'Ughetto',
            'DeUghitheBest',
            'BesTkLlaAh',
            'pusruantJoker'
        ];

        $negative_titles = [
            'Pessimo',
            'Mai più',
            'Scappate!',
            'Esperienza negativa',
            'Non andateci',
            'Sono frustrata',
            'Lo sconsiglio',
            'Insomma...',
            'Assolutamente no',
            'Statene alla larga',
            'Mio figlio poteva morire',
            'Mi ha disgnosticato il cancro ma era un tappo intestinale',
            'Incompetente',
            'Non ci tornerò mai più',
            'Studio sporchissimo',
            'Maleducato',
            'Se lo becco per strada lo stiro',
            'Analfabeta funzionale',
            'La laurea l\'ha trovata negli ovetti Kinder'
        ];

        $positive_titles = [
            'Grazie!',
            'Ottimo dottore',
            'Sono grata a questo dottore',
            'Tutto ok',
            'Professionale',
            'Preparato',
            'Lo consiglio',
            ':) ottimo dottore',
            'La mia esperienza',
            'Mi ha salvato la vita!',
            'Ho finalmente risolto il mio problema',
            'Ora vivo una vita migliore',
            'Dottore al top!',
            '10/10',
            'Bellissima esperienza',
            'Esperienza mistica'
        ];

        $positive_reviews = [
            'Il dottore è molto preparato, lo consiglio!',
            'Buon servizio',
            'ottimo!',
            'Grazie ancora dottore. Gentile e disponibile',
            'Molto chiaro nelle spiegazioni. Lo consiglio',
            'Cortese e disponibile. Lo consiglio vivamente ad altre persone.',
            'Puntuale, preparato e cortese. Se dovessi trovare un difetto, direi il costo. Ma si sa che i medici bravi sono cari',
            'Volevodire Che il dottore e’ Bravissimo!',
            'Il dottore è una persona di grande professionalità, molto disponibile e di grande cuore. Mi ha evitato un intervento alla carotide con una sua visita con eco dobbler fatto da lui. Perché mi hanno fatto in un altro laboratorio un eco sbagliato dove era scritto che dovevo essere operato.
              Quindi ho una grande stima per lui, e lo cosiglio alle persone che avessero bisogno di un chirurgo vascolare',

            'Nello studio ho trovato molta cortesia e disponibilità. Il dottore e propenso all ascolto e subito valuta la situazione di salute. Mi sono sentita subito a mio agio e il dermatologo adatto a me',
            'Molto soddisfatto della visita urologica, professionale, super puntuale e disponibile. Assolutamente consigliato',
            'Consigliato a tt un dottore bravissimo,e capisce e risolve il problema. Nn lo cambierei con nessuno. Il numero uno.',
            'Persona molto professionale e gentile e soprattutto studio pulitissimo.',
            'Qui in ospedale ho incontrato un reparto d\'eccellenza, tutti impegnati con grande umanità oltre che con competenza e serietà. .
            Desidero esprimere la mia più viva riconoscenza a tutto lo Staff medico, paramedico e infermieristico che mi ha assistita durante la degenza che, come potete immaginare in momenti come questi, dove le viste di parenti e amici erano interdette, sembrava non finire mai Vi scrivo per ringraziarvi.
            Il Signore benedica tutti quanti voi. Grazie dal più profondo del cuore
            Quella che applica il Dottore è una metodologia rivoluzionaria che utilizza protesi autofissanti, le Progrip senza toccare i nervi sensitivi responsabili del dolore cronico. I pazienti vengono preparati all’intervento effettuando in una sola mattina tutte le indagini preoperatorie e, di regola, dimessi due ore dopo l’intervento chirurgico perfettamente in grado di camminare autonomamente.
            Fiore all’occhiello della sanità Campana. '
        ];

        $negative_reviews = [
            'Davvero insoddisfatta. Il dottore non rispetta mai l\'orario degl appuntamenti ed è anche sgarbato se glielo si fa presente. Pessimo',
            'Non mi sono trovato per niente bene! Pochissime informazioni dei dottori, pochi contenuti, dottori che non rispondono e quando ho fissato un appuntamento e poi ho chiamato per chiedere conferma, il mio appuntamento non esisteva... Boh!?',
            'Ho avuto il dispiacere di essere visitata da questo dottore all\'ospedale di Chiavenna.
            Lasciando perdere la visita orrenda(mi ha fatto male!) ed il fatto che rispondesse al cellulare mentre gli spiegavo i sintomi ,mi ha diagnosticato qualcosa che non avevo perciò, se fossi in voi ,ne starei alla larga!! ',
            'Consiglio di essere prudenti con questo sito perchè nel momento in cui si va a leggere le recensioni per capire se è realmente un\'ottimo dottore o dott.ssa in base alle esperienze di altri pazienti le si trova quasi tutte a voto alto per il fatto che dopo un pò di tempo le cancellano e si tengono quelle che vogliono, oltretutto dopo che la recensione è stata accettata e postata non danno più la possibilità di rinviarla.
            Un\'assurdità!
            Buono per il/la dottore/ssa perchè ne ricavano ma pessima per i pazienti visto che non hanno la consapevolezza dei difetti del specializzato',
            'Non fantastica come esperienza, mi aspettavo altro.

            Una volta contattato il dottore e avuto conferma, si è svolto tutto come una normale prenotazione. Non capisco la differenza. ',
            'Ho richiesto una visita PRIVATA per poter scegliere IO STESSA il medico che volevo. Mi presento all’appuntamento alle 14:45 mi ricevono con 20 minuti di ritardo per poi trovarmi UN ALTRA dottoressa e non la del zoppo. ( dottoressa comunque bravissima ed eccellente) ma questo servizio non è assolutamente professionale visto che mi avete messo l’appuntamento nel pomeriggio e la DR.Essa del zoppo riceve solo al mattino! ',
            'Non credibili',
            'Impreparato',
            'Pessima esperienza. Mai più',
            'Molto delusa dal trattamento ricevuto. Farò reclamo',
            'Insomma...'
        ];

        foreach ($users as $user) {
            $r = rand(7, 14); //il dottore avrà un minimo di 7 e un max di 14 recensioni
            for ($i = 0; $i < $r; $i++) {
                $new_comment = new Review();

                $new_comment->user_id = $user->id;
                if (rand(0, 1)){
                    for ($j = 0; $j < count($names); $j++) {
                        $new_comment->patient_name = $names[array_rand($names)];
                    }
                }

                $new_comment->rating = rand(1, 5);

                //qui facciamo un if dove se il rating è 1 o 2 prendere in considerazione gli elem negativi(titolo e testo)
                if  ($new_comment->rating === 1 || $new_comment->rating === 2){
                    for ($k = 0; $k < count($negative_reviews); $k++) {
                        $new_comment->title = $negative_titles[array_rand($negative_titles)];
                        $new_comment->text = $negative_reviews[array_rand($negative_reviews)];
                    }
                }

                //qui facciamo un if dove i voti da 3 a 5 prenderanno in considerazione gli elementi positivi (titolo e testo)
                if ($new_comment->rating === 3 || $new_comment->rating === 4 || $new_comment->rating === 5 ) {
                    for ($l = 0; $l < count($positive_reviews); $l++) {
                        $new_comment->title = $positive_titles[array_rand($positive_titles)];
                        $new_comment->text = $positive_reviews[array_rand($positive_reviews)];
                    }
                }
                //questo faker ci restituisce delle date entro un certo lasso di tempo, queste date le useremo x le statistiche dei dottori
                $new_comment->added_on = $faker->dateTimeBetween("-6 months", "now");
                $new_comment->save();
            }
        }
    }
}
