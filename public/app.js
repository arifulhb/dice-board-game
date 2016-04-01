/**
 * Created by ariful on 4/1/16.
 */
$(document).ready(function(){

    $('.btn-roll-dice').click(function(){

        $('.winners').html('');
        $('.rounds').html('');
        $('.result').html('Please wait...');


        var data={

            player1 : $('.player1').html(),
            player2 : $('.player2').html(),
            player3 : $('.player3').html(),
            player4 : $('.player4').html(),
            _token  :($('#_token').val())
        };


        $.ajax({
            url: "/game/roll-dice-complete",
            method:'POST',
            data:data
        }).done(function(res, txtStatus){


            if(txtStatus =='success'){

                $('.rounds').html("Total "+res.rounds+ " rounds played");
                $('.result').html(res.result);

                var winners = "<p>Winners are...</p>";
                $.each(res.winners, function(k, v){
                    winners += "<p class='winner-player bg-success text-info'>"+v+"</p>";
                });

                $('.winners').html(winners);

                $('.btn-roll-dice').html('Play again');
            }

        }).always(function(){

            console.log('always');
        }).fail(function(){

        });
    });
});