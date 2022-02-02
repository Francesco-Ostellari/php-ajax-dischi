<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spotify</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<body>
  <?php include_once __DIR__ . '/partials/header.php' ?>
  <!-- main -->
  <main id="app">
    <div class="container">
      <div class="row row-cols-5 p-5">
        <div class="col pb-3" v-for="card in cards">
          <div class="card_spotify">
            <div class="container-img">
              <img :src="card.poster" :alt="card.title">
            </div>
            <div class="title">
              {{card.title}}
            </div>
            <div class="author">
              {{card.author}}
            </div>
            <div class="date">
              {{card.year}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- footer -->
  <?php include_once __DIR__ . '/partials/footer.php' ?>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>