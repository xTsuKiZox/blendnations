<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlendNations</title>
    <link rel="stylesheet" href="./public/CSS/style.css">
    <link rel="shortcut icon" href="./public/IMG/logoW.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body id="bodyPage">
    <section id="title" class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mb-3 d-flex flex-column align-items-center">
                    <img src="./public/IMG/logoB.png" alt="" class="img-fluid" width="200" id="logo">
                </div>
            </div>
        </div>
    </section>

    <section id="fusion">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mt-5 mb-3">
                    <select id="firstCountry" class="form-select form-select-lg firstCountrySelect">
                        <option selected>First country</option>
                    </select>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mt-5 mb-3">
                    <select id="secondCountry" class="form-select form-select-lg secondCountrySelect">
                        <option selected>Second country</option>
                    </select>
                </div>
                <div class="col-md-2"></div>
            </div>
    </section>

    <section id="forCanvas">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-5 mb-5" id="canvasCountry" style="display: none;">
                    <canvas id="responsiveCanvas" width="900" height="500" style="border:1px solid #000000;"></canvas>
                </div>
                <div class="col-md-3"></div>

                <div class="col-md-3"></div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-2 mb-5" id="canvasText" style="display: none;">
                    <p class="fs-5 fw-medium text-center text-sm-center  text-md-start  text-xl-start text-xxl-start" id="textDownload"></p>
                </div>
                <div class="col-md-3"></div>
            </div>
    </section>

    <section id="usefullink">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-3 col-sm-3 col-md-2 col-lg-2 col-xl-2 col-xxl-2 mt-5 mb-5 iconPositionFooter">
                    <a href="https://github.com/xTsuKiZox/blendnations" target="_blank" class="iconFooter">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50">
                            <path d="M10 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-8l-2-2z" />
                        </svg>
                    </a>
                </div>
                <div class="col-3 col-sm-3 col-md-2 col-lg-2 col-xl-2 col-xxl-2 mt-5 mb-5 iconPositionFooter">
                    <a href="https://github.com/xTsuKiZox" target="_blank" class="iconFooter">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50">
                            <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.726-4.042-1.416-4.042-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.09-.745.083-.729.083-.729 1.205.085 1.84 1.24 1.84 1.24 1.07 1.834 2.809 1.304 3.495.998.108-.775.418-1.305.76-1.605-2.665-.305-5.467-1.333-5.467-5.931 0-1.31.468-2.381 1.235-3.221-.123-.303-.535-1.524.118-3.176 0 0 1.008-.322 3.301 1.23.96-.267 1.987-.4 3.008-.405 1.02.005 2.048.138 3.008.405 2.29-1.552 3.296-1.23 3.296-1.23.656 1.653.245 2.874.12 3.176.77.84 1.234 1.911 1.234 3.221 0 4.61-2.807 5.624-5.48 5.921.43.37.823 1.102.823 2.222 0 1.606-.015 2.902-.015 3.293 0 .322.218.694.825.576C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                        </svg>
                    </a>
                </div>
                <div class="col-3 col-sm-3 col-md-2 col-lg-2 col-xl-2 col-xxl-2 mt-5 mb-5 iconPositionFooter">
                    <a href="https://tsukizo.fr" target="_blank" class="iconFooter">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-2.95-.49-5.29-2.83-5.79-5.78H6v-2H5.21c.49-2.95 2.83-5.29 5.78-5.79V6h2v1.21c2.95.49 5.29 2.83 5.79 5.78H18v2h-1.21c-.49 2.95-2.83 5.29-5.78 5.79V18h-2v1.93z" />
                        </svg>
                    </a>
                </div>
                <div class="col-3 col-sm-3 col-md-2 col-lg-2 col-xl-2 col-xxl-2 mt-5 mb-5 iconPositionFooter" id="divForMode">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50" height="50" id="forMode" class="iconFooter">
                        <path fill="currentColor" d="M12 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm5.66 2.34a1 1 0 0 1 1.41 1.41 1 1 0 1 1-1.41-1.41zm6 5.66a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-2.34 6.66a1 1 0 1 1-1.41-1.41 1 1 0 0 1 1.41 1.41zM12 22a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM6.34 19.66a1 1 0 0 1-1.41-1.41 1 1 0 1 1 1.41 1.41zM2 12a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm2.34-6.66a1 1 0 0 1 1.41 1.41 1 1 0 1 1-1.41-1.41zM12 8a4 4 0 1 1 0 8 4 4 0 0 1 0-8zm0-1a5 5 0 1 0 0 10 5 5 0 0 0 0-10z" />
                    </svg>
                </div>
                <div class="col-md-2"></div>
            </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="./public/JS/index.js"></script>
    <script>
        /**
         * Displays the canvas as well as the text
         */
        function viewCountry() {
            document.getElementById("canvasCountry").style.display = "block"
            document.getElementById("canvasText").style.display = "block"
        }


        $(document).ready(function() {
            $('.firstCountrySelect').select2({
                theme: "classic",
                width: 'resolve'
            });
            $('.secondCountrySelect').select2({
                theme: "classic",
                width: 'resolve'
            });

            const canvas = document.getElementById('responsiveCanvas');
            const ctx = canvas.getContext('2d');
            let firstFlagCode = '';
            let secondFlagCode = '';

            function drawHalfFlags(countryCode1, countryCode2) {
                const flagImage1 = new Image();
                const flagImage2 = new Image();

                flagImage1.onload = function() {
                    flagImage2.onload = function() {
                        const flagWidth = canvas.width / 2;
                        const flagHeight = canvas.height;

                        ctx.clearRect(0, 0, canvas.width, canvas.height);
                        ctx.drawImage(flagImage1, 0, 0, flagImage1.width / 2, flagImage1.height, 0, 0, flagWidth, flagHeight);
                        ctx.drawImage(flagImage2, flagImage2.width / 2, 0, flagImage2.width / 2, flagImage2.height, flagWidth, 0, flagWidth, flagHeight);
                    };

                    flagImage2.onerror = function() {
                        console.error("Erreur de chargement du second drapeau :", countryCode2);
                    };

                    flagImage2.crossOrigin = "anonymous";
                    flagImage2.src = `https://flagcdn.com/w320/${countryCode2}.png`;
                };

                flagImage1.onerror = function() {
                    console.error("Erreur de chargement du premier drapeau :", countryCode1);
                };

                flagImage1.crossOrigin = "anonymous";
                flagImage1.src = `https://flagcdn.com/w320/${countryCode1}.png`;
            }

            function drawFullFlag(countryCode) {
                console.log(countryCode)
                const flagImage = new Image();
                flagImage.onload = function() {
                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                    ctx.drawImage(flagImage, 0, 0, canvas.width, canvas.height);
                };
                flagImage.onerror = function() {
                    console.error("Erreur de chargement du drapeau :", countryCode);
                };
                flagImage.crossOrigin = "anonymous";
                flagImage.src = `https://flagcdn.com/w320/${countryCode}.png`;
            }

            $('.firstCountrySelect').on('change', function() {
                firstFlagCode = $(this).val();
                viewCountry()
                if (secondFlagCode) {
                    drawHalfFlags(firstFlagCode, secondFlagCode);
                } else {
                    drawFullFlag(firstFlagCode);
                }
            });

            $('.secondCountrySelect').on('change', function() {
                secondFlagCode = $(this).val();
                viewCountry()
                if (firstFlagCode) {
                    drawHalfFlags(firstFlagCode, secondFlagCode);
                } else {
                    drawFullFlag(secondFlagCode);
                }
            });
        });
    </script>
</body>

</html>