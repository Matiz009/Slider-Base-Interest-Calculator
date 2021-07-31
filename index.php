<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>Slider Base Interest Calculator</title>
</head>

<body style="background-color: rgb(139, 135, 189);">
    <h1 style="text-align: center;"> Interest Calculator</h1>
    <hr>
    <div class="container">
        <label for="">Priciple</label>
        <input type="range" min="1" max="10000" value="500" class="pSlider">
        <h2 class="pValue"></h2>

        <label for="">Number of Years</label>
        <input type="range" min="1" max="10" value="5" class="nSlider">
        <h2 class="nValue"></h2>

        <label for="">Rate of Interest</label>
        <input type="range" min="1" max="100" value="1" class="iSlider">
        <h2 class="iValue"></h2>
        <label>
         Calculated Interest:
        </label>
        <h2 class="Ivalue">0</h2>
        <label for="">
            Total Amount to be Paid:
        </label>
        <h2 class="pivalue">0</h2>

    </div>
    <script src="/app.js"></script>
</body>

</html>