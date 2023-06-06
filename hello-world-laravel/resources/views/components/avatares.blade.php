<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .textContainer {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .aniv {
            font-size: 20px;

        }

        .idade {
            font-size: 20px;
            font-weight: bold;

        }

        .nome {
            font-size: 30px;
            font-weight: bold;

        }
    </style>
</head>

<body>
    <div style="display: flex;">
        <div
            style="
                display: flex;
                flex-direction: column;
                width: 300px;
                background-color:rgba(52, 33, 148, 0.112);
                align-items: center;
                justify-content: center;
                border-radius: 20px;
                box-shadow: 10px 10px 8px #000;
                 ">
            <img style="
                        padding-top: 25px;
                        width: 250px;
                        height: 300px;
                        "
                src="{{ $img }}" alt="foto">
            <div class="textContainer">
                <p class="nome">{{ $nome }}</p>
                <p class="idade">{{ $idade }} Anos</p>
                <p class="aniv">Nasceu em {{ $aniversario }}</p>
            </div>
        </div>
    </div>
</body>

</html>
