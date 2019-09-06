
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

            $(".addOne").on('click', function (e) {
                let id = e.target.id;
                (async () => {
                    const response = await fetch('/api/addOneToBasket/', {
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
                    $('#summ').html(answer.summ);

                    var $pQuantyty = $('<p />', {
                      text: answer.basket.quantyty,
                    });
                    $('#quantyty_'+answer.id).empty();
                    $('#quantyty_'+answer.id).append($pQuantyty);

                    var $pSubtotal = $('<p />', {
                      text: answer.basket.summ_row,
                    });
                    $('#Subtotal_'+answer.id).empty();
                    $('#Subtotal_'+answer.id).append($pSubtotal);
                    console.log(answer);
                })();
            });

            $(".deleteOne").on('click', function (e) {
                let id = e.target.id;
                (async () => {
                    const response = await fetch('/api/deleteOneFromBasket/', {
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
                    $('#summ').html(answer.summ);
                    if (answer.basket.quantyty > 0) {
                        var $pQuantyty = $('<p />', {
                          text: answer.basket.quantyty,
                        });
                        $('#quantyty_'+answer.id).empty();
                        $('#quantyty_'+answer.id).append($pQuantyty);

                        var $pSubtotal = $('<p />', {
                            text: answer.basket.summ_row,
                        });
                        $('#Subtotal_'+answer.id).empty();
                        $('#Subtotal_'+answer.id).append($pSubtotal);
                    } else{
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
                        })();
                    };
                    
                    console.log(answer);
                })();
            });

            $(".itemedit").on('click', function (e) {
                let id = e.target.id;
                (async () => {
                    const response = await fetch('/api/itemEdit/', {
                        method: 'POST',
                        headers: new Headers({
                            'Content-Type': 'application/json'
                        }),
                        body: JSON.stringify({
                            id: id
                        }),
                    });
                    const answer = await response.json();
                    //$('#counter').html(answer.count);
                    //$('#summ').html(answer.summ);
                    //basket = answer.basket;           как-то надо асинхронно передать...
                    console.log(answer);
                })();
            })
        });