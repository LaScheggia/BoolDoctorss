@extends('layouts.app')



@section('content')
<div class="container">
  <h1>Le tue statistiche</h1>
  @if (count($messages) == 0 && count($reviews) == 0)
      <h2 id="empty_page">Non hai statistiche disponibili</h2>
  @else

  <div class="chart_1">
    <h4>Numero di messaggi e recensioni ricevute ogni mese</h4>
    <canvas id="myChart"></canvas> {{-- tag canvas del "plug-in" che fa le chart con id="ide della chart sotto" --}}
  </div>
  <div class="chart_1">
    <h4>Voti ricevuti ogni mese</h4>
    <canvas id="myOtherChart"></canvas> {{-- tag canvas del "plug-in" che fa le chart con id="ide della chart sotto" --}}
  </div>
  @endif
  <p class="link_dashboard"><a href="{{ route('admin.profile.index') }}">Torna alla Dashboard</a></p> {{-- BTN CHE VA INDIETRO --}}
</div>


<script src="https://unpkg.com/dayjs@1.8.21/dayjs.min.js"></script>
<script>dayjs().format()</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js" integrity="sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
var ctx = document.getElementById('myChart'); /* variabile che prende con il get elm la chart sotto */
var ct2 = document.getElementById('myOtherChart'); /* variabile che prende con il get elm la chart sotto */
var reviews = {!! $reviews->toJson() !!}; /* trasformazione in file json delle recens */
var messages = {!! $messages->toJson() !!}; /* trasformazione in file json dei mess */
console.log(reviews);
console.log(messages);

var now = dayjs(); /* richiamo di dayjs */

if (reviews[0]) {
  var firstDateRev = reviews[0].added_on;
  var date1 = dayjs(firstDateRev);
} else {
  var date1 = now;
}

const firstDateMess = messages[0].added_on;
const date2 = dayjs(firstDateMess);

var datex;
if (date2 < date1) {
  datex = date2;
} else {
  datex = date1;
}


var diff = now.diff(datex, 'month');
var diffRece = now.diff(date1, 'month');

var months = [];
var monthRevs = [];
var rewsMonth = [];
var messMonth = [];
var voto1 = [];
var voto2 = [];
var voto3 = [];
var voto4 = [];
var voto5 = [];

// prima tabella
var x = 1;
let i = 0;
if (datex.$M == 0) {
  diff++;
  i++;
  x--;
}
for (i; i <= diff; i++) {
  var numbMonth = datex.$M + i + x;
  months.push(numbMonth + '/2021');

  var countRec = 0;
  var countMes = 0;
  for (let j = 0; j < reviews.length; j++) {

    if (numbMonth == dayjs(reviews[j].added_on).$M + 1) {
      countRec++;
    }
  }
  for (let j = 0; j < messages.length; j++) {
    if (numbMonth == dayjs(messages[j].added_on).$M + 1) {
      countMes++;
   }
  }
  rewsMonth.push(countRec);
  messMonth.push(countMes);
}

// seconda tabella
x = 1;
i = 0;
if (date1.$M == 0) {
  diffRece++;
  i++;
  x--;
}
for (i; i <= diff; i++) {
  var numbMonthRece = date1.$M + i + x;
  monthRevs.push(numbMonthRece + '/2021');

  var countRece1 = 0;
  var countRece2 = 0;
  var countRece3 = 0;
  var countRece4 = 0;
  var countRece5 = 0;
  for (let j = 0; j < reviews.length; j++) {
    if (numbMonthRece == dayjs(reviews[j].added_on).$M + 1) {
      switch (reviews[j].rating) {
        case 1:
          countRece1++;
          break;
        case 2:
          countRece2++;
          break;
        case 3:
          countRece3++;
          break;
        case 4:
          countRece4++;
          break;
        case 5:
          countRece5++;
          break;

        default:
          break;
      }
    }
  }

  voto1.push(countRece1);
  voto2.push(countRece2);
  voto3.push(countRece3);
  voto4.push(countRece4);
  voto5.push(countRece5);

}

var myChart = new Chart(ctx, { /* qua dichiarano il nome della chart */
    type: 'bar', /* qua il tipo di chart */
    data: {
        labels: months, /* il nome della lable suppongo quello in alto*/
        datasets: [
          {
            label: 'Numero di recensioni',
            data: rewsMonth, /* il numero di rece al mese */
            backgroundColor: [
                '#80CBC4',
            ],
            borderColor: [
                '#004D40',
            ],
            borderWidth: 1
        },
        {
            label: 'Numero di messaggi ricevuti',
            data: messMonth, /* il numero di mess al mese */
            backgroundColor: [
                '#0097A7',
            ],
            borderColor: [
                '#006064',
            ],
            borderWidth: 1
        },
      ]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true, /* parte da 0 */
                ticks: {
                stepSize: 1 /* numero di righe sull'asse delle y - quello che si spinge in altezza */
              }
            }
        }
    }
});

var myChart = new Chart(ct2, { /* qua dichiarano il nome della chart */
    type: 'bar', /* tipo di chart */
    data: {
        labels: monthRevs, /* il numero di rece ricevute*/
        datasets: [
          {
            label: 'Recensioni con voto 1',
            data: voto1, /* le rece con value 1 */
            backgroundColor: [
                '#D32F2F',
            ],
            borderColor: [
                '#B71C1C',
            ],
            borderWidth: 1
        },
        {
            label: 'Recensioni con voto 2',
            data: voto2, /* le rece con value 2 */
            backgroundColor: [
                '#F57C00',
            ],
            borderColor: [
                '#BF360C',
            ],
            borderWidth: 1
        },
        {
            label: 'Recensioni con voto 3',
            data: voto3, /* le rece con value 3 */
            backgroundColor: [
                '#FFEB3B',
            ],
            borderColor: [
                '#FBC02D',
            ],
            borderWidth: 1
        },
        {
            label: 'Recensioni con voto 4',
            data: voto4, /* le rece con value 4 */
            backgroundColor: [
                '#C0CA33',
            ],
            borderColor: [
                '#AFB42B',
            ],
            borderWidth: 1
        },
        {
            label: 'Recensioni con voto 5',
            data: voto5, /* le rece con value 5 */
            backgroundColor: [
                '#43A047',
            ],
            borderColor: [
                '#1B5E20',
            ],
            borderWidth: 1
        },
      ]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,  /* parte da 0 */
                ticks: {
                stepSize: 1 /* numero di righe sull'asse delle y - quello che si spinge in altezza */
              }
            }
        }
    }
});
</script>


@endsection
