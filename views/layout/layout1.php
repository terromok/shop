<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".buy").on('click', function () {
                let id = $(this).attr('data-id');
                (async () => {
                    const response = await fetch('/api/buy/', {
                        method: 'POST',
                        headers: new Headers({
                            'Content-Type': 'application/json'
                        }),
                        body: JSON.stringify({
                            id: id
                        }),
                    });
                    const answer = await response.json();
                    $('#counter').html(answer.count);
                    console.log(answer);
                })();

            });


            $(".delete").on('click', function (e) {
                let id = e.target.id;
                (async () => {
                    const response = await fetch('/api/deleteFromBasket/', {
                        method: 'POST',
                        headers: new Headers({
                            'Content-Type': 'application/json'
                        }),
                        body: JSON.stringify({
                            id: id
                        }),
                    });
                    const answer = await response.json();
                    $('#item_' + answer.id).remove();
                    $('#counter').html(answer.count);
                    $('#summ').html(answer.summ);
                    console.log(answer);
                })();
            });
        });
    </script>
</head>
<body>
<div style="position:fixed;top:0px;background: white;">
    <?= $menu ?>
</div>
<div style="margin-top: 50px;">
    <?= $content ?>
</div>
</body>
</html>