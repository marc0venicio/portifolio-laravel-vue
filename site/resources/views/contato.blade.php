@extends('layout.app')
@section('content')
    <section class="section-contact">
        <div class="container-contact">
            <div class="text-contact">
                Entre em contato conosco
            </div>
            @if (isset($errors) && count($errors) > 0)
                <div class="">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div class="">
                    <h3>OOOOPPSSS...{{ $message }}</h3>
                </div>
            @endif
            @if ($message = Session::get('success'))
            <div class="">
                <h3>Obrigado! {{ $message }}</h3>
            </div>
            @endif
            <form action="/contato" method="POST">
                @csrf
                <div class="form-row">
                    <div class="input-data">
                        <input type="text" id="name" name="name" required>
                        <div class="underline"></div>
                        <label for="">Nome</label>
                    </div>
                    <div class="input-data">
                        <input type="text" id="last_name" name="last_name" required>
                        <div class="underline"></div>
                        <label for="">Sobrenome</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-data">
                        <input type="email" id="email" name="email" required>
                        <div class="underline"></div>
                        <label for="">Email</label>
                    </div>
                    <div class="input-data">
                        <input type="text" id="telephone" name="telephone" required>
                        <div class="underline"></div>
                        <label for="">whatzapp</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-data textarea">
                        <textarea rows="8" cols="80" id="message" name="message" required></textarea>
                        <br />
                        <div class="underline"></div>
                        <label for="">Deixe sua mensagem</label>
                        <br />
                        <div class="submit-btn">
                            <div class="input-data">
                                <div class="inner"></div>
                                <input type="submit" value="Enviar">
                            </div>
                        </div>
            </form>
        </div>
    </section>
    </section>
@endsection
