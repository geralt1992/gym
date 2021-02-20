@extends('master.master')
@section('content')

<div id="fullPage">

    <!--SECTION 1 -->

    <div class="section s1">
     <div class="container">
         <h1 class="neon" data-text="BLACK GYM">BLACK GYM</h1>
     </div>
    </div>


    <!--SECTION 2 -->

    <div class="section s2">
        <div class="service-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>NAŠE USLUGE</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="single-service">
                            <i class="fas fa-dumbbell"></i>
                            <h3>Mjesečni treninzi</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Eum eveniet veritatis officia, suscipit tempora sint.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="single-service">
                            <i class="fas fa-heartbeat"></i>
                            <h3>Organizirani HIT treninzi</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Eum eveniet veritatis officia, suscipit tempora sint.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="single-service">
                            <i class="fas fa-weight"></i>
                            <h3>Grupni treninzi</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Eum eveniet veritatis officia, suscipit tempora sint.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="single-service">
                            <i class="fas fa-running"></i>
                            <h3>Kardio programi</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Eum eveniet veritatis officia, suscipit tempora sint.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="single-service">
                            <i class="fas fa-fish"></i>
                            <h3>Programi prehane</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Eum eveniet veritatis officia, suscipit tempora sint.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="single-service">
                            <i class="fas fa-user-friends"></i>
                            <h3>Individualni treninzi</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Eum eveniet veritatis officia, suscipit tempora sint.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--SECTION 3 -->


<div class="section  s3">
    <div class="service-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>KONTAKTIRAJTE NAS</h2>
                    </div>

                    <form action="{{route('store')}}" method="POST">
                        @csrf
                        <label for="name">Unesite Vaše ime</label> <br>
                        <input type="text" id="name" name="name" placeholder="Unesite Vaše ime" required>
                        <br>
                        <label for="email">Unesite Vašu e-mail adresu</label> <br>
                        <input type="mail" id="email" name="email" placeholder="Vaš e-mail" required>
                        <br>
                        <label for="subject">Unesite Vaš upit</label>
                        <br>
                        <textarea name="subject" id="subject" cols="80" rows="5"  required ></textarea> <br>
                        <input type="submit" value="Submit">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


    <!--SECTION 4 -->


    <div class="section s4">
        <div class="service-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>GDJE NAS PRONAĆI</h2>
                            <div class="sociale">
                                <ul>
                                    <li><i class="fab fa-facebook-f"></i></li>
                                    <li><i class="fab fa-twitter"></i></li>
                                    <li><i class="fab fa-instagram"></i></li>
                                    <li><i class="fab fa-linkedin-in"></i></li>
                                    <li><i class="fab fa-youtube"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
