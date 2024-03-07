<?php
//Ubah Sesuai Folder Script Diletakkan
$base = 'https://i-phone-snowy.vercel.app/files/scripts/survey/';
function generateRandomString($panjang) {
    $karakter = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    return substr(str_shuffle($karakter), 0, $panjang);
}
$cd = generateRandomString(6);
if(!isset($_COOKIE['code'])){
    setcookie("code",$cd , time() + (30 * 24 * 60 * 60), "/");
}
$code = isset($_COOKIE['code']) ? $_COOKIE['code'] : $cd;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SELAMAT, KAMU MENDAPATKAN IPHONE 15 PRO MAX GRATIS</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <script>

    function randomColor() {

        const letters = '0123456789ABCDEF';

        let color = '#';

        for (let i = 0; i < 6; i++) {

            color += letters[Math.floor(Math.random() * 16)];

        }

        return color;

    }

    function printRandomColorText(text) {

        const coloredText = Array.from(text).map(char => {

            const charColor = randomColor();

            const borderWidth = '2px'; // Atur lebar border sesuai kebutuhan

            return <span class="p-2 m-1 border-rounded bg-light border-rounded-3 border-danger" style="color: ${charColor}; border: ${borderWidth} solid ${charColor}">${char}</span>;

        }).join('');

        document.write(coloredText);

    }
  
  function printRandomColorTextNB(text) {
        const coloredText = Array.from(text).map(char => {
            const charColor = randomColor();
            const borderWidth = '2px'; // Atur lebar border sesuai kebutuhan
            return <span class="" style="color: ${charColor};">${char}</span>;
        }).join('');
        document.write(coloredText);
    }

    // Panggil fungsi ini pada saat yang sesuai

    // printRandomColorText("Teks Anda di sini");

 </script>
