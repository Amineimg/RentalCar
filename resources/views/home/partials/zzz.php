        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 pricing-table basic">
                    <h5>{{ $static_data['strings']['basic'] }}</h5>
                    <div class="pricing-specs">
                        <span class="p-days">Nombre de jours : <strong>5 jours</strong></span>
                        <ul>
                            <li class="li-success"><i class="fa fa-fw fa-check"></i>Kilométrage illimité</li>
                            <li class="li-success"><i class="fa fa-fw fa-check"></i>Service aéroport 24/7</li>
                            <li class="li-danger"><i class="fa fa-fw fa-times"></i>Assistance 24/7</li>
                            <li class="li-danger"><i class="fa fa-fw fa-times"></i>Assurance basique</li>
                            <li class="li-danger"><i class="fa fa-fw fa-times"></i>Couverture partielle incendie</li>
                            <li class="li-danger"><i class="fa fa-fw fa-times"></i>Couverture partielle dommages</li>
                            <li class="li-danger"><i class="fa fa-fw fa-times"></i>Couverture partielle vol</li>
                            <li class="li-danger"><i class="fa fa-fw fa-times"></i>Dépôt garantie obligatoire</li>
                        </ul>
                        <span><i class="fa fa-fw fa-exclamation-circle"></i>Franchise / Caution <strong>300 €</strong></span>
                        <div>
                            <button type="submit" class="btn btn-warning">{{$static_data['strings']['book_now']}}</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pricing-table premium">
                    <h5>{{ $static_data['strings']['premium'] }}</h5>
                    <div class="pricing-specs">
                        <span class="p-days">Nombre de jours : <strong>5 jours</strong></span>
                        <ul>
                            <li class="li-success"><i class="fa fa-fw fa-check"></i>Kilométrage illimité</li>
                            <li class="li-success"><i class="fa fa-fw fa-check"></i>Service aéroport 24/7</li>
                            <li class="li-success"><i class="fa fa-fw fa-check"></i>Assistance 24/7</li>
                            <li class="li-success"><i class="fa fa-fw fa-check"></i>Assurance basique</li>
                            <li class="li-success"><i class="fa fa-fw fa-check"></i>Couverture partielle incendie</li>
                            <li class="li-success"><i class="fa fa-fw fa-check"></i>Couverture partielle dommages</li>
                            <li class="li-success"><i class="fa fa-fw fa-check"></i>Couverture partielle vol</li>
                            <li class="li-success"><i class="fa fa-fw fa-check"></i>Dépôt garantie obligatoire</li>
                        </ul>
                        <span><i class="fa fa-fw fa-exclamation-circle"></i>Franchise / Caution <strong>500 €</strong></span>
                        <div>
                            <button type="submit" class="btn btn-primary" name="premium_booking" value="{{$car->id}}">{{$static_data['strings']['book_now']}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>