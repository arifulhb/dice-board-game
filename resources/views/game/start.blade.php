@extends('welcome')

@section("content")

    <div class="row">
        <div class="col-lg-12 ">
            <p class="text-center text-primary">Enter Player Name</p>
        </div>
        <div class="col-lg-12 ">
            <form method="post" action="/game/run">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="row">

                    <div class="form-group-lg col-lg-12 form-group">
                        <label class="col-lg-4 control-label">Player 1</label>
                        <div class="col-lg-8">
                        <input class="form-control " name="player1" placeholder="Player 1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group-lg col-lg-12 form-group">
                        <label class="control-label col-lg-4">Player 2</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="player2" placeholder="Player 2">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group-lg col-lg-12 form-group">
                        <label class="control-label col-lg-4">Player 3</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="player3" placeholder="Player 3">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group-lg col-lg-12 form-group">
                        <label class="control-label col-lg-4">Player 4</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="player4" placeholder="Player 4">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group-lg col-lg-12 form-group">

                        <div class="col-lg-8 col-lg-offset-4">
                            <button type="submit" class="btn-lg btn btn-primary btn-block">Start</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop