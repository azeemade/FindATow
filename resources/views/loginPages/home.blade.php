@extends('base.dashboard')



@section('title')
    {{ $users->username}}
@stop

@section('section-a')
<div class="container dashboard-content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Order Tow</h1>
                    <p>Fill the form below to order a tow</p>
                </div>

                <div class="card-body">
                    <form method="head" action="{{ url('towOrder/successful') }}">
                        @csrf
                        <a class="accordion">My Info</a>
                        <div class="panel">
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{ $users->id }}" class="form-control">    
                            </div>
                            <div class="form-group">
                                <input type="text" name="username" value="{{ $users->username}}" class="form-control">    
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" value="{{ $users->email}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="tel" name="phnum" value="{{ $users->phnum}}" class="form-control">    
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="carModel" placeholder="Car Model" class="form-control @error('carModel') is-invalid @enderror" required>
                            @error('CarModel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="licensePlateNumber" placeholder="License Plate Number" class="form-control @error('licensePlateNumber') is-invalid @enderror" required>
                            @error('licensePlateNumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="towFrom">Tow From Location</label>
                            <select class="form-control" id="breakdownarea" name="towFrom" required>
                              <option>Tow From</option>
                              <option>Agege (Ogba, Ashade, Dopemu, Orile, Oko-Oba, Oke-Koto, Ajegunle, Sango, Moricas, Agbotikuyo)</option>
                              <option>Ajeromi-Ifelodun</option>
                              <option>Alimosho(Ayobo, Ipaja, Egbe, Idimu, Ikotun, Igando, Egbeda, Akowonjo, Iyana- Ipaja)</option>
                              <option>Amuwo-Odofin (Mile 2, Festac, Ijegun, Kirikiri, Costain, Ifelodun, Irepodun, Odofin, Eko-Akete)</option>
                              <option>Apapa</option>
                              <option>Badagry (Badagry, Agbara, Mowo, Oko-Afo, Magbon, Ira)</option>
                              <option>Epe</option>
                              <option>Eti-Osa (Ikoyi, Lekki, VI, Maroko, Obalende)</option>
                              <option>Ibeju-Lekki (Ibeju, Lekki, Akodo, Ajah)</option>
                              <option>Ifako-Ijaye (Ifako, Oke-Ira, Obawole, Iju-Ishaga, Fagba, Agege Pen Cinema)</option>
                              <option>Ikeja (Oregun, Ojodu, Opebi, Alausa, Agidingbi, Ogba, Maryland, Magodo, Onigbongbo GRA)</option>
                              <option>Ikorodu (Imota, Ikorodu, Ijede, Bayeku, Ikorodu West, Ikorodu North)</option>
                              <option>Kosofe (Mile 12, Ojota, Gbagada, Oworonshoki)</option>
                              <option>Lagos Island (CMS, Marina, Idumota)</option>
                              <option>Lagos Mainland (Yaba, Ebute-Meta)</option>
                              <option>Mushin</option>
                              <option>Ojo (Alaba, Trade Fair, Iyana-Iba, Otto-Awori, Igboelerin, Iba, Okoko)</option>
                              <option>Oshodi-Isolo (Oshodi, Sogunle, Isolo, Ajao Estate, Ilasamaja, Okota, Ijeshatedo, Ejigbo)</option>
                              <option>Somolu (Bariga)</option>
                              <option>Surulere (Ojuelegba, Aguda, Iganmu, Coker, Adeniran Ogunsanya, Ogunlana, Idi-Araba)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control @error('towFromAddress') is-invalid @enderror" rows="2" name="towFromAddress" placeholder="Tow From Address" required></textarea>
                            @error('towFromAddress')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="towTo">Tow To Location</label>
                            <select class="form-control" id="destinationarea" name="towTo" required>
                              <option>Tow To</option>
                              <option>Agege (Ogba, Ashade, Dopemu, Orile, Oko-Oba, Oke-Koto, Ajegunle, Sango, Moricas, Agbotikuyo)</option>
                              <option>Ajeromi-Ifelodun</option>
                              <option>Alimosho(Ayobo, Ipaja, Egbe, Idimu, Ikotun, Igando, Egbeda, Akowonjo, Iyana- Ipaja)</option>
                              <option>Amuwo-Odofin (Mile 2, Festac, Ijegun, Kirikiri, Costain, Ifelodun, Irepodun, Odofin, Eko-Akete)</option>
                              <option>Apapa</option>
                              <option>Badagry (Badagry, Agbara, Mowo, Oko-Afo, Magbon, Ira)</option>
                              <option>Epe</option>
                              <option>Eti-Osa (Ikoyi, Lekki, VI, Maroko, Obalende)</option>
                              <option>Ibeju-Lekki (Ibeju, Lekki, Akodo, Ajah)</option>
                              <option>Ifako-Ijaye (Ifako, Oke-Ira, Obawole, Iju-Ishaga, Fagba, Agege Pen Cinema)</option>
                              <option>Ikeja (Oregun, Ojodu, Opebi, Alausa, Agidingbi, Ogba, Maryland, Magodo, Onigbongbo GRA)</option>
                              <option>Ikorodu (Imota, Ikorodu, Ijede, Bayeku, Ikorodu West, Ikorodu North)</option>
                              <option>Kosofe (Mile 12, Ojota, Gbagada, Oworonshoki)</option>
                              <option>Lagos Island (CMS, Marina, Idumota)</option>
                              <option>Lagos Mainland (Yaba, Ebute-Meta)</option>
                              <option>Mushin</option>
                              <option>Ojo (Alaba, Trade Fair, Iyana-Iba, Otto-Awori, Igboelerin, Iba, Okoko)</option>
                              <option>Oshodi-Isolo (Oshodi, Sogunle, Isolo, Ajao Estate, Ilasamaja, Okota, Ijeshatedo, Ejigbo)</option>
                              <option>Somolu (Bariga)</option>
                              <option>Surulere (Ojuelegba, Aguda, Iganmu, Coker, Adeniran Ogunsanya, Ogunlana, Idi-Araba)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control  @error('towToAddress') is-invalid @enderror" rows="2" name="towToAddress" placeholder="Tow To Address"></textarea>
                            @error('towToAddress')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-large">Order Tow</button>
                        </div>
                    </form>
                </div><br><br>
            </div>
        </div>
    </div>
</div>
@endsection
