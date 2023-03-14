<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>ASIA IS DA BEST</title>
    <style>
        body {
            --s: 25vmin;
            --p: calc(var(--s) / 2);
            --c1: pink;
            --c2: dodgerblue;
            --c3: white;
            --bg: var(--c3);
            --d: 4000ms;
            --e: cubic-bezier(0.76, 0, 0.24, 1);

            background-color: var(--bg);
            background-image:
                linear-gradient(45deg, var(--c1) 25%, transparent 25%),
                linear-gradient(-45deg, var(--c1) 25%, transparent 25%),
                linear-gradient(45deg, transparent 75%, var(--c2) 75%),
                linear-gradient(-45deg, transparent 75%, var(--c2) 75%);
            background-size: var(--s) var(--s);
            background-position:
                calc(var(--p) * 1) calc(var(--p) * 0),
                calc(var(--p) * -1) calc(var(--p) * 1),
                calc(var(--p) * 1) calc(var(--p) * -1),
                calc(var(--p) * -1) calc(var(--p) * 0);
            animation:
                color var(--d) var(--e) infinite,
                position var(--d) var(--e) infinite;
        }

        @keyframes color {

            0%,
            25% {
                --bg: var(--c3);
            }

            26%,
            50% {
                --bg: var(--c1);
            }

            51%,
            75% {
                --bg: var(--c3);
            }

            76%,
            100% {
                --bg: var(--c2);
            }
        }

        @keyframes position {
            0% {
                background-position:
                    calc(var(--p) * 1) calc(var(--p) * 0),
                    calc(var(--p) * -1) calc(var(--p) * 1),
                    calc(var(--p) * 1) calc(var(--p) * -1),
                    calc(var(--p) * -1) calc(var(--p) * 0);
            }

            25% {
                background-position:
                    calc(var(--p) * 1) calc(var(--p) * 4),
                    calc(var(--p) * -1) calc(var(--p) * 5),
                    calc(var(--p) * 1) calc(var(--p) * 3),
                    calc(var(--p) * -1) calc(var(--p) * 4);
            }

            50% {
                background-position:
                    calc(var(--p) * 3) calc(var(--p) * 8),
                    calc(var(--p) * -3) calc(var(--p) * 9),
                    calc(var(--p) * 2) calc(var(--p) * 7),
                    calc(var(--p) * -2) calc(var(--p) * 8);
            }

            75% {
                background-position:
                    calc(var(--p) * 3) calc(var(--p) * 12),
                    calc(var(--p) * -3) calc(var(--p) * 13),
                    calc(var(--p) * 2) calc(var(--p) * 11),
                    calc(var(--p) * -2) calc(var(--p) * 12);
            }

            100% {
                background-position:
                    calc(var(--p) * 5) calc(var(--p) * 16),
                    calc(var(--p) * -5) calc(var(--p) * 17),
                    calc(var(--p) * 5) calc(var(--p) * 15),
                    calc(var(--p) * -5) calc(var(--p) * 16);
            }
        }

        @media (prefers-reduced-motion) {
            body {
                animation: none;
            }
        }

        .card.text-center {
            width: 60%;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            top: 77px;
            --bs-card-border-color: none;
            text-align: start !important;
            margin-bottom: 4rem;
        }
    </style>
</head>

<body>
    <?php
    $Asia = array(
        "Kazakhstan", "Kyrgyzstan", "Tajikistan", "Turkmenistan",
        "Uzbekistan", "China", "China, Hong Kong Special Administrative", "Region", "China, Macao Special Administrative",
        "Region", "North Korea", "Japan", "Mongolia", "South Korea", "Afghanistan", "Bangladesh",
        "Bhutan", "India", "Iran (Islamic Republic of)", "Maldives", "Nepal", "Pakistan", "Sri Lank", "Brunei Darussalam",
        "Cambodia", "Indonesia", "Lao People's Democratic Republic", "Malaysia",
        "Myanmar", "Philippines", "Singapore", "Thailand", "Timor-Leste", "Viet Nam", "Armenia",
        "Azerbaijan", "Bahrain", "Cyprus", "Georgia", "Iraq", "Israel", "Jordan", "Kuwait", "Lebanon", "Oman", "Qatar", "Saudi Arabia",
        "State of Palestine", "Syrian Arab Republic", "Turkey", "United Arab Emirates", "Yemen"
    );

    $filename = array("hw-doc01.txt", "hw-doc02.txt", "hw-doc03.txt");

    for ($x = 0; $x <= 2; $x++) {
        $word = '';
        $file =  $filename[$x];
        if (file_exists($file)) {
            $word = file_get_contents($file);
        } else {
            echo "no file data";
        }

        $text = [];
        foreach ($Asia as $check) {
            if (stripos($word, $check) != null) {
                $text[] = $check;
            }
        }
        array_unique($text);
        sort($text);
        $Countries = implode('<br>', $text);
        echo '<div class="card text-center">
                  <div class="card-header text-bg-info">
                  <h5 class="card-title">Asia Countries</h5> 
                  </div>
               <div class="card-body">
                     <h5 class="card-title">filename : ' . $filename[$x] . '</h5>
              <p class="card-text">' . $Countries . '</p>
             </div>
            </div> ';
    }
    ?>
</body>
</html>