<style>
  .bggift{
  /*  background: rgba(0, 0, 0, 0.2) url('https://pikir.xyz/files/images/admin/giphy.gif') no-repeat center center fixed;
    background-size: cover;
    } */
  .borderdotted {
    border: 8px dotted #e00425;
    margin: 2px
  }
</style>
</head>
<body class="bggift bg-dark bg-gradient borderdotted">

<div class="container mt-1 text-center">
    <div class="card">
        <div class="card-body">
            <div id="openingSegment" class="bggift">
              
              <div class="animate_animated animate_bounceInDown">
                <h1 class="text-success animate_animated animateflash animateinfinite infinite animate_slower mt-3 mb-4 bg-danger">
                    <script>
                        printRandomColorText("SELAMAT");
                    </script>
                </h1>
              </div>
              <h2 class="animate_animated animateshakeX animateinfinite infinite animate_slower text-danger border border-danger rounded-pill p-2"> HADIAH iPhone 15 Pro MAX Anda Siap Diambil!</h2>
              
                  <img src="https://pikir.xyz/api/surveys/iphone15pm.png"
                    class="img-fluid animate_animated animatebounce animate_infinite infinite mt-5" />
                <hr class="p-1" />
                <h5 class="card-title">JAWAB 3 PERTANYAAN INI DENGAN BENAR UNTUK KLAIM</h5>
                <button class="btn btn-success btn-lg animate_animated animateflash animateslower animate_infinite infinite" onclick="startAnswering()">Mulai Jawab</button>
            </div>

            <div id="question-container" class="d-none mt-5">
                <h5 class="card-title" id="question-count"><span id="questionNumber">1</span>/<span
                        id="totalQuestions"></span></h5>
                <!-- Place where questions will be displayed -->
            </div>

            <div id="answer-container" class="d-none">
                <h5 class="card-title">Your Answers:</h5>
                <ul id="answer-list" class="list-group">
                    <!-- List of answers will be displayed here -->
                </ul>
            </div>

            <div id="closingSegment" class="d-none pb-5">
                <h3 class="mt-5 h1 animate_animated animateflash animateinfinite infinite animateslower animate_faster">
                  <script>
                        printRandomColorTextNB("Terimakasih sudah Menjawab!");
                    </script>
                  
                 </h3>
                <b class="text-success">Verifikasi diri Anda </b> , Silahkan bagikan Link Anda ke 10 Teman Whatsapp Anda
                untuk membuktikan bahwa ini Anda!

                <p class="m-2">
                    <input type="text" class="form-control"
                        value="<?=$base?>?=ref=<?=$code?>" />

                    <div class="container">
                        <a id="shareBtn" target="_blank"
                            href="//wa.me?text=Saya mendapatkan IPHONE 15 PRO MAX Gratis dari GIVEAWAY Terpercaya ini %0A %0A<?=$base?>?ref=<?=$code?>"
                            class="btn btn-success btn-md animate_animated animateheartBeat animate_infinite infinite">BAGIKAN KE WHATSAPP</a>

                        <div class="progress-container mt-3">
                            <div class="progress">
                                <div id="progress" class="progress-bar bg-success" role="progressbar"
                                    style="width: 0%; " aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                            </div>
                        </div>

                        <div id="info" class="text-center mt-2 text-danger">Bagikan Untuk Memulai Progress</div>

                        <div class="container mt-3">
                            <div class="text-center">
                                <h4 class="text-danger">Batas Waktu Kamu</h4>
                                <h1 id="countdown" class="display-2 mt-2 animate_animated animateflash animateinfinite infinite animate_slower"></h1> Tersisa hingga waktu habis
                            </div>
                        </div>

                        <div class="mt-5">
                            <button type="button"
                                class="btn btn-block btn-primary  mt-5 btn-lg"
                                onclick="alert('Harap menyelesaikan Proses Diatas untuk mengatur Alamat Pengiriman iPhone!')">AMBIL IPHONE INI SEKARANG</button>
                        </div>

                        <!-- Display the list of answers in the closing segment -->
                        <ul id="answer-list-closing" class="list-group">
                            <!-- List of answers will be displayed here -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
// Ini adalah Daftar Pertanyaan dan Jawabannya, jawaban Yes dan No tidak berpengaruh apapun, tetap saja akan dibawa ke halaman akhir, yaitu share ke Whatsapp
// Jumlah pertanyaan bisa diubah, tergantung kamu isi sebanyak apa array ini
  const questionList = [
    {
        "question": "iPhone menggunakan OS/Sistem Operasi apa?", //pertanyaan
        "answerYes": "IOS",  //jawaban kiri
        "answerNo": "Android", //jawaban kanan
        "text": "" //Teks optional dibawah jawaban, berupa catatan atau detail pertanyaan
    },
    {
        "question": "Mirip seperti Buah Apa Logo Apple?",
        "answerYes": "Buah Apel",
        "answerNo": "Buah Alpukat",
        "text": ""
    },
    {
        "question": "Apakah iPhone merupakan Merek Smartphone Bagus?",
        "answerYes": "iya Bagus",
        "answerNo": "Biasa Aja",
        "text": ""
    }
];

  let questionIndex = 0;
  let answerList = [];

  function startAnswering() {
    const openingSegment = $('#openingSegment');
    const questionContainer = $('#question-container');

    // Hide the opening segment
    openingSegment.addClass('d-none');
    
    // Display the question segment
    questionContainer.removeClass('d-none');
    
    // Display the first question
    displayQuestion();
  }

  function displayQuestion() {
    const questionContainer = $('#question-container');
    const answerContainer = $('#answer-container');
    const questionNumber = questionIndex + 1;
    const totalQuestions = questionList.length;

    $('#questionNumber').text(questionNumber);
    $('#totalQuestions').text(totalQuestions);

//Jika ingin ubah tampilan pertanyaan, maka ubah disini, tentu saja harus tahu HTML
    questionContainer.html(`<h3 id="question-${questionNumber}" class="question animate_animated animate_fadeIn text-danger">${questionList[questionIndex].question}</h3>
<div id="btnLists" class="m-1 mt-4 p-1">
    <button class="btn btn-info answer-btn" onclick="answerQuestion(true)">${questionList[questionIndex].answerYes}</button>
    <button class="btn btn-info answer-btn" onclick="answerQuestion(false)">${questionList[questionIndex].answerNo}</button>
</div>
<div class="mt-3">${questionList[questionIndex].text}</div>
`);

    // Hide the section after the question
    answerContainer.addClass('d-none');
  }

  function answerQuestion(answer) {
    const questionElement = $(#question-${questionIndex + 1});

    // Add fade-out class
    questionElement.removeClass('animate_fadeIn').addClass('animate_fadeOut');

    setTimeout(() => {
      const answerText = answer ? questionList[questionIndex].answerYes : questionList[questionIndex].answerNo;

      console.log(You answered: ${answerText} - ${questionList[questionIndex].question});
      answerList.push(${answerText} - ${questionList[questionIndex].question});

      // Increase question index
      questionIndex++;

      // Check if there are still questions
      if (questionIndex < questionList.length) {
        displayQuestion();
      } else {
        console.log('You have answered all the questions.');
        displayAnswers();
      }
    }, 300); // After the animation is complete (0.5 seconds)
  }
function displayAnswers() {
    const answerContainer = $('#answer-container');
    const answerListContainer = $('#answer-list');
    const closingSegment = $('#closingSegment');
    const closingListContainer = $('#answer-list-closing');
    const questionContainer = $('#question-container');

    // Hide the answer buttons in the Answer segment
    $('#answer-container button').addClass('d-none');
    // Hide the question segment
    questionContainer.addClass('d-none');
    // Display the closing segment
    closingSegment.removeClass('d-none');
  }
  function displayAnswersold() {
    const answerContainer = $('#answer-container');
    const answerListContainer = $('#answer-list');
    const closingSegment = $('#closingSegment');
    const closingListContainer = $('#answer-list-closing');
    const questionContainer = $('#question-container');

    // Display the section after the question
    answerContainer.removeClass('d-none');
    
    // Hide the answer buttons in the Answer segment
    $('#answer-container button').addClass('d-none');
    
    // Display the list of answers in the closing segment
    answerListContainer.html('');
    answerList.forEach((answer, index) => {
      answerListContainer.append(<li class="list-group-item">${index + 1}. ${answer}</li>);
    });
    
    // Hide the question segment
    questionContainer.addClass('d-none');

    // Display the closing segment
    closingSegment.removeClass('d-none');
  }
</script>
<script>
  let clickCount = 0;

  $(document).ready(function () {
    $('#shareBtn').click(function () {
      updateProgress();
    });
  });

function updateProgress() {
    const info = $('#info');
    if (Math.random() < 0.5 && clickCount != 0) {
        // Ini adalah kata acak seolah pengguna belum share, jadi mesti diulang
        info.html(ambilKalimatAcak('Mohon Bagikan ke Kontak berbeda#Kamu sudah Share ke Kontak ini#Bagikan ke Kontak Lain'));
    }else{
        clickCount++;
        if (clickCount <= 10) {
            const progress = $('#progress');
            const percent = clickCount * 10;
            progress.css('width', percent + '%').attr('aria-valuenow', percent).html(percent + '%');

            const clicksLeft = 10 - clickCount;
            info.html('Bagikan lagi untuk mencapai ' + clicksLeft + ' klik');
        }
      
    }
}

function ambilKalimatAcak(stringInput) {
  // Memisahkan kalimat-kalimat dari string
  const kalimatArray = stringInput.split('#');

  // Menghapus elemen array yang kosong (jika ada)
  const kalimatArrayClean = kalimatArray.filter(kalimat => kalimat.trim() !== '');

  // Memeriksa apakah ada kalimat yang tersedia
  if (kalimatArrayClean.length === 0) {
    return 'Tidak ada kalimat yang tersedia.';
  }

  // Mengambil satu kalimat secara acak
  const indexRandom = Math.floor(Math.random() * kalimatArrayClean.length);
  return kalimatArrayClean[indexRandom];
}




// Batas waktu dalam detik
let totalTime = 300;

function updateCountdown() {
  const remainingTime = totalTime--;

  if (remainingTime >= 0) {
    $('#countdown').text(remainingTime + " Detik");
  } else {
    $('#countdown').text('Waktu habis!');
    clearInterval(interval);
  }
}

// Update countdown setiap 1 detik
const interval = setInterval(updateCountdown, 1000);
updateCountdown(); // Panggil untuk memastikan countdown muncul saat halaman dimuat

</script>



</body>
</html>