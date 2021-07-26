<?php

use App\Message;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker; //usa il Faker

class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();

        $messages = [
            'Salve Dottore, ho bisogno di un consulto! Oggi sarà in studio?',
            'Dottore non riesco a contattarla. Ho bisogno di aiuto!',
            'Dottore, ho cercato i sintomi su Google. Sono grave!',
            'Dottore, ho bisogna di una visita omeopatica urgente!',
            'Salve, sono un ragazzo di 26 anni appena laureato, dovrei essere contento e spensierato, ma in realtà non lo sono. Sono tante le cose che offuscano la mia mente. Cosa devo fare?',
            'Ho i sintomi del Corona Virus. Cosa faccio se risulto positivo al test? E se sono negativo?',
            'Mi può dare la mail del Dott. Google?',
            'Vorrei tanto essere felice, ho sempre ansia e stanchezza mentale, faccio sempre respiri come se nn riuscissi a respirare bene... Che posso fare? ',
            'Vorrei perdere peso. Possiamo fissare un appuntamento per sviluppare un piano terapeutico?',
            'Quale tipo di trattamento mi consiglierebbe, e perché?',
            'Dottore, che ne pensa dei vaccini?',
            'Qual è la giusta distanza di sicurezza dagli altri?',
            'Salve Dottore, ho paura del vaccino. Lei cosa mi consiglia?',
            'Dottore, ma la mascherina? Quando la devo mettere? Se parlo con qualcuno da vicino la posso abbassare?',
            'Secondo Lei, quali sono gli obiettivi realistici del mio piano terapeutico e come saranno supportati?',
            'Dottore, quando posso ritirare i miei esami?',
            'Dottore salve. Ma le mascherine servono? E a chi?',
            'A chi vengono fatti i tamponi? Perché non li fanno a tutti?',
            'Dottore, posso ammalarmi due volte di Covid-19?',
            'Cos’è l’immunità di gregge?'
        ];

        foreach ($users as $user) {
            for ($i = 0; $i < rand(3, 15); $i++) {
                $new_message = new Message();
                $new_message->user_id = $user->id;
                $new_message->patient_name = $this->randomName();
                $new_message->patient_surname = $this->randomSurname();
                $new_message->patient_phone = $faker->phoneNumber();

                //questa funzione prende i nomi e i cognomi e ci genera una mail
                $new_message->patient_mail = strtolower($new_message->patient_name) . strtolower($new_message->patient_surname) . strval(rand(1, 20)) . '@mail.com';

                for ($j = 0; $j < count($messages); $j++) {
                    $new_message->text_message = $messages[array_rand($messages)];
                }

                $new_message->added_on = $faker->dateTimeBetween("-5 months", "now");
                if (rand(0, 1)) {
                    $new_message->read = 1;
                }
                $new_message->save();
            }
        }
    }

    //prendiamo un nome random con la funzione
    private function randomName(){
        $array = ['Furio', 'Magda', 'Danilo', 'Gladis', 'Jack', 'Remigio', 'Mario', 'Piero', 'Susanna', 'Iolanda', 'Paolo', 'Mirko', 'James', 'John', 'Giuseppe', 'Adam', 'Giuliano', 'Marta', 'Rebecca', 'Ruslan', 'Stefan', 'Annalisa', 'Mariangela', 'Giampiero', 'Karl', 'Charles', 'Cesare', 'Percival', 'Mariangiongiangela', 'Walter', 'Giancarlo', 'Marie', 'Hank', 'Sergio', 'Paul', 'Michael', 'Tetsuko', 'Muhammad', 'Kim', 'Saul'];
        shuffle($array); //mischia
        return $array[0];
    }

    //prendiamo un cognome random con la funzione
    private function randomSurname(){
        $array = ['Goodman', 'Salamanca', 'White', 'Periscopio', 'Marte', 'Olio', 'Nakamura', 'Vuong', 'Chang', 'Codi', 'Doriano', 'Runner', 'Alma', 'Bastianich', 'Niubbo', 'Restio', 'Buscaferri', 'Tartagliamela', 'Fujiwara', 'Rezzonico', 'Ario', 'Bontempone', 'Sarrismo', 'Nicosia', 'Vladu', 'Ahbram', 'DeUghi', 'Gregorio', 'Rinoscopo', 'Giandeibrughi', 'Errante', 'Ionu', 'Canalis', 'Signore', 'Holt'];
        shuffle($array); //mischia
        return $array[0];
    }
}

