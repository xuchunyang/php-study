<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Weather</title>
</head>

<body>
  <div class="container">
    <section class="section">
      <h1 class="hello title has-text-primary has-text-centered">Weather</h1>

      <form action="/" method="POST">
        <div class="field">
          <label for="location" class="label">Location</label>
          <div class="control">
            <input type="text" class="input" id="location" name="location" required>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <button class="button is-primary" type="submit">Submit</button>
          </div>
        </div>
      </form>
    </section>

    <?php
    require './vendor/autoload.php';

    use GuzzleHttp\Client;
    ?>
    <?php if (isset($_REQUEST["location"])) : ?>
      <section class="section">
        <div class="content">
          <h1>Weaather for <?= $_REQUEST["location"] ?></h1>
          <!-- https://api.openweathermap.org/data/2.5/weather?q=${this.query}&appid=4fe2dcce8476dc89da0b66ec96c9823d&lang=zh_cn&units=metric -->
          <pre>
          <?php
          // FIXME: 用 webpack copy plugin 试一试
          $client = new Client();
          $q = $_REQUEST["location"];
          $response = $client->get(
            "https://api.openweathermap.org/data/2.5/weather?q=$q&appid=4fe2dcce8476dc89da0b66ec96c9823d&lang=zh_cn&units=metric"
          );
          $body = $response->getBody();
          echo $body;
          // print_r($body);
          // print_r(json_decode($body));
          ?>
          </pre>
          <script>
            window.addEventListener("DOMContentLoaded", () => {
              const $pre = document.querySelector("pre");
              $pre.innerText = JSON.stringify(JSON.parse($pre.innerText), null, 4);
            })
          </script>
        </div>
      </section>
    <?php endif; ?>
  </div>
</body>

</html>