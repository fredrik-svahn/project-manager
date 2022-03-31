@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="">
            <br id="om-mig">
            <br>
            <div class="card border-0">
                <div class="card-body dark">
                    <div class="row">

                        <div class="col-md-9">
                            <h1>Om mig</h1>
                            <p>
                                <?php
                                $d1 = new DateTime('1997-10-20');
                                $d2 = today();

                                $diff = $d2->diff($d1);
                                $years = $diff->y;
                                ?>
                                Jag är en {{$years}}-årig full-stack webbutvecklare från Stockholm med fokus på back-end utveckling.
                                Jag är bra på att lösa svåra problem och jag älskar att felsöka.
                                Jag har en kandidatexamen i datateknik från KTH och förutom programmering är jag intresserad av matematik, datorspel och träning.
                            </p>

                            <p>
                                Under min utbildning har jag arbetat på Orgo Tech (numera Hubso Group) som webbutvecklare.
                                Jag har även arbetat som lärarassistent (amanuens) på KTH inom kursen Algebra och Geometri.
                            </p>

                            <img style="width: 100px" src="{{ asset("img/kth.png") }}" alt="">
                            <h2>Programmeringsspråk jag kan bäst</h2>

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="card border-0 light">
                                        <div class="card-body">
                                            <a href="https://www.php.net/" target="_blank">
                                                <img style="width: 100%; height: 70px" src="{{asset("img/php.svg")}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card border-0 light">
                                        <div class="card-body">
                                            <a href="https://www.java.com/sv/"  target="_blank">
                                                <img  style="width: 100%; height: 70px" src="{{asset("img/java.svg")}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card border-0 light">
                                        <div class="card-body">
                                            <a href="https://sv.wikipedia.org/wiki/Javascript" target="_blank">
                                                <img style="width: 100%;; height: 70px" src="{{asset("img/js.svg")}}" alt="">
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-2">
                                    <div class="card border-0 light">
                                        <div class="card-body">
                                            <span class="glyphicon glyphicon-new-window"></span>
                                            <a href="https://sv.wikipedia.org/wiki/C%2B%2B" target="_blank">
                                                <img style="width: 100%;; height: 70px" src="{{asset("img/cpp.svg")}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>Den här sidan är byggd i PHP med Laravel som ramverk </p>
                            <a href="https://laravel.com/">
                                <img src="{{asset("img/Laravel.svg")}}" style="width: 100px" alt="">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <img width="100%" src="{{ asset("img/fredrik.jpg")  }}" alt="En bild på mig">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-body light">
                    <div class="row">
                        <div class="col-md-3">
                            <img width="100%" src="{{ asset("img/fredrik.jpg")  }}" alt="En bild på mig">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
