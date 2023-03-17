@extends('layouts.app')

@section('content')
    <index-component></index-component>     
    <slider-component></slider-component>   
    <div class="footer"> 
        <div class="footer-content">
            <div class="footer-form" id="form">
                <form class="form-content" id="message" action="/new-contract" method="POST">
                    @csrf
                    <h1 class="form-text">SOLICITĂ O OFERTĂ</h1>
                    <input type="text" class="form-input @error('nume') invalid @enderror" name="nume" placeholder="Nume:"/>
                    @error('nume')
                        <h3 class="text-danger">{{$message}}</h3>
                    @enderror
                    <input type="tel" pattern="[0]{1}[0-9]{8}" class="form-input @error('telefon') invalid @enderror" name="telefon" id="telefon" placeholder="Telefon: 061234567"/>
                    @error('telefon')
                        <h3 class="text-danger">{{$message}}</h3>
                    @enderror
                    <input type="text" class="form-input @error('adresa') invalid @enderror" name="adresa" placeholder="Adresa de montare:"/>
                    @error('adresa')
                        <h3 class="text-danger">{{$message}}</h3>
                    @enderror
                    <textarea class="form-textarea" cols="30" rows="10" name="mesaj" placeholder="Mesaj:"></textarea>
                    <button class="btn form-btn" id="form-btn" type="submit" >Trimite Solicitarea</button>
                </form>
            </div>
            <div class="footer-links">
                <div class="link">
                    <span class="icon-phone-square icon"></span>
                    <h2 class="link-title">Telefon</h2>
                    <h2 class="link-description">+373 67626697</h2>
                </div>
                <div class="link">
                    <span class="icon-mail-bulk icon"></span>
                    <h2 class="link-title">Email</h2>
                    <h2 class="link-description">instalaremobilamd@mail.ru</h2>
                </div>
                <div class="link">
                    <span class="icon-location-arrow icon"></span>
                    <h2 class="link-title">Locație</h2>
                    <h2 class="link-description">Orașul Chișinău</h2>
                </div>
            </div>
        </div>
    </div>
    <comments-component></comments-component>
@endsection