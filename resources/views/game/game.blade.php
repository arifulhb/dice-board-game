@extends('welcome')

@section("content")

<div class="row">
    <div class="col-lg-6">
        <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="well-lg well">
                    <p class="text-info ">Player 1</p>
                    <span class="player1">{{ $player1->getName() }}</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="well-lg well">
                    <p class="text-info">Player 2</p>
                    <span class="player2">{{ $player2->getName() }}</span>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-sm-12">

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <button class="btn btn-lg btn-primary btn-block btn-roll-dice">Play</button>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">

            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="well-lg well">
                    <p class="text-info ">Player 3</p>
                    <span class="player3">{{ $player3->getName() }}</span>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="well-lg well">
                    <p class="text-info ">Player 4</p>
                    <span class="player4">{{ $player4->getName() }}</span>
                </div>
            </div>
        </div>
        <a href="/" class="btn btn-sm btn-default" type="button">Start New</a>
    </div>
    <div class="col-lg-6">
        <p class="text-center text-primary">Results</p>

        <div class="winners"></div>
        <h3 class="rounds"></h3>
        <div class="result">
        </div>

    </div>
    <input type="hidden" id="_token" value="{{ csrf_token() }}">
</div>

    <style>
        .winner-player{
            padding: 10px;
            font-size: 2em;
        }
        .result .round-title{
            font-size: 1.2em;color: navy;
            margin-bottom: 0px;;
        }
        .game-round{
            padding: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }
        .game-round p{
            margin-bottom: 2px;;
        }
        .game-round .player{
            color: #2b542c;
            font-size: 1.1em;;
        }

        .well .player1, .well .player2, .well .player3, .well .player4{
            font-size: 2em;;
        }
    </style>
@stop