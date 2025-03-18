@extends('layouts.home_layout', ['static_data', $static_data])

@section('title')
    <title>{{ $static_data ? $static_data['strings']['faq_title'] : '' }}</title>
    <meta name="title" content="{{ $static_data ? $static_data['strings']['faq_title'] : '' }}">
    <meta name="description" content="{{ $static_data ? $static_data['strings']['faq_desc'] : '' }}">
    <meta name="author" content="{{ $static_data['strings']['faq_title'] }}">
    <meta car="og:title" content="{{ $static_data['strings']['faq_title'] }}" />
    <meta car="og:image"
        content="{{ asset('/assets/images/home/') . '/' . $static_data['design_settings']['slider_background'] }}" />
@endsection

@section('bg')
    {{ asset('/assets/images/home/') . '/' . $static_data['design_settings']['slider_background'] }}
@endsection

@section('content')
    <div class="container">

        <h1 class="h1 car_details_header">
            @if (Session::get('language') == 'pl')
                Często zadawane pytania
            @elseif (Session::get('language') == 'pt')
                Perguntas Frequentes
            @else
                FAQ
            @endif
        </h1><br><br><br>

        @if (Session::get('language') == 'en') 
            <div class="row" class="text-align:justify;">

                <div class="col-md-6">
                    <h5><b>What Are Included In The Prices Displayed On This Site? </b></h5>
                    <p>
                        -Full insurance<br>
                        -Unlimited mileage.<br>
                        -Support 24/7.<br>
                        -Free delivery and return at Marrakech airport as well as at your hotel or place of residence in
                        Marrakech as well.<br>
                        -No hidden extras to pay.<br>
                    </p>

                    <h5><b>Is Car Delivery Free?</b></h5>
                    <p>
                        -Yes, you can be delivered for free to the airport or to the hotel or even to your home at no extra
                        charge, this service is free only in Marrakech, for other cities there is a supplement which varies
                        depending on the city

                    </p>

                    <h5><b>What Documents Do I Present To Get My Vehicle?</b></h5>
                    <p>

                        -To get your vehicle you will need to present the driver's license of the driver (s) of the vehicle,
                        a copy of passport in the name of the main driver.

                    </p>

                    <h5><b>The Insurance Offered Are They The All Risks Insurance?</b></h5>
                    <p>

                        -Yes, but there is a deductible if you are responsible in case of accident.
                    </p>


                    <h5><b>Can I book the same day of the rental? </b></h5>
                    <p>

                        -Yes, you can do it until 04h working before departure. provided, Jacarandacar will only be able to
                        offer you the categories of similar cars that are still available. ..
                    </p>
                    
                    <h5><b>What are the steps to follow to be able to reserve a car with Jacarandacar? </b></h5>
                    <p>

                        -Simply fill out the reservation form on our website and send it to us, you will have confirmation of availability in less than an hour. 
                        Once this confirmation has been received, you will only have to confirm your reservation to us and your car will be blocked for the desired dates.
                    </p>
                </div>

                <div class="col-md-6">
                    <h5><b>What Kind Of Insurance Are Included In The Prices Displayed?</b></h5>
                    <p>

                        -All-risk insurance with deductible.
                        -Insurance for the driver and passengers carried
                    </p>

                    <h5><b>Pay Less With <b> Jacarandacar </b>, Is It To The Detriment Of The Quality Of The Rented
                            Vehicles?</b></h5>
                    <p>
                        -No, our cars are in excellent condition and undergo regular technical checks.
                    </p>

                    <h5><b>Is There A Possibility To Extend The Duration Of My Rental Contract?</b></h5>
                    <p>
                        -Of course, you just need to contact us by email or phone to get our agreement..
                    </p>

                    <h5><b>Is It Possible To Cancel My Booking?</b></h5>
                    <p>

                        -Of course, it is possible to cancel the reservation up to the last minute before picking up the car
                        without cancellation fees.
                    </p>

                    <h5><b>What should I do if I do not receive confirmation of my reservation?</b> </h5>
                    <p>

                        -You must contact your Jacaranda Car agency by email, giving them the number of your reservation and
                        your email address; or better contact by phone.

                    </p>


                </div>





            </div>
        @elseif(Session::get('language') == 'es')
            <div class="row" class="text-align:justify;">
                <div class="col-md-6">

                    <h5><b>Qué incluyen los precios que se muestran en este sitio? </b></h5>
                    <p>
                        -Seguro a todo riesgo<br>
                        -Kilometraje ilimitado. <br>
                        -Soporte 24/7.<br>
                        -Entrega y devolución gratuita en el aeropuerto de Marrakech, así como en su hotel o lugar de
                        residencia en Marrakech también.<br>
                        -Sin extras ocultos que pagar.<br>
                    </p>

                    <h5><b>La entrega del coche es gratuita?</b></h5>
                    <p>
                        -Sí, se puede entregar gratis en el aeropuerto o en el hotel o incluso en casa sin suplemento, este
                        servicio es gratuito solo en Marrakech, para las otras ciudades es necesario contar con un
                        suplemento que varía según las ciudades.

                    </p>

                    <h5><b>Qué documentos necesito presentar para recoger mi vehículo?</b></h5>
                    <p>

                        -Para recoger su vehículo deberá presentar la licencia de conducir del o los conductores del
                        vehículo, una copia del pasaporte a nombre del conductor principal.

                    </p>

                    <h5><b>Los Seguros que se Ofrecen son Seguros a Todo Riesgo?</b></h5>
                    <p>

                        -Sí, pero hay un deducible a pagar si eres responsable en caso de accidente.

                    </p>

                    <h5><b>Qué tipo de seguro está incluido en los precios mostrados?</b></h5>
                    <p>

                        -Seguro todo riesgo con franquicia
                        -Seguro para el conductor y las personas transportadas
                    </p>

                    <h5><b>Está pagando menos con <b>Jacarandacar</b> en detrimento de la calidad de los vehículos de
                            alquiler?</b></h5>
                    <p>
                        -No, nuestros coches están en excelentes condiciones y se someten periódicamente a revisiones
                        técnicas.
                    </p>



                </div>
                <div class="col-md-6">
                    <h5><b>Existe la posibilidad de ampliar la duración de mi contrato de alquiler actual?</b></h5>
                    <p>
                        -Por supuesto, todo lo que tiene que hacer es ponerse en contacto con nosotros por correo
                        electrónico o por teléfono para tomar nuestro acuerdo.
                    </p>

                    <h5><b>Cuáles son los pasos a seguir para poder reservar un coche en Jacarandacar?</b></h5>
                    <p>

                        -Solo tienes que rellenar el formulario de reserva de nuestra web y enviárnoslo, tendrás
                        confirmación de disponibilidad en menos de una hora. Una vez recibida esta confirmación, todo lo que
                        tienes que hacer es confirmar tu reserva por tu parte y tu coche quedará bloqueado para las fechas
                        deseadas.


                    </p>

                    <h5><b>Es posible cancelar mi reserva?</b></h5>
                    <p>

                        -Por supuesto, es posible cancelar la reserva hasta el último minuto antes de la recogida del coche
                        sin gastos de cancelación.

                    </p>

                    <h5><b>Qué debo hacer si no recibo la confirmación de mi reserva?</b> </h5>
                    <p>

                        -Debe contactar con su agencia Jacarandacar por correo electrónico, facilitándoles el número de su
                        reserva y su dirección de correo electrónico; o mejor contacto por teléfono.

                    </p>

                    <h5><b>Puedo reservar el mismo día del alquiler? </b></h5>
                    <p>

                        -si, puedes hacerlo hasta 4 horas hábiles antes de la salida. siempre y cuando Jacarandacar solo
                        podrá ofrecerle categorías de autos similares que aún estén disponibles. ..
                    </p>
                </div>
            </div>
        @elseif(Session::get('language') == 'it')
            <div class="row" class="text-align:justify;">
                <div class="col-md-6">

                    <h5><b>Cosa includono i prezzi visualizzati su questo sito? </b></h5>
                    <p>
                        -Assicurazione contro tutti i rischi<br>
                        -Chilometraggio illimitato.<br>
                        -Assistenza 24/7.<br>
                        -Consegna gratuita e ritorno all'aeroporto di Marrakech, nonché al tuo hotel o luogo di
                        residenza anche a Marrakech.<br>
                        -Nessun extra nascosto da pagare.<br>
                    </p>

                    <h5><b>La consegna dell'auto è gratuita?</b></h5>
                    <p>
                        -Sì, puoi essere consegnato gratuitamente all'aeroporto o all'hotel o anche a casa tua senza
                        supplemento, questo servizio è gratuito solo su Marrakech, per le altre città è necessario contare
                        un supplemento che varia a seconda della città

                    </p>

                    <h5><b>Quali documenti devo presentare per ritirare il mio veicolo?</b></h5>
                    <p>

                        -Per recuperare il tuo veicolo dovrai presentare la patente di guida del
                        conducenti del veicolo, una copia del passaporto a nome del conducente principale.

                    </p>

                    <h5><b>Le assicurazioni offerte sono un'assicurazione contro tutti i rischi ?</b></h5>
                    <p>

                        -Sì, ma c'è una franchigia da pagare se sei responsabile in caso di incidente.

                    </p>

                    <h5><b>Che tipo di assicurazione è inclusa nei prezzi visualizzati?</b></h5>
                    <p>

                        -Assicurazione contro tutti i rischi con franchigia
                        -Assicurazione per il conducente e le persone trasportate
                    </p>

                    <h5><b>Pagare meno con <b>Jacarandacar</b> è dannoso per la qualità dei veicoli a noleggio?</b>
                    </h5>
                    <p>
                        -No, le nostre auto sono in ottime condizioni e vengono regolarmente sottoposte a controlli tecnici.
                    </p>



                </div>
                <div class="col-md-6">
                    <h5><b>C'è la possibilità di estendere la durata del mio attuale contratto di noleggio?</b></h5>
                    <p>
                        -Certo, tutto quello che devi fare è contattarci via e-mail o telefono per prendere il nostro accordo.
                    </p>

                    <h5><b>Quali sono i passaggi da seguire per prenotare un'auto su Jacarandacar?</b></h5>
                    <p>

                        -Compila semplicemente il modulo di prenotazione sul nostro sito web e inviacelo,
                        avrai una conferma di disponibilità in meno di un'ora. Una volta ricevuta questa conferma
                        dovrai solo confermare la tua prenotazione dalla tua parte e la tua auto sarà bloccata per
                        le date desiderate.


                    </p>

                    <h5><b>È possibile cancellare la mia prenotazione?</b></h5>
                    <p>

                        -Certo, è possibile cancellare la prenotazione fino all'ultimo minuto prima della presa in carico.
                        addebito dell'auto senza spese di cancellazione.

                    </p>

                    <h5><b>Cosa devo fare se non ricevo la conferma della mia prenotazione?</b> </h5>
                    <p>

                        - Devi contattare la tua agenzia Jacarandacar via e-mail, fornendo loro il numero del tuo
                        prenotazione e il tuo indirizzo email; o meglio contatto telefonico.

                    </p>

                    <h5><b>Posso prenotare lo stesso giorno del noleggio? </b></h5>
                    <p>

                        -ui, puoi farlo fino a 4 ore lavorative prima della partenza. a condizione che Jacarandacar non lo sia
                        ti offriamo solo categorie di auto simili ancora disponibili. ..
                    </p>
                </div>
            </div>
        @elseif(Session::get('language') == 'pl')
            <div class="row" class="text-align:justify;">
                <div class="col-md-6">

                    <h5><b>Czego dotyczą ceny widoczne na tej stronie?</b></h5>
                    <p>
                        - Ubezpieczenie pełne<br>
                        - Bez ograniczeń kilometrów.<br>
                        - Pomoc drogowa 24/7.<br>
                        - Darmowa dostawa i odbiór na lotnisku w Marrakeszu oraz do twojego hotelu lub miejsca
                          zamieszkania w Marrakeszu.<br>
                        - Brak ukrytych opłat.<br>
                    </p>
                    
                    <h5><b>Czy dostawa samochodu jest darmowa?</b></h5>
                    <p>
                        - Tak, możesz otrzymać darmową dostawę na lotnisko, do hotelu lub nawet do domu bez
                          dodatkowych opłat, usługa ta jest darmowa tylko w Marrakeszu, dla innych miast
                          konieczne jest dodatkowe opłacenie, które zależy od miasta.
                    
                    </p>
                    
                    <h5><b>Jakie dokumenty muszę przedstawić, aby odebrać mój samochód?</b></h5>
                    <p>
                    
                        - Aby odebrać samochód, będziesz musiał przedstawić prawo jazdy kierowcy lub kierowców
                          pojazdu, kopię paszportu na nazwisko głównego kierowcy.
                    
                    </p>
                    
                    <h5><b>Czy oferowane ubezpieczenia są ubezpieczeniami pełnymi?</b></h5>
                    <p>
                    
                        - Tak, ale w przypadku winy za wypadek należy zapłacić franczyzę.
                    
                    </p>
                    
                    <h5><b>Jakie rodzaje ubezpieczeń są zawarte w podanych cenach?</b></h5>
                    <p>
                    
                        - Ubezpieczenie pełne z franczyzą
                        - Ubezpieczenie dla kierowcy i przewożonych osób
                    </p>
                    
                    <h5><b>Płacenie mniej z Jacarandacar oznacza niższą jakość wynajmowanych samochodów?</b>
                    </h5>
                    <p>
                        - Nie, nasze samochody są w doskonałym stanie i regularnie przechodzą kontrole techniczne.
                    </p>
                </div>
                <div class="col-md-6">
                    <h5><b>Czy Istnieje Możliwość Przedłużenia Czasu Trwania Mojej Obecnej Umowy Wynajmu?</b></h5>
                    <p>
                        -Oczywiście, wystarczy skontaktować się z nami mailowo lub telefonicznie, aby uzyskać naszą zgodę.
                    </p>

                    <h5><b>Jakie Są Kroki Do Podjęcia, Aby Zarezerwować Samochód W Jacarandacar?</b></h5>
                    <p>

                        -Wystarczy wypełnić formularz rezerwacji dostępny na naszej stronie internetowej i przesłać go do nas,
                        otrzymasz potwierdzenie dostępności w ciągu godziny. Po otrzymaniu tego potwierdzenia
                        wystarczy, że potwierdzisz swoją rezerwację po swojej stronie, a Twój samochód zostanie zarezerwowany na
                        wybrane daty.


                    </p>

                    <h5><b>Czy Mogę Anulować Moją Rezerwację?</b></h5>
                    <p>

                        -Oczywiście, możliwe jest anulowanie rezerwacji aż do ostatniej chwili przed odbiorem
                        samochodu bez opłat za anulację.

                    </p>

                    <h5><b>Co Zrobić, Jeśli Nie Otrzymam Potwierdzenia Mojej Rezerwacji?</b> </h5>
                    <p>

                        -Należy skontaktować się mailowo z agencją Jacarandacar, podając numer swojej
                        rezerwacji oraz swój adres e-mail; lub najlepiej skontaktować się telefonicznie.

                    </p>

                    <h5><b>Czy Mogę Zarezerwować Tego Samego Dnia, W Dniu Wynajmu?</b></h5>
                    <p>

                        -Tak, jest to możliwe do zrobienia do 04 godzin roboczych przed wyjazdem. Jednakże, Jacarandacar
                        będzie mógł zaoferować tylko dostępne jeszcze podobne kategorie samochodów. ..
                    </p>
                </div>
            </div>
        @elseif(Session::get('language') == 'nl')
            <div class="row" class="text-align:justify;">
                <div class="col-md-6">
                    <h5><b>Wat zit er inbegrepen bij de prijzen op deze website?</b></h5>
                    <p>
                        - Volledige verzekering<br>
                        - Onbeperkte kilometers.<br>
                        - 24/7 hulp.<br>
                        - Gratis levering en ophaling op de luchthaven van Marrakech en ook bij uw hotel of verblijfplaats in Marrakech.<br>
                        - Geen verborgen extra kosten.<br>
                    </p>
                    <h5><b>Is de levering van de auto gratis?</b></h5>
                    <p>
                        - Ja, u kunt gratis worden geleverd op de luchthaven of bij het hotel of zelfs thuis zonder extra kosten, deze service is alleen gratis in Marrakech, voor andere steden is er een toeslag die varieert afhankelijk van de stad.
                    </p>
                    <h5><b>Welke documenten moet ik tonen om mijn voertuig op te halen?</b></h5>
                    <p>
                        - Om uw voertuig op te halen, moet u het rijbewijs van de bestuurder(s) van het voertuig tonen, een kopie van het paspoort op naam van de hoofdbestuurder.
                    </p>
                    <h5><b>Zijn de aangeboden verzekeringen allrisk verzekeringen?</b></h5>
                    <p>
                        - Ja, maar er is een eigen risico dat u moet betalen als u aansprakelijk bent voor een ongeval.
                    </p>
                    <h5><b>Wat voor soort verzekeringen zijn inbegrepen in de weergegeven prijzen?</b></h5>
                    <p>
                        - Een allrisk verzekering met eigen risico
                        - Een verzekering voor de bestuurder en passagiers
                    </p>
                    <h5><b>Minder betalen met <b>Jacarandacar</b>, gaat dit ten koste van de kwaliteit van de gehuurde voertuigen?</b></h5>
                    <p>
                        - Nee, onze auto's zijn in uitstekende staat en worden regelmatig technisch gecontroleerd.
                    </p>
                </div>
                <div class="col-md-6">
                    <h5><b>Is er een mogelijkheid om de duur van mijn lopende huurovereenkomst te verlengen?</b></h5>
                    <p>
                        - Natuurlijk, u hoeft alleen maar contact met ons op te nemen per e-mail of telefoon om onze goedkeuring te krijgen.
                    </p>
                    <h5><b>Wat zijn de stappen om een auto te reserveren bij Jacarandacar?</b></h5>
                    <p>
                        - Vul eenvoudig het reserveringsformulier in op onze website en stuur het naar ons toe. U ontvangt binnen een uur een beschikbaarheidsbevestiging. Zodra u deze bevestiging heeft ontvangen, hoeft u alleen nog maar uw reservering aan onze kant te bevestigen en uw auto wordt geblokkeerd voor de gewenste data.
                    </p>
                    <h5><b>Kan ik mijn reservering annuleren?</b></h5>
                    <p>
                        - Natuurlijk, u kunt de reservering annuleren tot het laatste moment voor het ophalen van de auto zonder annuleringskosten.
                    </p>
                    <h5><b>Wat moet ik doen als ik geen bevestiging van mijn reservering ontvang?</b></h5>
                    <p>
                        - Neem contact op met uw Jacarandacar-agentschap via e-mail en vermeld het reserveringsnummer en uw e-mailadres; of nog beter, neem telefonisch contact op.
                    </p>
                    <h5><b>Kan ik op dezelfde dag van de huur reserveren?</b></h5>
                    <p>
                        - Ja, dat is mogelijk tot 4 werkuren voor vertrek. Houd er rekening mee dat Jacarandacar alleen nog beschikbare voertuigcategorieën kan aanbieden die vergelijkbaar zijn met uw verzoek.
                    </p>
                </div>
            </div>
        @elseif(Session::get('language') == 'pt')
            <div class="row" class="text-align:justify;">
                <div class="col-md-6">
                    <h5><b>O que está incluído nos preços deste site?</b></h5>
                    <p>
                        - Seguro completo<br>
                        - Quilometragem ilimitada.<br>
                        - Assistência 24/7.<br>
                        - Entrega e recolha gratuitas no aeroporto de Marrakech e também no seu hotel ou residência em Marrakech.<br>
                        - Sem custos adicionais ocultos.<br>
                    </p>
                    <h5><b>A entrega do carro é gratuita?</b></h5>
                    <p>
                        - Sim, você pode ser entregue gratuitamente no aeroporto ou no hotel ou até mesmo em casa sem custo adicional, este serviço é gratuito apenas em Marrakech, para outras cidades há uma taxa adicional que varia dependendo da cidade.
                    </p>
                    <h5><b>Que documentos devo apresentar para pegar o meu veículo?</b></h5>
                    <p>
                        - Para pegar o seu veículo, você deve apresentar a carteira de motorista do(s) condutor(es) do veículo, uma cópia do passaporte em nome do motorista principal.
                    </p>
                    <h5><b>Os seguros oferecidos são seguros abrangentes?</b></h5>
                    <p>
                        - Sim, mas há uma franquia que você deve pagar se for responsável por um acidente.
                    </p>
                    <h5><b>Que tipo de seguros estão incluídos nos preços exibidos?</b></h5>
                    <p>
                        - Um seguro abrangente com franquia
                        - Um seguro para o motorista e passageiros
                    </p>
                    <h5><b>Pagar menos com <b>Jacarandacar</b>, isso compromete a qualidade dos veículos alugados?</b></h5>
                    <p>
                        - Não, nossos carros estão em excelente estado e são regularmente inspecionados tecnicamente.
                    </p>
                </div>
                <div class="col-md-6">
                    <h5><b>É possível prolongar a duração do meu contrato de locação em curso?</b></h5>
                    <p>
                        - Claro, basta entrar em contato conosco por e-mail ou telefone para obter nossa aprovação.
                    </p>
                    <h5><b>Quais são os passos para reservar um carro na Jacarandacar?</b></h5>
                    <p>
                        - Basta preencher o formulário de reserva em nosso site e enviá-lo para nós. Você receberá uma confirmação de disponibilidade dentro de uma hora. Assim que receber esta confirmação, você só precisa confirmar sua reserva do nosso lado e seu carro será bloqueado para as datas desejadas.
                    </p>
                    <h5><b>Posso cancelar a minha reserva?</b></h5>
                    <p>
                        - Claro, você pode cancelar a reserva até o último momento antes de pegar o carro sem custos de cancelamento.
                    </p>
                    <h5><b>O que devo fazer se não receber a confirmação da minha reserva?</b></h5>
                    <p>
                        - Entre em contato com a sua agência Jacarandacar por e-mail e informe o número da reserva e o seu e-mail; ou melhor ainda, entre em contato por telefone.
                    </p>
                    <h5><b>Posso reservar no mesmo dia do aluguel?</b></h5>
                    <p>
                        - Sim, isso é possível até 4 horas úteis antes da partida. Observe que a Jacarandacar só pode oferecer categorias de veículos disponíveis que sejam semelhantes ao seu pedido.
                    </p>
                </div>
            </div>
        @else
            <div class="row" class="text-align:justify;">
                <div class="col-md-6">

                    <h5><b>Que Comprennent Les Prix Affiches Sur Ce Site ? </b></h5>
                    <p>
                        -Assurance tous risques<br>
                        -Kilométrage illimité.<br>
                        -Assistance 24/7.<br>
                        -Livraison et restitution gratuite à l’aéroport de Marrakech ainsi qu’à votre hôtel ou lieu de
                        résidence à Marrakech également.<br>
                        -Aucun supplément caché à payer.<br>
                    </p>

                    <h5><b>La Livraison De La Voiture Est-Elle Gratuite ?</b></h5>
                    <p>
                        -Oui, vous pouvez être livré gratuitement à l’aéroport ou bien à l’hôtel ou même chez vous sans
                        supplément, ce service est gratuit uniquement sur Marrakech, pour les autres villes il faut compter
                        un supplément qui varie selon les villes

                    </p>

                    <h5><b>Quels Documents Dois-Je Présenter Pour Récupérer Mon Véhicule ?</b></h5>
                    <p>

                        -Pour récupérer votre véhicule vous aurez besoin de présenter le permis de conduire du ou des
                        conducteurs du véhicule, une copie du passeport au nom du conducteur principal.

                    </p>

                    <h5><b>Les Assurances Proposées Sont-Elles Des Assurances Tous Risques ?</b></h5>
                    <p>

                        -Oui, mais il y a une franchise à payer si vous êtes responsable en cas d'accident.

                    </p>

                    <h5><b>Quelles Sont Le Genre D’assurances Incluses Dans Les Prix Affichés ?</b></h5>
                    <p>

                        -Une assurance tout risque avec franchise
                        -Une assurance pour le conducteur et les personnes transportées
                    </p>

                    <h5><b>Payer Moins Avec <b>Jacarandacar</b>, Est-Ce Au Détriment De La Qualité Des Véhicules Loués ?</b>
                    </h5>
                    <p>
                        -Non, nos voitures sont en excellent état et subissent régulièrement des contrôles techniques.
                    </p>



                </div>
                <div class="col-md-6">
                    <h5><b>Y A-T-Il Une Possibilité De Prolonger La Durée De Mon Contrat En Cours De Location ?</b></h5>
                    <p>
                        -Bien sûr, il suffit juste de nous contacter par mail ou par téléphone pour prendre notre accord.
                    </p>

                    <h5><b>Quelles Sont Les Étapes À Suivre Pour Pouvoir Réserver Une Voiture Chez Jacarandacar ?</b></h5>
                    <p>

                        -Il suffit de remplir le formulaire de réservation qui est sur notre site web et de nous l’envoyer,
                        vous aurez une confirmation de disponibilité en moins d’une heure. Une fois cette confirmation reçue
                        vous n’aurez qu’à nous confirmer votre réservation de votre côté et votre voiture sera bloquée pour
                        les dates souhaitées.


                    </p>

                    <h5><b>Est-Il Possible D’annuler Ma Réservation ?</b></h5>
                    <p>

                        -Bien sûr, il est possible d’annuler la réservation jusqu’à la dernière minute avant la prise en
                        charge de la voiture sans frais d’annulation.

                    </p>

                    <h5><b>Que dois-je faire si je ne reçois pas la confirmation de ma réservation?</b> </h5>
                    <p>

                        -Il faut contacter par email votre agence Jacarandacar en lui communiquant le numéro de votre
                        réservation et votre adresse email; ou le mieux contacter par téléphone.

                    </p>

                    <h5><b>Est ce je peu réserver le méme jour de la location ? </b></h5>
                    <p>

                        -Oui, vous c'est faisable jusqu’à 04h ouvrées avant le départ. à condition, Jacarandacar ne pourra
                        vous proposer que les catégories de voitures similaires encore disponibles. ..
                    </p>
                </div>
            </div>
        @endif





    </div>
@endsection

@section('footer')
@endsection
