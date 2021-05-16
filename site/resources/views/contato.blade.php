@extends('layout.app')
@section('content')
        <section class="section-contact">
            <div class="container-contact">
                <div class="text-contact">
                    Entre em contato conosco
                </div>
                <form action="#">
                    <div class="form-row">
                        <div class="input-data">
                            <input type="text" required>
                            <div class="underline"></div>
                            <label for="">Nome</label>
                        </div>
                        <div class="input-data">
                            <input type="text" required>
                            <div class="underline"></div>
                            <label for="">Sobrenome</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data">
                            <input type="email" required>
                            <div class="underline"></div>
                            <label for="">Email</label>
                        </div>
                        <div class="input-data">
                            <input type="text" required>
                            <div class="underline"></div>
                            <label for="">whatzapp</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data textarea">
                            <textarea rows="8" cols="80" required></textarea>
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